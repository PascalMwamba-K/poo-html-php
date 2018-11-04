<?php
if (isset($_SESSION['userConnect'])) {
?>
    <script>
        window.location.replace("home/");
    </script>
<?php
}
	$html->titre(2,'','<h2>Bienvenu sur ExpliqueSimplement</h2>');
	$html->titre(6,'','<em>connectez-vous ou creez un compte pour plus de fonctionnalités du système...</em>');

	$html->titre(4,'','formulaire de connexion');

	$html->formOpen('POST','#');

                $html->br();
                $html->label('','','Pseudo/Email:');
                $html->input('text','pseudo','','','saisir votre pseudo ou email...');

                $html->br();
                $html->label('','','Mot de passe:');
                $html->input('password','password','','','****code secret****...');

                $html->br();
                $html->inputSubmit('data_login','','déverrouiller');
                $html->br();

                $html->lien($url = "register",'','','<em>Besoin d\'un compte ?</em> -- creer maintenant...');

            $html->formClose();


