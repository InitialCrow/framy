<?php 
require_once __DIR__.'./../../../.conf.php';
require_once __DIR__.'/../../Model/DbModel.php';
require_once __DIR__.'/../../Model/AuthModel.php';

session_start();
$home_func =  array(
	'name' = function(){
		// code
		return exit();
	}
	);