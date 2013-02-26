<?php
	include "models/controllerModel.php";
	
	$controller = new controllerModel();

	if(!empty($_GET["controllers"])){
		if($_GET["controllers"] == ""){
			$controller->getFile("controllers/landing.php");
		}
	}else{
		$controller->getFile("controllers/landing.php");
	}