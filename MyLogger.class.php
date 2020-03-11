<?php
class MyLogger
{
    public function log($message) {
        echo $message;
    }
}

$logger = new MyLogger();
$logger->log('Hey! :)');