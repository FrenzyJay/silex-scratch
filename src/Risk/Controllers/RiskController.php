<?php
namespace Risk\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

class RiskController
{
	public function indexAction()
	{
		return new Response("RiskController::indexAction");
	}

	public function welcomeAction()
	{
		return new Response("Welcome !");
	}

	public function helloAction(Application $app, $name)
	{
		return new Response("Hello " . $app->escape($name));
	}
}

?>