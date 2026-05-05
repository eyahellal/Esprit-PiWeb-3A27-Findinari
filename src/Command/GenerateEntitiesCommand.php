<?php

namespace App\Command;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\Table;
use Symfony\Component\Console\Attribute\AsCommand;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Filesystem\Filesystem;

#[AsCommand(
    name: 'app:generate:entities',
    description: 'Automatically generates entity classes from the database schema',
)]
class GenerateEntitiesCommand extends Command
{
    private Connection $connection;
    private ?AbstractSchemaManager $schemaManager = null;
    private array $generatedRelations = [];

    /**
     * Constructor.
     *
     * @param Connection $connection The database connection instance.
     * @param Filesystem $filesystem The filesystem instance (kept for DI compatibility)
     */
    public function __construct(Connection $connection, Filesystem $filesystem)
    {
        parent::__construct();
        $this->connection = $connection;
        // $filesystem parameter is kept for dependency injection compatibility
        // It is intentionally not used in this command
    }

    /**
     * Executes the command to generate entity classes.
     *
     * @param InputInterface $input  Input interface.
     * @param OutputInterface $output Output interface.
     * @return int Command exit status.
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title("Generating Entity Classes from Database...");

        try {
            $schemaManager = $this->getSchemaManager();
            $tables = $schemaManager->listTables();
        } catch (\Exception $e) {
            $io->error("Failed to retrieve database schema: " . $e->getMessage());
            return Command::FAILURE;
        }

        $oneToManyRelations = [];
        $manyToOneRelationsName = [];
        $oneToManyRelationsName = [];

        // Count relations for each table
        $tableRelationsCount = [];
        foreach ($tables as $table) {
            $foreignKeys = $this->getForeignKeys([$table->getName()]);
            $relationCount = count($foreignKeys);
            $tableRelationsCount[$table->getName()] = $relationCount;
        }

        // Sort tables by their relation count in ascending order
        $tablesArray = $tables;
        usort($tablesArray, function (Table $a, Table $b) use ($tableRelationsCount) {
            $countA = $tableRelationsCount[$a->getName()] ?? 0;
            $countB = $tableRelationsCount[$b->getName()] ?? 0;
            return $countA <=> $countB;
        });

        // Generate entities in sorted order
        foreach ($tablesArray as $table) {
            $this->generateEntity($table, $oneToManyRelations, $manyToOneRelationsName, $oneToManyRelationsName);
            $io->success("Generated: src/Entity/" . ucfirst($table->getName()) . ".php");
        }

        foreach ($tablesArray as $table) {
            $this->generateEntity($table, $oneToManyRelations, $manyToOneRelationsName, $oneToManyRelationsName);
            $io->success("Relations Added: src/Entity/" . ucfirst($table->getName()) . ".php");
        }

        $io->success("Entities successfully generated in src/Entity/");
        return Command::SUCCESS;
    }

    /**
     * Retrieves the schema manager instance, caching it to avoid redundant queries.
     *
     * @return AbstractSchemaManager The schema manager.
     */
    private function getSchemaManager(): AbstractSchemaManager
    {
        if ($this->schemaManager === null) {
            $this->schemaManager = $this->connection->createSchemaManager();
        }
        return $this->schemaManager;
    }

