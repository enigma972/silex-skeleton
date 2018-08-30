<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

$app = require __DIR__.'/../app/app.php';

require 'dev.php';

// You can append new commands to $commands array, if needed

return ConsoleRunner::createHelperSet($app['orm.em']);