<?php

namespace App\Command;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\Table;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:generate:entities',
    description: 'Automatically generates entity classes from the database schema',
)]
class GenerateEntitiesCommand extends Command
{
    private Connection $connection;
   
    /** @var AbstractSchemaManager<\Doctrine\DBAL\Platforms\AbstractPlatform> */
    private ?AbstractSchemaManager $schemaManager = null;
   
    /** @var array<string, bool> */
    private array $generatedRelations = [];

    public function __construct(Connection $connection)
    {
        parent::__construct();
        $this->connection = $connection;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Generating Entity Classes from Database...');

        try {
            $schemaManager = $this->getSchemaManager();
            $tables = $schemaManager->listTables();
        } catch (\Exception $e) {
            $io->error('Failed to retrieve database schema: ' . $e->getMessage());
            return Command::FAILURE;
        }

        $oneToManyRelations = [];
        $manyToOneRelationsName = [];
        $oneToManyRelationsName = [];

        $tableRelationsCount = [];

        foreach ($tables as $table) {
            $foreignKeys = $this->getForeignKeys([$table->getName()]);
            $tableRelationsCount[$table->getName()] = count($foreignKeys);
        }

        $tablesArray = $tables;

        usort($tablesArray, function (Table $a, Table $b) use ($tableRelationsCount): int {
            $countA = $tableRelationsCount[$a->getName()] ?? 0;
            $countB = $tableRelationsCount[$b->getName()] ?? 0;

            return $countA <=> $countB;
        });

        foreach ($tablesArray as $table) {
            $this->generateEntity($table, $oneToManyRelations, $manyToOneRelationsName, $oneToManyRelationsName);
            $io->success('Generated: src/Entity/' . ucfirst($table->getName()) . '.php');
        }

        foreach ($tablesArray as $table) {
            $this->generateEntity($table, $oneToManyRelations, $manyToOneRelationsName, $oneToManyRelationsName);
            $io->success('Relations Added: src/Entity/' . ucfirst($table->getName()) . '.php');
        }

        $io->success('Entities successfully generated in src/Entity/');

        return Command::SUCCESS;
    }

    /**
     * @return AbstractSchemaManager<\Doctrine\DBAL\Platforms\AbstractPlatform>
     */
    private function getSchemaManager(): AbstractSchemaManager
    {
        if ($this->schemaManager === null) {
            $this->schemaManager = $this->connection->createSchemaManager();
        }

        return $this->schemaManager;
    }

    /**
     * @param array<string, array<int, string>> $oneToManyRelations
     * @param array<string, string> $manyToOneRelationsName
     * @param array<string, string> $oneToManyRelationsName
     */
    private function generateEntity(
        Table $table,
        array &$oneToManyRelations,
        array &$manyToOneRelationsName,
        array &$oneToManyRelationsName
    ): void {
        $className = ucfirst($table->getName());
        $entityCode = "<?php\n\nnamespace App\\Entity;\n\nuse Doctrine\\ORM\\Mapping as ORM;\n";

        $imports = $this->generateImports($manyToOneRelationsName, $oneToManyRelationsName, $className);

        if ($imports !== '') {
            $entityCode .= "\n" . $imports;
        }

        $entityCode .= "\n\n";
        $entityCode .= "#[ORM\\Entity]\n";
        $entityCode .= "#[ORM\\Table(name: '" . $table->getName() . "')]\n";
        $entityCode .= "class $className\n{\n";

        $primaryKeys = $table->getPrimaryKey()?->getColumns() ?? [];
        $foreignKeys = $this->getForeignKeys([$table->getName()]);

        foreach ($table->getColumns() as $column) {
            $entityCode .= $this->generateProperty(
                $column,
                $primaryKeys,
                $foreignKeys,
                $className,
                $oneToManyRelations,
                $manyToOneRelationsName,
                $oneToManyRelationsName
            );
        }

        foreach ($table->getColumns() as $column) {
            $entityCode .= $this->generateGettersAndSetters($column);
        }

        if (isset($oneToManyRelations[$className])) {
            $processedRelations = [];

            foreach ($oneToManyRelations[$className] as $relation) {
                if (in_array($relation, $processedRelations, true)) {
                    continue;
                }

                $entityCode .= $relation;
                $processedRelations[] = $relation;

                $relationArray = $this->parseRelationAnnotation($relation);

                if ($relationArray !== null && isset($relationArray['mappedBy'], $relationArray['targetEntity'])) {
                    $relationKey = $className . '-' . $relationArray['mappedBy'];

                    if (!isset($this->generatedRelations[$relationKey])) {
                        $entityCode .= $this->generateRelationMethods(
                            $relationArray['mappedBy'],
                            $relationArray['targetEntity']
                        );

                        $this->generatedRelations[$relationKey] = true;
                    }
                }
            }
        }

        $entityCode .= "}\n";

        $filePath = __DIR__ . '/../../src/Entity/' . $className . '.php';
        $directory = dirname($filePath);

        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        file_put_contents($filePath, $entityCode);
    }

