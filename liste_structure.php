<?php
    $titre = 'Liste Structure';
    include 'header.php';
    include 'Connection_BDD.php';
?>
<table class="table table-hover tableListe table-condensed">
    <thead>    
        <tr class="info">
            <th>Nom</th>
            <th>Banque</th>
            <th>Adresse</th>
            <th>Tel</th>
            <th>Fax</th>
            <th>N°TVA</th>
        </tr>
    </thead>
    <?php
    $SQL = "SELECT * FROM structure";
    $rs = $cnx->query($SQL);
    while ($info = $rs->fetch_object()) {
        // a mettre dans le tr : onclick="window.location=\'modifCours.php?id=' . $info->IDcours . '\'"
        echo '  <tr>
                    <td>
                        ' . $info->Nom . '
                    </td>
                    <td>
                        ' . $info->Nom_banque . '
                    </td>
                    <td>
                        ' . $info->Adresse . '
                    </td>
                    <td>
                        ' . $info->Tel . '
                    </td>
                    <td>
                        ' . $info->Fax . '
                    </td>
                    <td>
                        ' . $info->Numero_TVA . '
                    </td>
                </tr>';
    }
    ?>
</table>
            