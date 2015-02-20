<?php
//var_dump($_POST);
include 'Connection_BDD.php';
session_start();
$tousProduit = ltrim ( $_POST['tousProduit'] ,"-"  );
$SQL_save = "INSERT INTO facture (Nom, Description, Localisation, ID_Structure, ID_Produit, ID_Client, Date) "
        . "VALUES ('".$_POST['nom']."', '".$_POST['description']."', 'test', '".$_POST['structure']."',"
        . " '".$tousProduit."', '".$_POST['client']."', '".$_POST['date']."'); ";

//var_dump($SQL_save);

$rs=$cnx->query($SQL_save);

$_SESSION['Nom']=$_POST['nom'];

header('Location: CreationPdf.php'); 