<?php
	function publier_cs($debut, $cs){
		$n = strlen($cs);
		if($n>54){
			echo "Ton concept ou sujet est <strong>trop long</strong>";
			echo '<a href="index.php">Recommencer</a>';

		}elseif ($n<5) {
			echo "ton concept ou sujet est <strong>trop court </strong>";
			echo '<a href="index.php">Recommencer</a>';

		}else{
			$d = $debut == 1 ? "C'est quoi" : "Pourquoi";
			echo "<h2>Good</h2>";
			echo "Votre sujet ou concept est: <em>".$d." ".$cs." ? </em>";
			echo '<a href="index.php">Merci</a>';
		}
	}