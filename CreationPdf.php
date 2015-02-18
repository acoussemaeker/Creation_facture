<?php

//echo 'haha : '.$_POST['id_test'];

require('framework/fpdf.php');
require('framework/tfpdf/tfpdf.php');
require('framework/Fpdi/fpdi.php');
include 'Connection_BDD.php';

$SQL = 'SELECT f.ID id_facture, f.Nom nom_facture, f.Description description_facture, f.localisation, f.ID_Structure, f.ID_produit, '
        . 'f.ID_Client, f.Date date_facture, s.ID id_structure, s.Nom nom_structure, s.Description description_structure,'
        . 's.Logo, s.Nom_banque, s.IBAN, s.BIC, s.Adresse adresse_structure, s.Tel tel_structure, s.Fax fax_structure, s.Numero_TVA,'
        . 'c.ID id_client, c.Nom nom_client, c.Description description_client, c.Adresse adresse_client  FROM facture f '
        . 'INNER JOIN structure s ON f.ID_Structure = s.ID '
        . 'INNER JOIN client c ON f.ID_Client = c.ID '
        . 'WHERE f.ID = "3"';
$rs = $cnx->query($SQL);
//echo $SQL;
while ($info = $rs->fetch_object()) {

    $pdf = new FPDI();
    $pageCount = $pdf->setSourceFile("Exemple.pdf");
    $tplIdx = $pdf->importPage(1, '/MediaBox');
//
//
    $pdf->addPage();
    $pdf->useTemplate($tplIdx, 0, 0, 0);
    $pdf->SetFont('Arial', 'B', 18);
    $pdf->Cell(0, 20, $info->nom_facture . ' ' . $info->date_facture, '', 0, 'C');
    // date de creation de la facture et le numero de tva de la structure 
    $pdf->SetFont('Arial', '', 10);
    $pdf->MultiCell(0 , 25, "", "", 0, '');
    $pdf->Cell(110, 60, '', 0, '');
    $pdf->MultiCell(0, 5, "le :" . $info->date_facture . "\nNumero de TVA : " . $info->Numero_TVA, 0, "L", 0);
   // adresse et nom (a rajouter le code postale et la ville) tous a la suite c'est moche
    $pdf->MultiCell(0 , 10, "", "", 0, '');
    $pdf->Cell(110, 60, '', 0, '');
    $pdf->MultiCell(0, 5, "" . $info->nom_client . "\n" . $info->adresse_client, 0, "L", 0);
    
    $produit = $info->ID_produit;
    $listeProduit = explode("-", $produit);
    var_dump($listeProduit);
    // tableau des produits 
    $SQL_produit = "SELECT * ";
    $pdf->Output();
}
?>
