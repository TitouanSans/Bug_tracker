<?php

# Type de BDD    serveur     nom de la BDD,  user , Pass
$db = new PDO('mysql:host=localhost;dbname=bug_tracker', 'root', 'root');
# Réglage de l'affichage des erreurs
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
# Réglage de l'encodage de caractères
$db->exec("SET CHARACTER SET utf8");
