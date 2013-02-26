<?php

	include "models/viewModel.php";

	$view = new viewModel();


	// Header View
	$view->getView("views/header.php");

	// Main Content View	
	if (!empty( $_GET["action"])){
	    if ( $_GET["action"] == "" ) {
	    }	
	}else{
		$view->getView("views/landing.php");
	}

	// Footer View
	$view->getView("views/footer.php");