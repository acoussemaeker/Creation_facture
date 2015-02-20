<?php
$titre = 'Liste Facture';
include 'header.php';
include 'Connection_BDD.php';
?>
<table class="table table-hover tableListe table-condensed">
    <thead>    
        <tr class="info">
            <th>Nom</th>
            <th>Date de la facture</th>
            <th>Description</th>
            <th>Structure</th>
            <th>Client</th>
        </tr>
    </thead>
    <?php
    $SQL = "SELECT f.ID id_facture, f.Nom nom_facture, f.Date date_facture, f.Description description_facture, f.ID_Structure, f.ID_Client, "
            . "s.ID id_structure, s.Nom nom_structure, "
            . "c.ID id_client, c.Nom nom_client "
            . "FROM facture f "
            . "INNER JOIN structure s ON f.ID_Structure = s.ID "
            . "INNER JOIN client c ON f.ID_Client = c.ID";
    
    $rs = $cnx->query($SQL);
    while ($info = $rs->fetch_object()) {
        // a mettre dans le tr : onclick="window.location=\'modifCours.php?id=' . $info->IDcours . '\'"
        echo '  <tr>
                    <td>
                        ' . $info->nom_facture . '
                    </td>
                    <td>
                        ' . $info->date_facture . '
                    </td>
                    <td>
                        ' . $info->description_facture . '
                    </td>
                    <td>
                        ' . $info->nom_structure . '
                    </td>
                    <td>
                        ' . $info->nom_client . '
                    </td>
                </tr>';
    }
    ?>
</table>