    /**
     * @return array<string, string>|null
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
     * @param array<string, string> $manyToOneRelationsName
     * @param array<string, string> $oneToManyRelationsName
     */
    private function generateImports(array $manyToOneRelationsName, array $oneToManyRelationsName, string $className): string
    {
        $imports = [];

        foreach ($manyToOneRelationsName as $key => $value) {
            if ($key === $className) {
                $imports[] = 'App\\Entity\\' . ucfirst($value);
            }
        }

        foreach ($oneToManyRelationsName as $key => $value) {
            if ($key === $className) {
                $imports[] = 'Doctrine\\Common\\Collections\\Collection';
                $imports[] = 'App\\Entity\\' . ucfirst($value);
            }
        }

        $imports = array_unique($imports);

        if ($imports === []) {
            return '';
        }

        return 'use ' . implode(";\nuse ", $imports) . ';';
    }

    /**
     * @param array<int, string> $tables
     * @return array<string, array<string, string>>
     */
    public function getForeignKeys(array $tables): array
    {
        $foreignKeys = [];

        $schemaManager = $this->getSchemaManager();
        $dbTables = $schemaManager->listTables();
        $tableNames = array_map(static fn (Table $table): string => $table->getName(), $dbTables);

        foreach ($tables as $tableName) {
            if (!in_array($tableName, $tableNames, true)) {
                continue;
            }

            $sql = '
                SELECT
                    COLUMN_NAME,
                    REFERENCED_TABLE_NAME,
                    REFERENCED_COLUMN_NAME
                FROM
                    INFORMATION_SCHEMA.KEY_COLUMN_USAGE
                WHERE
                    TABLE_NAME = :tableName AND
                    REFERENCED_TABLE_NAME IS NOT NULL
                ';

            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue(':tableName', $tableName);
            $fks = $stmt->executeQuery()->fetchAllAssociative();

            foreach ($fks as $fk) {
                $columnName = (string) $fk['COLUMN_NAME'];

                $foreignKeys[$columnName] = [
                    'referencedTable' => (string) $fk['REFERENCED_TABLE_NAME'],
                    'referencedColumn' => (string) $fk['REFERENCED_COLUMN_NAME'],
                ];
            }
        }

        return $foreignKeys;
    }

    private function generateRelationMethods(string $propertyName, string $relatedEntity): string
    {
        $relatedEntityClass = ucfirst($relatedEntity);
        $relatedEntityVariable = lcfirst($relatedEntity);

        return "\n
    public function get" . $relatedEntityClass . "s(): Collection
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
     * @param array<int, string> $primaryKeys
     * @param array<string, array<string, string>> $foreignKeys
     * @param array<string, array<int, string>> $oneToManyRelations
     * @param array<string, string> $manyToOneRelationsName
     * @param array<string, string> $oneToManyRelationsName
     */
    private function generateProperty(
        Column $column,
        array $primaryKeys,
        array $foreignKeys,
        string $className,
        array &$oneToManyRelations,
        array &$manyToOneRelationsName,
        array &$oneToManyRelationsName
    ): string {
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

        $lengthAnnotation = ($doctrineType === 'string' && $length !== null && $length > 0) ? ', length: ' . $length : '';
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
            $primaryKeyColumn = $primaryKeyColumns[0] ?? 'id';

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

    private function getDefaultValue(string $doctrineType): string
    {
        return match ($doctrineType) {
            'integer', 'bigint', 'smallint' => '0',
            'boolean' => 'false',
            'float' => '0.0',
            default => "''",
        };
    }

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
     * @return array<int, string>
     */
    private function getPrimaryKeyColumns(string $tableName): array
    {
        try {
            $schemaManager = $this->getSchemaManager();
            $table = $schemaManager->introspectTable($tableName);

            return $table->getPrimaryKey()?->getColumns() ?? [];
        } catch (\Exception) {
            return ['id'];
        }
    }

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