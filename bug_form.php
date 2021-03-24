<?php
require 'connexion.php';

if (!empty ($_POST)) {

    $title = $_POST['title'];
    $date = $_POST['date'];
    $type = $_POST['type'];
    $description = $_POST['description'];

    $sql = "insert into bugs_list(title, date, type, description)
            values (:title,:date,:type,:description)";

    $req = $db->prepare($sql);
    $req->bindParam('title',$title,PDO::PARAM_STR);
    $req->bindParam('date',$date,PDO::PARAM_STR);
    $req->bindParam('type',$type,PDO::PARAM_STR);
    $req->bindParam('description',$description,PDO::PARAM_STR);

    $req->execute();

    header('Location: bugs_list.tpl.php');
    exit;

}

include 'bug_form.tpl.php';
