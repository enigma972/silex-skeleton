<?php
const APP_BASE_DIR = __DIR__.'/../';

require_once __DIR__.'/security.php';

$app['debug'] = false;

// Translation
$app['locale_fallbacks'] = array('en');
$app['translator.cache_dir'] = APP_BASE_DIR.'storage/cache/prod/translation';

// Doctrine DBAL
$app['db.options'] = array(
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'dbname' => 'silex',
    'user' => 'root',
    'password' => 'root',
    'charset' => 'utf8'
);

// Doctrine ORM
$app['orm.em.options'] =  array(
	'mappings' => array(
		// Using actual filesystem paths
		array(
				'type' => 'annotation',
				'namespace' => 'app\Entity',
				'path' => APP_BASE_DIR.'src/app/Entity'
		)
	)
);

$app['orm.proxies_dir'] = APP_BASE_DIR.'storage/cache/prod/doctrine/orm/Proxies';
$app['orm.auto_generate_proxies'] = $app['debug'];

// Templates Engine
$app['twig.path'] = array(
	APP_BASE_DIR.'Ressources/views'
);

$app['twig.options'] = array(
	'cache' => APP_BASE_DIR.'storage/cache/prod/twig'
);

// Assets
$app['assets.version'] = 'v1';
//$app['assets.base_path'] = APP_BASE_DIR.'Ressources/public';
//$app['assets.base_urls'] = 'http//localhost:8888/public';

// Log
$app['monolog.logfile'] = APP_BASE_DIR.'storage/logs/prod.log';

// Sessions
$app['session.storage.save_path'] = APP_BASE_DIR.'storage/sessions';

// Mail sending
$app['swiftmailer.options'] = array(
	'host' => 'host',
	'port' => '25',
	'username' => 'username',
	'password' => 'password',
	'encryption' => null,
	'auth_mode' => null
);