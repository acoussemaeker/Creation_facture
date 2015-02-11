<?php
    $titre = 'Liste Produit';
    include 'header.php';
 include 'Connection_BDD.php';
?>
<table class="table table-hover tableListe table-condensed">
    <thead>    
        <tr class="info">
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
        </tr>
    </thead>
    <?php
    $SQL = "SELECT * FROM produit";
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
                        ' . $info->Prix . ' €
                    </td>
                </tr>';
    }
    ?>
</table>
            