<?php
$titre = 'Nouvelle Structure';
include 'header.php';
?>
<div class="nouveau">
    <div class="milieuPage">
        <h2 class="text-center">Nouvelle Structure</h2>
        </br>
        <form method="post" action="save_structure.php">
            <div class="form-group">
                <label for="Nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group">
                <label for="description">Description de la structure</label>
                <textarea id="description" class="form-control" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="text" class="form-control" id="logo" name="logo" placeholder="ne rien mettre pour l'instant(upload)">
            </div>
            <div class='form-group'>
                <div class="form-group">
                    <label for="Nom_banque">Nom de la Banque</label>
                    <input type="text" class="form-control" id="nom_banque" name="nom_banque">
                </div>
                <div class="form-group">
                    <label for="IBAN">IBAN</label>
                    <input type="text" class="form-control" id="iban" name="iban">
                </div>
                <div class="form-group">
                    <label for="BIC">BIC</label>
                    <input type="text" class="form-control" id="bic" name="bic">
                </div>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse">
            </div>
            <div class="form-group">
                <label for="tel">Telephone</label>
                <input type="tel" class="form-control" id="tel" name="tel">
            </div>
            <div class="form-group">
                <label for="fax">fax</label>
                <input type="tel" class="form-control" id="fax" name="fax">
            </div>
            <div class="form-group">
                <label for="N°TVA">N°TVA</label>
                <input type="text" class="form-control" id="numero_tva" name="numero_tva">
            </div>
            <button type="submit" class="btn btn-success btn-lg">Sauvegarder</button>
            <br/><br/>
        </form>
    </div>
</div>