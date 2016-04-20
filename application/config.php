<?php
return array(
    'sitename' => 'sitename var test',
    'cookietime' => 86400,
    'db' => include('config.db.php'),
    'router' => array(
        '([a-z0-9+_\-]+)/([a-z0-9+_\-]+)/([0-9]+)' => '$controller/$action/$id',
        '([a-z0-9+_\-]+)/([a-z0-9+_\-]+)' => '$controller/$action',
        '([a-z0-9+_\-]+)/?' => '$controller',
        '([a-z0-9+_\-]+)\.html' => 'page/read/$id',
    ),
    'scripts'=>array(
        //'/assets/js/jquery-2.1.4.min.js',
        //'/assets/bootstrap/js/bootstrap.min.js',
    ),
    'styles'=>array(
        //'/assets/bootstrap/css/bootstrap.min.css',
        //'/assets/bootstrap/css/bootstrap-theme.min.css',
    ),
);