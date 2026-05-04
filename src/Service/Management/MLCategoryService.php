<?php

namespace App\Service\Management;

class MLCategoryService
{
    private string $pythonPath;
    private string $scriptPath;

    public function __construct()
    {
        $this->pythonPath = 'python';
       

        $projectRoot = dirname(__DIR__, 2);
        $this->scriptPath = $projectRoot . DIRECTORY_SEPARATOR . 'malek_ml' . DIRECTORY_SEPARATOR . 'predict.py';
    }

    public function predictCategory(
        string $description,
        float $amount,
        string $type = 'debit'
    ): array {
        $command = sprintf(
            '%s %s %s %s %s 2>&1',
            escapeshellcmd($this->pythonPath),
            escapeshellarg($this->scriptPath),
            escapeshellarg($description),
            escapeshellarg((string)$amount),
            escapeshellarg($type)
        );

        // Debug — remove after fixing
        error_log("ML Command: " . $command);

        $output = shell_exec($command);

        // Debug — remove after fixing
        error_log("ML Output: " . var_export($output, true));

        if (!$output) {
            return ['category' => null, 'confidence' => 0];
        }

        // Find JSON in output
        $lines = explode("\n", trim($output));
        foreach ($lines as $line) {
            $line = trim($line);
            if (str_starts_with($line, '{')) {
                $result = json_decode($line, true);
                if ($result) {
                    return $result;
                }
            }
        }

        return ['category' => null, 'confidence' => 0];
    }
}