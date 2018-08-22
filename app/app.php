<?php

$app = new Silex\Application;

$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app->register(new Silex\Provider\AssetServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\LocaleServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider());
$app->register(new Silex\Provider\HttpFragmentServiceProvider());
$app->register(new Silex\Provider\SessionServiceProvider());
//$app->register(new Silex\Provider\RememberMeServiceProvider());
$app->register(new Silex\Provider\DoctrineServiceProvider());
//$app->register(new Silex\Provider\SecurityServiceProvider());
$app->register(new Silex\Provider\SwiftMailerServiceProvider());
$app->register(new Silex\Provider\MonologServiceProvider());
$app->register(new Silex\Provider\WebProfilerServiceProvider());



return $app;