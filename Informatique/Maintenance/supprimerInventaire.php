<?php
include ("include/include.php");

 
 // va chercher la panne qui va être supprimer dans la table inventaire 
    $inventaire = R::load('inventaire', $_GET['id']);
 // suppression de la panne   
    R::trash($inventaire);
//redirection sur la liste des inventaires  
    header("location:rechercheInventaire.php");
 