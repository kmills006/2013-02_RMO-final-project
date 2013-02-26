<?php

	include "helpers/db.php";
	include "models/trailersModel.php";
	include "models/viewModel.php";

	$trailers = new trailersModel();
	$view = new viewModel();


	// Header View
	$view->getView("views/header.php");

	// Main Content View	
	if (!empty( $_GET["action"])){
	    if ( $_GET["action"] == "" ) {
	    }else if($_GET["action"] == "details"){
	    	$movie_id = $_GET["mid"];
	    	$t = $trailers->getTrailer($movie_id);
	    	$view->getView("views/trailerDetails.php", $t);
	    } 	
	}else{
		$t = $trailers->getTrailers();
		$view->getView("views/landing.php", $t);
	}

	// Footer View
	$view->getView("views/footer.php");