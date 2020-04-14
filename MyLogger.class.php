<?php
class MyLogger
{
    public function log($message, $type)
    {
        switch ($type) {
            case 'INFO':
                $this->info($message);
                break;
            case 'ERROR':
                $this->error($message);
                break;
            case 'WARNING':
                $this->warning($message);
                break;
            case 'DEBUG':
                $this->debug($message);
                break;
            default:
                echo $message;
                break;
        }
    }

    public function error($message)
    {
        echo 'ERROR: ' . $message . "\n";
    }

    public function info($message)
    {
        echo 'INFO: ' . $message . "\n";
    }

    public function warning($message)
    {
        echo 'WARNING: ' . $message . "\n";
    }

    public function debug($message)
    {
        echo 'DEBUG: ' . $message . "\n";
    }
}


$logger = new MyLogger();
$logger->log('Hey! :)', 'INFO');
$logger->error('This is an error!');