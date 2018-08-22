<?php
namespace app\controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;


/**
* 
*/
class AppController
{
	public function index(Application $app) {
		return  '<body>Hello World !</body>';
	}
}