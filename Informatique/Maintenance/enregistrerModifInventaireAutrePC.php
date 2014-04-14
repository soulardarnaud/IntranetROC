<?php
include ("include/include.php");

$inventaire = R::load('inventaire', $_POST['id']);

$annee = R::findOne('annee', 'id=?', array($_POST['annee']));
//$inventaire->annee = $annee;
$salle = R::findOne('salle', 'id=?', array($_POST['salle']));
//$inventaire->salle = $salle;

$inventaire->annee_id = $_POST['annee'];
$inventaire->salle_id = $_POST['salle'];
$inventaire->libellepc = $_POST['libellepc'];
$inventaire->nombrepc = $_POST['nombrepc'];
$inventaire->anneepc = $_POST['anneepc'];
$typepc = R::findOne('typepc', 'id=?', array($_POST['typepc']));
$inventaire->typepc = $typepc;
$os = R::findOne('os', 'id=?', array($_POST['os']));
$inventaire->os = $os;
$ram = R::findOne('ram', 'id=?', array($_POST['ram']));
$inventaire->ram = $ram;
$ecran = R::findOne('ecran', 'id=?', array($_POST['ecran']));
$inventaire->ecran = $ecran;
//$imprimante = R::findOne('imprimante', 'id=?', array($_POST['imprimante']));
//$inventaire->imprimante = $imprimante;
//$videoproj = R::findOne('videoproj', 'id=?', array($_POST['videoproj']));
//$inventaire->videoproj = $videoproj;
//$inventaire->rj45 = $_POST['rj45'];
//$inventaire->commentaires = $_POST['commentaires'];

//sauvegarde dans la table inventaire
$inventaire = R::store($inventaire);


//redirection sur la page d'accueil    
header("location:listeApresAjoutInventaire.php?salle=$salle->id&annee=$annee->id");
