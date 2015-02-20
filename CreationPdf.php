<?php

//echo 'haha : '.$_POST['id_test'];

require('framework/fpdf.php');
require('framework/tfpdf/tfpdf.php');
require('framework/Fpdi/fpdi.php');
include 'Connection_BDD.php';
session_start();

$SQL = 'SELECT f.ID id_facture, f.Nom nom_facture, f.Description description_facture, f.localisation, f.ID_Structure, f.ID_produit, '
        . 'f.ID_Client, f.Date date_facture, s.ID id_structure, s.Nom nom_structure, s.Description description_structure,'
        . 's.Logo, s.Nom_banque, s.IBAN, s.BIC, s.Adresse adresse_structure, s.Tel tel_structure, s.Fax fax_structure, s.Numero_TVA,'
        . 'c.ID id_client, c.Nom nom_client, c.Description description_client, c.Adresse adresse_client, c.TypePaiement  FROM facture f '
        . 'INNER JOIN structure s ON f.ID_Structure = s.ID '
        . 'INNER JOIN client c ON f.ID_Client = c.ID '
        . 'WHERE f.Nom = "'.$_SESSION['Nom'].'"';
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
    $pdf->SetXY( 40, 40);
    $pdf->MultiCell(50, 5, "" . utf8_decode($info->adresse_structure) . "\nTel :" . $info->tel_structure . "\nFax :" . $info->fax_structure, 0, "L", 0);
    $pdf->MultiCell(0, 25, "", "", 0, '');
    $pdf->Cell(110, 60, '', 0, '');
    $pdf->SetXY( 140, 40);
    $pdf->MultiCell(0, 5, "le :" . $info->date_facture . "\nNumero de TVA : " . $info->Numero_TVA, 0, "L", 0);
    // adresse et nom (a rajouter le code postale et la ville) tous a la suite c'est moche
    $pdf->MultiCell(0, 10, "", "", 0, '');
    $pdf->Cell(110, 60, '', 0, '');
    $pdf->SetXY( 140, 60);
    $pdf->MultiCell(0, 5, "" . utf8_decode($info->nom_client) . "\n" . utf8_decode($info->adresse_client), 0, "L", 0);
    
    $produit = $info->ID_produit;
    $listeProduit = explode("-", $produit);
//    var_dump($listeProduit[2]);
    // tableau des produits 
    $taille = count($listeProduit)-1;
    $header = array('Nom', 'Description', 'Prix');
    for($i = 0; $i <= $taille; $i ++) {
        $SQL_produit = "SELECT * FROM produit WHERE ID=" . $listeProduit[$i] . "";
        $rs = $cnx->query($SQL_produit);
//        echo "1";
        while ($info_produit = $rs->fetch_object()) {
            $nom[] = $info_produit->Nom;
            $description[] = $info_produit->Description;
            $prix[] = $info_produit->Prix;
        }
    }
    $doit = "";
    $paye = "";
    $HT= 0;
    for($i = 0; $i <= $taille; $i ++) {
       $doit = $doit . "\n" . $nom[$i] . "\n" . $description[$i]; 
       $paye = $paye . "\n\n" . $prix[$i] . " Euro"; 
       $HT = $HT + $prix[$i];
    }
    $TVA = $HT*0.20;
    $TTC = $HT + $TVA;
    $pdf->MultiCell(0, 35, "", 0, "L", 0);
    $pdf->Cell(15, 60, '', 0, '');
    $pdf->MultiCell(60, 5, utf8_decode($doit), 0, "L", 0);
    $pdf->SetXY( 155, 100);
    $pdf->MultiCell(0, 5, $paye, 0, "L", 0);
    $pdf->SetXY( 155, 196);
    $pdf->MultiCell(0, 5, $HT . " Euro", 0, "L", 0);
    $pdf->SetXY( 155, 202);
    $pdf->MultiCell(0, 5, $TVA . " Euro", 0, "L", 0);
    $pdf->SetXY( 155, 208);
    $pdf->MultiCell(0, 5, $TTC . " Euro", 0, "L", 0);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetXY( 10, 220);
    $pdf->MultiCell(0, 5, utf8_decode($info->TypePaiement) . "", 0, "C", 0);
    $pdf->SetFont('Arial', '', 10);
    
    //domiciliation banquaire :
    $pdf->SetXY( 26, 249);
    $pdf->MultiCell(40, 5, "" . utf8_decode($info->Nom_banque), 0, "L", 0);
    $pdf->SetXY( 68, 249);
    $pdf->MultiCell(0, 5, "" . $info->BIC, 0, "L", 0);
    $pdf->SetXY( 103, 249);
    $pdf->MultiCell(0, 5, "" . $info->IBAN, 0, "L", 0);
    
    $pdf->Output();
}
?>
