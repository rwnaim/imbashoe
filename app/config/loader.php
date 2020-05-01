<?php

$loader = new \Phalcon\Loader();

/** @var \Phalcon\Config $config */
/**
 * We're a registering a set of directories taken from the configuration file
 */

$loader->registerNamespaces([
    'Phalcon\Db' => APP_PATH . '/lib/Phalcon/Db',
    'App\Controllers' => $config->application->controllersDir,
    'App\Models' => $config->application->modelsDir,
    'App\Validation' => $config->application->validationDir,

]);

$loader->register();

