<?php
include('include/include.php');
echo '<div id="page-wrapper">
           <div class="page-header">
            <h2 id="nav-tabs">Modification de l\'inventaire </h2>
      </div>';
$recherches = '<div class="row">';
$recherches.='<div class="col-lg-12">';
$recherches.='<div class="bs-example">';
$recherches.='<ul class="breadcrumb">';
$recherches.='<li><a href="maintenance.html">Maintenance Informatique</a></li>';
$recherches.='<li><a href="si.php">Service Informatique</a></li>';
$recherches.='<li><a href="rechercheInventaire.php">Liste des inventaires</a></li>';
$recherches.='<li class="active">Modification de l\'inventaire</li>';
$recherches.='</ul>';
$recherches.='</div></div>';
echo $recherches;

$inventaire = R::load('inventaire', $_GET['id']);
$inventaire->id;
$salle = R::load('salle', $_GET['id']);
$salle->id;
$annee = R::load('annee', $_GET['id']);
$annee->id;

$formulaire = new Formulaire();
$formulaire->ModifyFormulaireInventaire($inventaire);
