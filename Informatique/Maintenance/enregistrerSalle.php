<?php

include ("include/include.php");

$salle = R::dispense('salle');

if (!empty($_POST['libelle'])) {
    $salle->libelle = $_POST['libelle'];

//sauvegarde dans la table panne
    $salle = R::store($salle);

//redirection sur la page d'accueil    
    header("location:si.php");
}  else {
    echo "<div id='page-wrapper'>
            <div class='row'>
            <div class='col-lg-4'>
                <div class='alert alert-dismissable alert-danger'>
                 <strong>Des champs ne sont pas saisie !</strong> <br>Veuillez les remplir pour pouvoir déclarer la salle.
                </div>
            </div>
          </div></div>";
       // header("location:sauvegarde.php");

} 
