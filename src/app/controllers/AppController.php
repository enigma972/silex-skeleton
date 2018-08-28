<?php
namespace app\controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

class AppController
{
	public function index(Application $app) {
		return  $app['twig']->render('app/index.html.twig', 
						array(
							'name' => 'Silex'
						)
					);
	}
}