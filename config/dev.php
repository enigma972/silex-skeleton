<?php
require_once __DIR__.'/prod.php';

$app['debug'] = true;
$app['monolog.logfile'] = APP_BASE_DIR.'storage/logs/dev.log';
$app['profiler.cache_dir'] = APP_BASE_DIR.'storage/cache/profiler';