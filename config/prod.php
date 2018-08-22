<?php

// La traduction
$app['locale_fallbacks'] = array('en');

// La base de données
$app['db.options'] = array(
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'dbname' => 'qwi',
    'user' => 'root',
    'password' => '',
    'charset' => 'utf8'
);

// Le moteur de templates
$app['twig.path'] = array(
	__DIR__.'/../Ressources/views'
);

$app['twig.options'] = array(
	'cache' => __DIR__.'/../storage/cache/twig'
);

// Les assets
$app['assets.version'] = 'v1';

// Les logs
$app['monolog.logfile'] = __DIR__.'/../storage/logs/prod.log';

// Les sessions
$app['session.storage.save_path'] = __DIR__.'/../storage/sessions';