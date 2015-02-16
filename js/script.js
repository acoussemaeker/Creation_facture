
function test(){
    var test=$("#produit").val();
//    alert(test);
    var splittest = test.split('-');
    
//    alert(splittest[2]);
    $('#contain_produit').append('<tr><td>' + splittest[1] + '</td><td>' + splittest[2] + '</td><td>' + splittest[3] + ' €</td><td><input type="button" value="supprimer"/></td></tr>' );
}
//$("#ajout").on("click", function(){
//   alert('trop bien je peut en ajouter !! :p'); 
//});