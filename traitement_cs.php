<?php
	require_once("func.php");

	if($_SERVER['REQUEST_METHOD'] != 'POST' && $_SERVER['REQUEST_METHOD'] != 'GET'){
		var_dump("erreur");
		return true;

	}else{
		if(isset($_POST['debut'], $_POST['concept_sujet'])){
			$debut = $_POST['debut'];
			$cs = $_POST["concept_sujet"];

			publier_cs($debut,$cs);
		}
	}

	
