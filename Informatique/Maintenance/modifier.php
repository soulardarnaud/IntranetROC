<?php //modification de la panne dans la base de donnée poleinformatique

include ("include/include.php");


$panne = R::load('panne',$_POST['id']);
if (!empty($_POST['datePanne']) & !empty($_POST['utilisateur']) & !empty($_POST['salle']) & !empty($_POST['type'])) {
    $panne->datePanne = date('Y-m-d H:i:s');
    $panne->utilisateur = $_POST['utilisateur'];
    //$salle=R::findOne('salle','id=?',array($_POST['salle']));
    $panne->salle->libelle= $_POST['salle']; 
    $panne->poste = $_POST['poste'];
    //$typePanne=R::findOne('typepanne','id=?',array($_POST['type']));
    $panne->typepanne->libelle = $_POST['type'];
    $panne->description = $_POST['description'];
    $panne->etat = $_POST['etat'];

//sauvegarde dans la table panne
    $panne = R::store($panne);
    
    //redirection sur la page d'accueil    
    header("location:traitementPannes.php");
    
}

