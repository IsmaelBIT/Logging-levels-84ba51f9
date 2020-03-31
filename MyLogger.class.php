<?php
class MyLogger
{
    public function log($message, $type) {
        switch ($type) {
            case 'INFO':
                echo 'INFO: ' . $message . "\n";
                break;
        }
    }

    public function error($message) {
        echo 'ERROR: ' . $message . "\n";
    }
}

$logger = new MyLogger();
$logger->log('Hey! :)', 'INFO');
$logger->error('This is an error!');