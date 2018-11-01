<?php
	require_once("func.php");

	if(isset($_POST['debut'], $_POST['concept_sujet'])){
		$debut = $_POST['debut'];
		$cs = $_POST["concept_sujet"];

		publier_cs($debut,$cs);
	}else{
		echo "il y a un probleme dans les clés";
	}
