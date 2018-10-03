<?php
	
	//VALIDATOR INIT
	use Valitron\Validator as V;
	V::lang('ru');

	//FRAMEWORK INIT
	require_once 'model.php';
	require_once 'view.php';
	require_once 'controller.php';
	require_once 'route.php';

	//ADDITIONAL FC
	require_once 'additional.php';
	//APP START
	session_start();
	
	$router = new Router;
	$router->run();
