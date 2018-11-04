<?php
	
	class Html{
		public function __construct(){


		}

		public function htmlOpen(){
			echo '
				<!DOCTYPE html>
				<html>
			';
		}

		public function headOpen(){
			echo ' 
				<head>
				    <meta charset="utf-8" />
				    <meta http-equiv="X-UA-Compatible" content="IE=edge">
				    <meta name="viewport" content="width=device-width, initial-scale=1">
			';
		}

		public function headClose(){
			echo '</head>';
		}

		public function htmlClose(){
			echo '</html>';

		}

		public function title($title = 'Sans Titre'){
			echo '<title>'.$title.'</title>';
		}

		public function bodyOpen(){
			echo '<body>';
		}

		public function bodyClose(){
			echo '</body>';
		}

		public function css($path = ''){
			 echo '<link rel="stylesheet" type="text/css" media="screen" href="'.$path .'" />';
		}

		public function script($path = ''){
			echo '<script type="text/javascript" src="'.$path.'"></script>';

		}

		public function lien($url = "#", $title = 'mon lien', $class = '', $texte = 'Aucun texte à afficher pour ce lien'){
			echo '<a href="'.$url.'" title = "'.$title.'" class = "'.$class.'">'.$texte.'</a>';

		}

		public function formOpen($method = 'POST', $action = '#', $class = ''){
			echo '<form method ="'.$method.'" action = "'.$action.'" class = "'.$class.'">';

		}

		public function formClose(){
			echo '</form>';
		}

		public function input($type = 'text', $name = '', $class = '', $id = '', $placeholder = '', $value = ''){
			echo '<input type="'.$type.'" name="'.$name.'" class="'.$class.'" id="'.$id.'" value = "'.$value.'" placeholder="'.$placeholder.'">';
		}

		public function inputSubmit($name='',$class='',$value = 'valider'){
			echo '<input type="submit" name="'.$name.'" class="'.$class.'" value="'.$value.'">';
		}

		public function inputSelectOpen($name = '', $class = ''){
			echo '<select name ="'.$name.'" class="'.$class.'">';
		}

		public function inputOption($value = 'void', $texte = ''){
			echo '<option value="'.$value.'">'.$texte.'</option>';
		}

		public function inputSelectClose(){
			echo '</select>';
		}

		public function label($for = '', $class = '', $texte = 'my_label'){
			echo '<label for="'.$for.'" class="'.$class.'">'.$texte.'</label>';
		}

		public function br(){
			echo '<br>';
		}

		public function souligner($class = ''){
			echo '<hr class="'.$class.'">';
		}

		public function titre($n = '4', $class = '', $texte){
			echo '<h'.$n.' class="'.$class.'">'.$texte.'</h'.$n.'>';
		}

		public function paragraphe($class = '', $id = '', $texte){
			echo '<p class="'.$class.'" id="'.$id.'">'.$texte.'</p>';
		}


	}
