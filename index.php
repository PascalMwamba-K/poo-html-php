<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ExpliqueSimplement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>ExpliqueSimplement</h2>
    	<p>Si vous comprenez bien un concept, un sujet ou un domaine, expliquer le simplement.</p>
    	<h2>Nouveau concept ou sujet</h2>
    	<form method="POST" action="traitement_cs.php">
    		<label>Debur: </label>
    		<select name="debut">
    			<option value="1">C'est quoi</option>
    			<option value="2">Pourquoi</option>
    		</select>
    		<br>
    		<label>Concept ou sujet:</label>
    		<input type="text" name="concept_sujet"> ?
    		<br>
    		<em>Le concept ou sujet doit avor un max 54 caracteres</em>
    		<br>
    		<input type="submit" name="" value="Publier">
    	</form>
</body>
</html>