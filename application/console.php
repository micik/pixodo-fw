<?php

return [
    'sitename'   => 'console app',
    'db'         => require('config.db.php'),
    'router'     => [
        '([a-z0-9+_\-]+)/([a-z0-9+_\-]+)/([0-9]+)' => '$controller/$action/$id',
        '([a-z0-9+_\-]+)/([a-z0-9+_\-]+)'          => '$controller/$action',
        '([a-z0-9+_\-]+)/?'                        => '$controller'
    ]
];
