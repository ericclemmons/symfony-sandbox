<?php

$loader->import(__DIR__.'/../development/config.php');

$container->loadFromExtension('app', 'config', array(
    'error_handler' => false,
    'test'          => true,
));

$container->loadFromExtension('webprofiler', 'config', array(
    'toolbar' => false,
    'intercept-redirects' => false,
));

$container->loadFromExtension('zend', 'config', array(
    'logger' => array('priority' => 'debug'),
));
