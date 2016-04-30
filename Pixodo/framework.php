<?php

if (version_compare(phpversion(), '5.5.0', '<')) {
    printf("PHP 5.5.0 is required, you have %s\n", phpversion());
    exit(1);
}

function class_autoload($class_name)
{
    $file = PIXODO.'classes/'.ucfirst($class_name).'.php';
    if (file_exists($file) == false) {
        return false;
    }
    require_once $file;

    return true;
}

function controller_autoload($class_name)
{
    $file = APP.'controllers/'.preg_replace('#controller$#i', 'Controller', ucfirst($class_name)).'.php';
    if (file_exists($file) == false) {
        return false;
    }
    require_once $file;

    return true;
}

function console_autoload($class_name)
{
    $file = APP.'console/'.preg_replace('#console#i', 'Console', ucfirst($class_name)).'.php';
    if (file_exists($file) == false) {
        return false;
    }
    require_once $file;

    return true;
}

function model_autoload($class_name)
{
    $file = APP.'models/'.preg_replace('#model#i', 'Model', ucfirst($class_name)).'.php';
    if (file_exists($file) == false) {
        return false;
    }
    require_once $file;

    return true;
}

function components_autoload($class_name)
{
    $file = APP.'components/'.ucfirst($class_name).'.php';
    if (file_exists($file) == false) {
        return false;
    }
    require_once $file;

    return true;
}

spl_autoload_register('class_autoload');
spl_autoload_register('components_autoload');
spl_autoload_register('controller_autoload');
spl_autoload_register('console_autoload');
spl_autoload_register('model_autoload');
