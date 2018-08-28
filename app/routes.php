<?php
	
use Symfony\Component\HttpFoundation\Response;


$app->get('/', "app\controllers\AppController::index")->bind('index_page');
$app->post('/post', "app\controllers\AppController::index");
$app->match('/all', "app\controllers\AppController::index");

$app->error(function() use ($app) {
	if($app['debug']) {
		return;
	}

	return new Response('Error !!!');
});