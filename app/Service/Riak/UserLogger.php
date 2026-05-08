<?php
namespace App\Service\Riak;

class UserLogger {
    protected array $config;
    public function __construct(array $config) {
        $this->config = $config;
    }

    function logUser(string $name, string $email) {
        $timestamp = date('Y-m-d H:i:s');
        $logEntry = "[$timestamp] 記錄使用者: {$name}, {$email}" . PHP_EOL;
        
        $logDir = storage_path('logs/userlog');
        if (!is_dir($logDir)) {
            mkdir($logDir, 0755, true);
        }
        
        $filename = $this->config['filename'] ?? 'default.log';
        file_put_contents($logDir . '/' . $filename, $logEntry, FILE_APPEND);
        
        return $logEntry;
    }
}