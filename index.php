<?php
	require '/usr/local/Slim/Slim/Slim.php';
	\Slim\Slim::registerAutoloader();
   	
   	echo "Marcelo";
	$app = new \Slim\Slim();
	$app->get('/hello/:name',function($name){
		echo "Hello, $name";
	});
	$app->run();
?>
