<?php
//var_dump($_POST);
include 'Connection_BDD.php';

$SQL_save = "INSERT INTO produit (Nom, Description, Prix) "
        . "VALUES ('".$_POST['nom']."', '".$_POST['description']."', '".$_POST['prix']."'); ";

//var_dump($SQL_save);

$rs=$cnx->query($SQL_save);

header('Location: liste_produit.php'); 