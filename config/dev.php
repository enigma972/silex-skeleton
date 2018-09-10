<?php
require_once __DIR__.'/prod.php';

$app['debug'] = true;
$app['monolog.logfile'] = APP_BASE_DIR.'storage/logs/dev.log';


$app->register(new Silex\Provider\WebProfilerServiceProvider(), array(
    'profiler.cache_dir' => APP_BASE_DIR.'storage/cache/dev/profiler'
));

$app['translator.cache_dir'] = APP_BASE_DIR.'storage/cache/dev/translation';
$app['orm.proxies_dir'] = APP_BASE_DIR.'storage/cache/dev/doctrine/orm/Proxies';

$app['twig.options'] = array(
    'cache' => APP_BASE_DIR.'storage/cache/dev/twig'
);