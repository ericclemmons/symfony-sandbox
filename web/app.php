<?php

require_once __DIR__.'/../app/AppKernel.php';

use Symfony\Component\HttpFoundation\Request;

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', getenv('APPLICATION_ENV') ?: 'production');

$debug = (APPLICATION_ENV !== 'production');

$kernel = new AppKernel(APPLICATION_ENV, $debug);
$kernel->handle(new Request())->send();
