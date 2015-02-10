<?php
    $titre = 'Nouvelle facture';
    include 'header.php';
?>
<div class="nouveau">
    <div class="milieuPage">
        <h2 class="text-center">Nouvelle Facture</h2>
        </br>
        
        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" class="form-control" id="date"  placeholder="jj/mm/aaaa" value="<?php echo date('d/m/Y'); ?>">
        </div>
        
        <div class="form-group">
            <input type="radio" name="heure" checked value="0"> Matin
            <input type="radio" name="heure" value="1" style="margin-left:2em"> Après-midi
        </div>
        
        <div class="form-group">
            
        </div>
        
        <div class="form-group">
            <label for="contenu">Contenu du cours</label>
            <textarea id="contenu" class="form-control"></textarea>
        </div>
        
        <hr/>
            <div class="form-group">
               <label for="travail">Travail donné</label>
               <textarea id="travail" class="form-control" placeholder="Travail à faire..."></textarea>
            </div>
            <input type="text" id="dateButoir" placeholder="Date butoir... (jj/mm/aaaa)" class="form-control" />
        <hr/>
        
        
        <div class="form-group">
            <label>Interrogation <input type="checkbox" onclick="readonlySujet()" id="interro"/></label>
            <input type="text" class="form-control" readonly id="sujet" placeholder="Sujet..." />
        </div>
        
        <button type="button" onclick="saveCours()" class="btn btn-success btn-lg">Sauvegarder</button>
        <br/><br/>
    </div>
</div>