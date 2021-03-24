<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bug tracker</title>
</head>

<header>
    <?php require 'menu.php';?>
</header>

<body>

    <div id="container">
		<h1>Liste des Bugs</h1>

        <?php
        
            require 'connexion.php';

            $reponse = $db->query('SELECT title, date, description FROM bugs_list');

            while ($donnees = $reponse->fetch())
            {
                echo $donnees['title'] . ' ' . $donnees['date'] . ' ' .  $donnees['description'] . ' <a href="">modifier</a> <a href="">supprimer</a>' . '<br />';
            }

            $reponse->closeCursor();

        ?>

	</div>
</form>
</body>
</html>
    