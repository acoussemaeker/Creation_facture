<?php
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--<link rel="stylesheet" href="css/datepicker.css"/>-->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/ui-flick/jquery-ui.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="icon" type="image/png" href="cte.png" />
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery-ui-1.10.4.min.js"></script>
        <script src="js/jquery.ui.datepicker-fr.js"></script>
        <script src="js/script.js"></script>
        <title><?php echo $titre; ?></title>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/Creation_facture/index.php">Creation Facture</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php
//                if($titre !== 'Connexion') {
//                    session_start();
//                    echo '<li><a>Connecté en temps que : ' . $_SESSION['nom_user'] . ' ' . $_SESSION['prenom_user'].'</a></li>';
//                    echo '<input type="button" class="btn btn-default" id="logout" value="Déconnexion" onclick="location.href=\'logout.php\'" />';
//                }
            ?>
        </ul>
</nav>
<?php
//    if ($titre == 'Connexion') {
//        echo '&nbspVous n\'êtes pas connecté.'; 
//    } else {
?>
    <div class="bande-gauche">
        <div class="menu-gauche" >
            <ul class="nav nav-pills nav-stacked">
                <h5 class="titreSection">Menu</h5>
                <li <?php if ($_SERVER['PHP_SELF'] == "/CTE/new_facture.php") echo "class='active'"; ?>><a href="new_facture.php">Nouvelle facture</a></li> <!--Si la page actuelle est 'new_facture.php', on ajoute la classe 'active' à l'élément-->
                <li <?php if ($_SERVER['PHP_SELF'] == "/CTE/liste_structure.php") echo "class='active'"; ?>><a href="liste_structure.php">Liste des structures</a></li>
                <li <?php if ($_SERVER['PHP_SELF'] == "/CTE/new_structure.php") echo "class='active'"; ?>><a href="new_structure.php">Nouvelle structure</a></li>
                <li <?php if ($_SERVER['PHP_SELF'] == "/CTE/liste_produit.php") echo "class='active'"; ?>><a href="liste_produit.php">Liste des produits</a></li>
                <li <?php if ($_SERVER['PHP_SELF'] == "/CTE/new_produit.php") echo "class='active'"; ?>><a href="new_produit.php">Nouveau produit</a></li>
<!--                <li <?php // if ($_SERVER['PHP_SELF'] == "/CTE/interro.php") echo "class='active'"; ?>><a href="interro.php">Interrogations</a></li>
                <li <?php // if ($_SERVER['PHP_SELF'] == "/CTE/syllabus.php") echo "class='active'"; ?>><a href="syllabus.php">Syllabus</a></li>
                <br/><hr/><br/>-->
                
                <?php
//                    if($_SESSION['type']=='1'){ //SECTION VISIBLE UNIQUEMENT PAR LES ADMINS
                ?>
<!--                        <h5 class="titreSection">ADMINISTRATION</h5>-->
<!--                        <li <?php // if (($_SERVER['PHP_SELF'] == "/CTE/user.php") || ($_SERVER['PHP_SELF'] == "/CTE/addUser.php") || ($_SERVER['PHP_SELF'] == "/CTE/modifUser.php")) echo "class='active'"; ?>><a href="user.php">Gestion des utilisateurs</a></li>
                        <li <?php // if ($_SERVER['PHP_SELF'] == "/CTE/historique.php") echo "class='active'"; ?>><a href="historique.php">Historique</a></li>
                        <li <?php // if ($_SERVER['PHP_SELF'] == "/CTE/import.php") echo "class='active'"; ?>><a href="import.php">Importer</a></li>
                        <br/>-->
                <?php
//                    } //FIN SECTION ADMIN
                ?>
            </ul>
        </div>
    </div>
<?php
//}
?>