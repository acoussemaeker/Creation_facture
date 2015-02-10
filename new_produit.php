<?php
    $titre = 'Nouveau Produit';
    include 'header.php';
?>
<div class="nouveau">
    <div class="milieuPage">
        <h2 class="text-center">Nouveau Produit</h2>
        </br>
        <form method="post" action="save_produit.php">
            <div class="form-group">
                <label for="Nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group">
                <label for="description">Description du produit</label>
                <textarea id="description" class="form-control" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="text" class="form-control" id="prix" name="prix" >
            </div>
            <button type="submit" class="btn btn-success btn-lg">Sauvegarder</button>
            <br/><br/>
        </form>
    </div>
</div>