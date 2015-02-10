<?php
//var_dump($_POST);
include 'Connection_BDD.php';

$SQL_save = "INSERT INTO structure (Nom, Description, Logo, Nom_banque, IBAN, BIC, Adresse, Tel, Fax, Numero_TVA) "
        . "VALUES ('".$_POST['nom']."', '".$_POST['description']."', '".$_POST['logo']."', '".$_POST['nom_banque']."', '".$_POST['iban']."', '".$_POST['bic']."', '".$_POST['adresse']."', '".$_POST['tel']."', '".$_POST['fax']."', '".$_POST['numero_tva']."'); ";

//var_dump($SQL_save);

$rs=$cnx->query($SQL_save);

header('Location: liste_structure.php'); 