
function AjoutProduit() {
    var test = $("#produit").val();
//    alert(test);
    var splittest = test.split('-');
    var ht = $('#ht').val();
    var ttc = $('#ttc').val();
//    alert(splittest[2]);
    $('#contain_produit').append('<tr><td>' + splittest[1] + '</td><td>' + splittest[2] + '</td><td>' + splittest[3] + ' €</td><td><input type="button" value="supprimer"/></td></tr>');
    var additionht = parseFloat(parseFloat(ht) + parseFloat(splittest[3])).toFixed(2);
//    alert(addition);
    $('#ht').val(additionht);
    var additionttc = parseFloat(parseFloat(ttc) + parseFloat(splittest[3])).toFixed(2);
    additionttc = parseFloat(parseFloat(additionttc) + parseFloat(additionttc*0.20)).toFixed(2);
//    alert(addition);
    $('#ttc').val(additionttc);
    var tousProduit = $('#tousProduit').val();
    $('#tousProduit').val(tousProduit + "-" + splittest[0]);
    

}
//$("#ajout").on("click", function(){
//   alert('trop bien je peut en ajouter !! :p'); 
//});

