<?php //suppression de la panne dans la bdd
include ("include/include.php");

 
 // va chercher la panne qui va être supprimer dans la table panne 
    $panne = R::load('panne', $_GET['id']);
 // suppression de la panne   
    R::trash($panne);
 
//redirection sur la liste des pannes    
    header("location:traitementPannes.php");
 
 