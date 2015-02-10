<?php
//var_dump($_POST);
include 'Connection_BDD.php';

$SQL_save = "INSERT INTO client (Nom, Description, Adresse) "
        . "VALUES ('".$_POST['nom']."', '".$_POST['description']."', '".$_POST['adresse']."'); ";

//var_dump($SQL_save);

$rs=$cnx->query($SQL_save);

header('Location: liste_client.php'); 