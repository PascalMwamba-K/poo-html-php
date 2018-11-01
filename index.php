<?php 
    include_once 'html/autoloader.php'; 
    $html = new Html();

    $html->htmlOpen();
 
        $html->headOpen();

            $html->title('ExpliqueSimplement');
            $html->css('./css/style.css');
            $html->script('./js/script.js');

        $html->headClose();

        $html->bodyOpen();

            $html->h(1,'','ExpliqueSimplement');
            $html->paragraphe('','','Si vous comprenez bien un concept, un sujet ou un domaine, expliquer le simplement.');
            $html->h(2,'','Nouveau concept ou sujet');

            $html->formOpen('POST','traitement_cs.php');
                $html->label('','','Debut');

                $html->inputSelectOpen('debut');
                    $html->inputOption(1,'c\'est quoi');
                    $html->inputOption(2,'Pourquoi');
                $html->inputSelectClose();

                $html->br();

                $html->label('','Concept ou Sujet:');
                $html->input('text','concept_sujet','','','saisir...');

                $html->br();
                $html->paragraphe('','','<em>Le concept ou sujet doit avor un max 54 caracteres</em>');
                $html->br();

                $html->inputSubmit('','','Publier maintenant');

            $html->formClose();
        $html->bodyClose();
    $html->htmlClose(); 
?>