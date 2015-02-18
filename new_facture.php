<?php
$titre = 'Nouvelle facture';
include 'header.php';
include 'Connection_BDD.php';
?>
<div class="nouveau">
    <div class="milieuPage">
        <h2 class="text-center">Nouvelle Facture</h2>
        </br>
        <form method="post" action="save_facture.php">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom"  name='nom'>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" name="date" class="form-control" id="date"  placeholder="jj/mm/aaaa" value="<?php echo date('d/m/Y'); ?>">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description"  name='description'>
            </div>
            <div id="Structure">
                <div class="form-group">
                    <label for="structure">Structure</label>
                    <select id="structure" name='structure' class="form-control">
                        <option value="0">Choisissez une Structure...</option>
                        <?php
                        $SQL = "SELECT ID,Nom FROM structure
                                ORDER BY Nom ASC";
                        $rs = $cnx->query($SQL);

                        while ($info = $rs->fetch_object()) {
                            echo '<option value="' . $info->ID . '" >' . $info->Nom . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div id="client">
                    <div class="form-group">
                        <label for="client">Client</label>
                        <select id="client" name='client' class="form-control">
                            <option value="0">Choisissez un Client...</option>
                            <?php
                            $SQL = "SELECT ID,Nom FROM client
                                ORDER BY Nom ASC";
                            $rs = $cnx->query($SQL);

                            while ($info = $rs->fetch_object()) {
                                echo '<option value="' . $info->ID . '" >' . $info->Nom . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div id="produits">
                        <div class="form-group">
                            <label for="produit">Produit</label>

                            <select id="produit" name='produit' class="form-control test">
                                <option value="0">Choisissez un Produit...</option>
                                <?php
                                $SQL = "SELECT * FROM produit
                                ORDER BY Nom ASC";
                                $rs = $cnx->query($SQL);

                                while ($info = $rs->fetch_object()) {
                                    echo '<option onclick="test()" value="' . $info->ID . '-' . $info->Nom . '-' . $info->Description . '-' . $info->Prix . '">' . $info->Nom . '</option>';
                                }
                                ?>
                            </select>
                            <table class="table table-hover table-condensed" id="contain_produit">
                                <thead>    
                                    <tr class="info">
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Prix</th>
                                        <th></th>
                                    </tr>  
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>total HT :<input id="ht" type="text" value="0.0" readonly="readonly"/>€</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>total TTC :<input id="ttc" type="text" value="0.0" readonly="readonly"/>€</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <input type="hidden" value="" id="tousProduit" name="tousProduit"/>
                        <button type="submit" class="btn btn-success btn-lg">Sauvegarder</button>
                        <br/><br/>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>