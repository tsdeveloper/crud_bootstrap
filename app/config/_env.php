<?php

use Dotenv\Dotenv;

define('BASE_PATH', realpath(__DIR__.'/../../'));
define('BASE_VENDOR', realpath(__DIR__ .'/../../vendor/autoload.php'));


require_once __DIR__ .'/../../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createUnsafeImmutable(BASE_PATH);
$dotenv->load();