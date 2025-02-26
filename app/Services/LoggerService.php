<?
namespace App\Services;

class LoggerService
{
    private static $instance = null;
    
    private function __construct() {}

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new LoggerService();
        }
        return self::$instance;
    }

    public function log($message)
    {
        file_put_contents(storage_path('log/custom.log'), $message . "\n", FILE_APPEND);
    }
}