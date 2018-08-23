<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../app/app.php';
require_once __DIR__.'/../config/prod.php';
require_once __DIR__.'/../app/routes.php';


$app->run();