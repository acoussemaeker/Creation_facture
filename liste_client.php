<?php
    $titre = 'Liste client';
    include 'header.php';
include 'Connection_BDD.php';
?>
<table class="table table-hover tableListe table-condensed">
    <thead>    
        <tr class="info">
            <th>Nom</th>
            <th>Description</th>
            <th>Adresse</th>
            <th>Type de paiemaent</th>
        </tr>
    </thead>
    <?php
    $SQL = "SELECT * FROM client";
    $rs = $cnx->query($SQL);
    while ($info = $rs->fetch_object()) {
        // a mettre dans le tr : onclick="window.location=\'modifCours.php?id=' . $info->IDcours . '\'"
        echo '  <tr>
                    <td>
                        ' . $info->Nom . '
                    </td>
                    <td>
                        ' . $info->Description . '
                    </td>
                    <td>
                        ' . $info->Adresse . '
                    </td>
                    <td>
                        ' . $info->TypePaiement . '
                    </td>
                </tr>';
    }
    ?>
</table>
            