    /**
     * Generates an entity class from a database table.
     *
     * @param Table $table The database table.
     * @param array<string, array<int, string>> &$oneToManyRelations Reference to OneToMany relations.
     * @param array<string, string> &$manyToOneRelationsName Reference to ManyToOne relations.
     * @param array<string, string> &$oneToManyRelationsName Reference to OneToMany relations names.
     */
    private function generateEntity(Table $table, array &$oneToManyRelations, array &$manyToOneRelationsName, array &$oneToManyRelationsName): void
    {
        $className = ucfirst($table->getName());
        $entityCode = "<?php\n\nnamespace App\\Entity;\n\nuse Doctrine\\ORM\\Mapping as ORM;\n";

        $imports = $this->generateImports($manyToOneRelationsName, $oneToManyRelationsName, $className);

        // Add imports
        if (!empty($imports)) {
            $entityCode .= "\n" . $imports;
        }

        $entityCode .= "\n\n";

        // Add entity annotation
        $entityCode .= "#[ORM\\Entity]\n";
        $entityCode .= "#[ORM\\Table(name: '" . $table->getName() . "')]\n";
        $entityCode .= "class $className\n{\n";

        // Get primary key(s)
        $primaryKeys = $table->getPrimaryKey()?->getColumns() ?? [];

        // Get foreign key constraints
        $foreignKeys = $this->getForeignKeys([$table->getName()]);

        foreach ($table->getColumns() as $column) {
            $entityCode .= $this->generateProperty($column, $primaryKeys, $foreignKeys, $className, $oneToManyRelations, $manyToOneRelationsName, $oneToManyRelationsName);
        }

        // Generate getters and setters
        foreach ($table->getColumns() as $column) {
            $entityCode .= $this->generateGettersAndSetters($column);
        }

        // Inject stored OneToMany relations into the correct entities
        if (isset($oneToManyRelations[$className])) {
            $processedRelations = [];

            foreach ($oneToManyRelations[$className] as $relation) {
                if (!in_array($relation, $processedRelations, true)) {
                    $entityCode .= $relation;
                    $processedRelations[] = $relation;

                    $relationArray = $this->parseRelationAnnotation($relation);
                    if ($relationArray !== null && isset($relationArray['mappedBy'], $relationArray['targetEntity'])) {
                        $relationKey = "$className-{$relationArray['mappedBy']}";

                        if (!isset($this->generatedRelations[$relationKey])) {
                            $entityCode .= $this->generateRelationMethods($className, $relationArray['mappedBy'], $relationArray['targetEntity']);
                            $this->generatedRelations[$relationKey] = true;
                        }
                    }
                }
            }
        }

        $entityCode .= "}\n";

        // Save the entity file
        $filePath = __DIR__ . "/../../src/Entity/$className.php";
        $directory = dirname($filePath);
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }
        file_put_contents($filePath, $entityCode);
    }

    /**
     * Parses a relation annotation to extract mappedBy and targetEntity.
     *
     * @param string $relation The relation annotation string.
     * @return array<string, string>|null The parsed relation data or null if parsing fails.
     */
    private function parseRelationAnnotation(string $relation): ?array
    {
        $result = [];
       
        if (preg_match('/mappedBy: "([^"]+)"/', $relation, $matches)) {
            $result['mappedBy'] = $matches[1];
        } else {
            return null;
        }
       
        if (preg_match('/targetEntity: ([^:]+)::class/', $relation, $matches)) {
            $result['targetEntity'] = $matches[1];
        } else {
            return null;
        }
       
        return $result;
    }

    /**
     * Generates necessary import statements based on detected relations.
     *
     * @param array<string, string> $manyToOneRelationsName ManyToOne relations.
     * @param array<string, string> $oneToManyRelationsName OneToMany relations.
     * @param string $className The name of the entity class.
     * @return string Formatted import statements.
     */
    private function generateImports(array $manyToOneRelationsName, array $oneToManyRelationsName, string $className): string
    {
        $imports = [];

        foreach ($manyToOneRelationsName as $key => $value) {
            if ($key === $className) {
                $imports[] = "App\\Entity\\" . ucfirst($value);
            }
        }

        foreach ($oneToManyRelationsName as $key => $value) {
            if ($key === $className) {
                $imports[] = "Doctrine\\Common\\Collections\\Collection";
                $imports[] = "App\\Entity\\" . ucfirst($value);
            }
        }

        // Remove duplicates
        $imports = array_unique($imports);

        if (count($imports) === 0) {
            return "";
        }
       
        return "use " . implode(";\nuse ", $imports) . ";";
    }

    /**
     * Retrieves foreign key constraints from the database.
     *
     * @param array<int, string> $tables List of table names.
     * @return array<string, array<string, string>> Associative array of foreign keys.
     */
    public function getForeignKeys(array $tables): array
    {
        $foreignKeys = [];

        $schemaManager = $this->getSchemaManager();
        $dbTables = $schemaManager->listTables();
       
        $tableNames = array_map(fn($table) => $table->getName(), $dbTables);

        foreach ($tables as $tableName) {
            if (in_array($tableName, $tableNames, true)) {
                $sql = "
                SELECT
                    COLUMN_NAME,
                    REFERENCED_TABLE_NAME,
                    REFERENCED_COLUMN_NAME
                FROM
                    INFORMATION_SCHEMA.KEY_COLUMN_USAGE
                WHERE
                    TABLE_NAME = :tableName AND
                    REFERENCED_TABLE_NAME IS NOT NULL
                ";

                $stmt = $this->connection->prepare($sql);
                $stmt->bindValue(':tableName', $tableName);
                $fks = $stmt->executeQuery()->fetchAllAssociative();

                foreach ($fks as $fk) {
                    $foreignKeys[$fk['COLUMN_NAME']] = [
                        'referencedTable' => $fk['REFERENCED_TABLE_NAME'],
                        'referencedColumn' => $fk['REFERENCED_COLUMN_NAME']
                    ];
                }
            }
        }

        return $foreignKeys;
    }

    /**
     * Generates relation methods for OneToMany and ManyToOne relations.
     *
     * @param string $currentEntity The current entity name.
     * @param string $propertyName The property name representing the relation.
     * @param string $relatedEntity The related entity name.
     * @return string The generated method code.
     */
    private function generateRelationMethods(string $currentEntity, string $propertyName, string $relatedEntity): string
    {
        $collectionType = "Collection";
        $relatedEntityClass = ucfirst($relatedEntity);
        $relatedEntityVariable = lcfirst($relatedEntity);

        return "\n
        public function get" . $relatedEntityClass . "s(): $collectionType
        {
            return \$this->" . $relatedEntityVariable . "s;
        }
   
        public function add{$relatedEntityClass}({$relatedEntityClass} \${$relatedEntityVariable}): self
        {
            if (!\$this->{$relatedEntityVariable}s->contains(\${$relatedEntityVariable})) {
                \$this->{$relatedEntityVariable}s[] = \${$relatedEntityVariable};
                \${$relatedEntityVariable}->set" . ucfirst($propertyName) . "(\$this);
            }
   
            return \$this;
        }
   
        public function remove{$relatedEntityClass}({$relatedEntityClass} \${$relatedEntityVariable}): self
        {
            if (\$this->{$relatedEntityVariable}s->removeElement(\${$relatedEntityVariable})) {
                if (\${$relatedEntityVariable}->get" . ucfirst($propertyName) . "() === \$this) {
                    \${$relatedEntityVariable}->set" . ucfirst($propertyName) . "(null);
                }
            }
   
            return \$this;
        }\n";
    }

    /**
     * Generates entity properties based on database columns.
     *
     * @param Column $column The database column.
     * @param array<int, string> $primaryKeys List of primary keys.
     * @param array<string, array<string, string>> $foreignKeys List of foreign keys.
     * @param string $className The entity class name.
     * @param array<string, array<int, string>> &$oneToManyRelations Reference to OneToMany relations.
     * @param array<string, string> &$manyToOneRelationsName Reference to ManyToOne relations.
     * @param array<string, string> &$oneToManyRelationsName Reference to OneToMany relations names.
     * @return string The generated property code.
     */
    private function generateProperty(Column $column, array $primaryKeys, array $foreignKeys, string $className, array &$oneToManyRelations, array &$manyToOneRelationsName, array &$oneToManyRelationsName): string
    {
        $columnName = $column->getName();
        $typeClass = get_class($column->getType());
        $length = $column->getLength();
        $isPrimaryKey = in_array($columnName, $primaryKeys, true);
        $isForeignKey = isset($foreignKeys[$columnName]);

        $doctrineType = match ($typeClass) {
            'Doctrine\DBAL\Types\IntegerType' => 'integer',
            'Doctrine\DBAL\Types\BigIntType' => 'bigint',
            'Doctrine\DBAL\Types\SmallIntType' => 'smallint',
            'Doctrine\DBAL\Types\BooleanType' => 'boolean',
            'Doctrine\DBAL\Types\DateTimeType', 'Doctrine\DBAL\Types\TimestampType' => 'datetime',
            'Doctrine\DBAL\Types\DateType' => 'date',
            'Doctrine\DBAL\Types\TextType' => 'text',
            'Doctrine\DBAL\Types\DecimalType', 'Doctrine\DBAL\Types\FloatType', 'Doctrine\DBAL\Types\DoubleType' => 'float',
            'Doctrine\DBAL\Types\StringType', 'Doctrine\DBAL\Types\VarCharType' => 'string',
            default => 'string',
        };

        $lengthAnnotation = ($doctrineType === 'string' && $length !== null && $length > 0) ? ", length: $length" : "";
        $phpType = $this->getPHPTypeFromDoctrine($doctrineType);
        $propertyCode = "\n";

        if ($isPrimaryKey) {
            $propertyCode .= "    #[ORM\\Id]\n";
            if ($doctrineType === 'integer' || $doctrineType === 'bigint') {
                $propertyCode .= "    #[ORM\\GeneratedValue]\n";
            }
        }

        if ($isForeignKey) {
            $relatedEntity = $foreignKeys[$columnName]['referencedTable'];
            $relatedClassName = ucfirst($relatedEntity);
            $primaryKeyColumns = $this->getPrimaryKeyColumns($relatedEntity);
            $primaryKeyColumn = !empty($primaryKeyColumns) ? $primaryKeyColumns[0] : 'id';

            $propertyCode .= "    #[ORM\\ManyToOne(targetEntity: $relatedClassName::class)]\n";
            $propertyCode .= "    #[ORM\\JoinColumn(name: '$columnName', referencedColumnName: '$primaryKeyColumn', nullable: false)]\n";
            $propertyCode .= "    private ?$relatedClassName \$$columnName = null;\n";

            $manyToOneRelationsName[$className] = $relatedClassName;
            $oneToManyRelationsName[$relatedClassName] = $className;
            $oneToManyRelations[$relatedClassName][] = "\n    #[ORM\\OneToMany(mappedBy: \"$columnName\", targetEntity: $className::class)]\n    private Collection \$" . lcfirst($className) . "s;\n";
        } else {
            $propertyCode .= "    #[ORM\\Column(type: \"$doctrineType\"$lengthAnnotation)]\n";
           
            if ($doctrineType === 'datetime' || $doctrineType === 'date') {
                $propertyCode .= "    private ?\\DateTimeInterface \$$columnName = null;\n";
            } else {
                $defaultValue = $this->getDefaultValue($doctrineType);
                $propertyCode .= "    private $phpType \$$columnName = $defaultValue;\n";
            }
        }

        return $propertyCode;
    }

    /**
     * Gets the default value for a PHP type.
     *
     * @param string $doctrineType The Doctrine type.
     * @return string The default value as string.
     */
    private function getDefaultValue(string $doctrineType): string
    {
        return match ($doctrineType) {
            'integer', 'bigint', 'smallint' => '0',
            'boolean' => 'false',
            'float' => '0.0',
            default => "''",
        };
    }

    /**
     * Gets the PHP type from Doctrine type.
     *
     * @param string $doctrineType The Doctrine type.
     * @return string The PHP type.
     */
    private function getPHPTypeFromDoctrine(string $doctrineType): string
    {
        return match ($doctrineType) {
            'integer', 'bigint', 'smallint' => 'int',
            'boolean' => 'bool',
            'float' => 'float',
            'datetime', 'date' => '?\\DateTimeInterface',
            default => 'string',
        };
    }

    /**
     * Gets primary key columns of a table.
     *
     * @param string $tableName The table name.
     * @return array<int, string> List of primary key columns.
     */
    private function getPrimaryKeyColumns(string $tableName): array
    {
        try {
            $schemaManager = $this->getSchemaManager();
            $table = $schemaManager->introspectTable($tableName);
            return $table->getPrimaryKey()?->getColumns() ?? [];
        } catch (\Exception $e) {
            return ['id'];
        }
    }

    /**
     * Generates getter and setter methods for a column.
     *
     * @param Column $column The database column.
     * @return string The generated getter and setter code.
     */
    private function generateGettersAndSetters(Column $column): string
    {
        $columnName = $column->getName();
        $methodName = ucfirst($columnName);
        $doctrineType = $this->getDoctrineType($column);
        $phpType = $this->getPHPTypeFromDoctrine($doctrineType);
       
        $getter = "\n    public function get$methodName(): $phpType\n    {\n        return \$this->$columnName;\n    }\n";
       
        if ($doctrineType === 'datetime' || $doctrineType === 'date') {
            $setter = "\n    public function set$methodName(?" . str_replace('?', '', $phpType) . " \$$columnName): self\n    {\n        \$this->$columnName = \$$columnName;\n        return \$this;\n    }\n";
        } else {
            $setter = "\n    public function set$methodName($phpType \$$columnName): self\n    {\n        \$this->$columnName = \$$columnName;\n        return \$this;\n    }\n";
        }
       
        return $getter . $setter;
    }

    /**
     * Gets Doctrine type from column.
     *
     * @param Column $column The database column.
     * @return string The Doctrine type.
     */
    private function getDoctrineType(Column $column): string
    {
        $typeClass = get_class($column->getType());
       
        return match ($typeClass) {
            'Doctrine\DBAL\Types\IntegerType' => 'integer',
            'Doctrine\DBAL\Types\BigIntType' => 'bigint',
            'Doctrine\DBAL\Types\SmallIntType' => 'smallint',
            'Doctrine\DBAL\Types\BooleanType' => 'boolean',
            'Doctrine\DBAL\Types\DateTimeType', 'Doctrine\DBAL\Types\TimestampType' => 'datetime',
            'Doctrine\DBAL\Types\DateType' => 'date',
            'Doctrine\DBAL\Types\TextType' => 'text',
            'Doctrine\DBAL\Types\DecimalType', 'Doctrine\DBAL\Types\FloatType', 'Doctrine\DBAL\Types\DoubleType' => 'float',
            'Doctrine\DBAL\Types\StringType', 'Doctrine\DBAL\Types\VarCharType' => 'string',
            default => 'string',
        };
    }
}