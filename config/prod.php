<?php

require_once __DIR__.'/security.php';

// La traduction
$app['locale_fallbacks'] = array('en');
$app['locale_fallbacks'] = __DIR__.'/../storage/cache/translation';

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

// Envoi d'email
$app['swiftmailer.options'] = array(
	'host' => 'host',
	'port' => '25',
	'username' => 'username',
	'password' => 'password',
	'encryption' => null,
	'auth_mode' => null
);