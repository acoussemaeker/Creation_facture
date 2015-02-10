<?php
    $titre = 'Nouveau Client';
    include 'header.php';
?>
<div class="nouveau">
    <div class="milieuPage">
        <h2 class="text-center">Nouveau Client</h2>
        </br>
        <form method="post" action="save_client.php">
            <div class="form-group">
                <label for="Nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group">
                <label for="description">Description du client</label>
                <textarea id="description" class="form-control" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" >
            </div>
            <button type="submit" class="btn btn-success btn-lg">Sauvegarder</button>
            <br/><br/>
        </form>
    </div>
</div>