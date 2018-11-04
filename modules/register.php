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

	$html->titre(4,'','formulaire d\'inscription');

	$html->formOpen('POST','#');

                $html->br();
                $html->label('','','Pseudo:');
                $html->input('text','pseudo','','','saisir votre pseudo...');

                $html->br();
                $html->label('','','Email:');
                $html->input('email','email','','','saisir votre adresse email...');

                $html->br();
                $html->label('','','Sexe:');
                $html->inputSelectOpen('debut');
                    $html->inputOption('M','Homme');
                    $html->inputOption('F','Femme');
                $html->inputSelectClose();

                $html->br();
                $html->label('','','Mot de passe:');
                $html->input('password','password','','','****code secret****...');

                $html->br();
                $html->inputSubmit('data_register','','inscription');
                $html->br();

                $html->lien($url = "login",'','','<em>Avez-vous deja un compte ?</em> -- connectez-vous maintenant...');

            $html->formClose();


