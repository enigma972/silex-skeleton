<?php

require_once __DIR__.'/security.php';

$app['debug'] = false;

// Translation
$app['locale_fallbacks'] = array('en');
$app['translator.cache_dir'] = __DIR__.'/../storage/cache/translation';

// Doctrine DBAL
$app['db.options'] = array(
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'dbname' => 'qwi',
    'user' => 'root',
    'password' => '',
    'charset' => 'utf8'
);

// Doctrine ORM
$app['orm.em.options'] =  array(
	'mappings' => array(
		// Using actual filesystem paths
		array(
				'type' => 'annotation',
				'namespace' => 'app\Entity',
				'path' => __DIR__.'/../src/app/Entity'
		)
	)
);

$app['orm.proxies_dir'] = __DIR__.'/../storage/cache/doctrine/orm/Proxies';
$app['orm.auto_generate_proxies'] = $app['debug'];

// Templates Engine
$app['twig.path'] = array(
	__DIR__.'/../Ressources/views'
);

$app['twig.options'] = array(
	'cache' => __DIR__.'/../storage/cache/twig'
);

// Assets
$app['assets.version'] = 'v1';

// Log
$app['monolog.logfile'] = __DIR__.'/../storage/logs/prod.log';

// Sessions
$app['session.storage.save_path'] = __DIR__.'/../storage/sessions';

// Mail sending
$app['swiftmailer.options'] = array(
	'host' => 'host',
	'port' => '25',
	'username' => 'username',
	'password' => 'password',
	'encryption' => null,
	'auth_mode' => null
);