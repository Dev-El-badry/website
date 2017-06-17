<?php

if (isset($_SESSION)) {
	session_start();
}
	//include config
	require("config.php");

	require("classes/Bootstrap.php");
	require("classes/Controller.php");
	require("classes/Model.php");
	
	require("controllers/home.php");
	require("controllers/users.php");
	require("controllers/share.php");

	require("models/home.php");
	require("models/users.php");
	require("models/share.php");

	$bootstrap = new Bootstrap($_GET);
	$controller = $bootstrap->createController();

	if ($controller) {
		$controller->executeAction();
	}



