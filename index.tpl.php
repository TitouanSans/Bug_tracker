<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bug tracker</title>
</head>
<body>
<form method="post" action="action.php">
	<p>Titre : <input class="form-control" type="text" name="titre"></p>
	<p>Date : <input class="form-control" type="text" name="date"></p>
	<p>
		Titre : <select name="type" id="">
			<option value="404">Erreur 404</option>
			<option value="affichage">Bug d'affichage</option>
			<option value="securite">Bug de sécurité</option>
			<option value="bdd">Bug de base de donnée</option>
		</select>
	</p>
	<p>Description : <input class="form-control" type="text" name="description"></p>
	<button type="submit">Enregistrer</button>
</form>
</body>
</html>