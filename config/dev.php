<?php
require_once __DIR__.'/prod.php';

$app['debug'] = true;
$app['monolog.logfile'] = __DIR__.'/../storage/logs/dev.log';
$app['profiler.cache_dir'] = __DIR__.'/../storage/cache/profiler';