<?php

$loader->import(__DIR__.'/../config.php');

$container->loadFromExtension('app', 'config', array(
    'router'   => array('resource' => '%kernel.root_dir%/config/development/routing.php'),
    'profiler' => array('only-exceptions' => false),
));

$container->loadFromExtension('webprofiler', 'config', array(
    'toolbar' => true,
    'intercept-redirects' => true,
));

$container->loadFromExtension('zend', 'config', array(
    'logger' => array(
        'priority' => 'info',
        'path'     => '%kernel.logs_dir%/%kernel.environment%.log',
    ),
));
