<?php

$file = __DIR__.'/../vendor/autoload.php';
if (!file_exists($file)) {
    throw new RuntimeException('Install Composer dependencies (using `composer install` command) to run test suite.');
}
$autoload = require_once $file;