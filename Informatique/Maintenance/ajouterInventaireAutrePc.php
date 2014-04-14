<?php

include('include/include.php');
echo '<div id="page-wrapper">
           <div class="page-header">
            <h2 id="nav-tabs">Ajouter autre pc </h2>
      </div>';
$recherches = '<div class="row">';
$recherches.='<div class="col-lg-12">';
$recherches.='<div class="bs-example">';
$recherches.='<ul class="breadcrumb">';
$recherches.='<li><a href="maintenance.html">Maintenance Informatique</a></li>';
$recherches.='<li><a href="si.php">Service Informatique</a></li>';
$recherches.='<li class="active">Ajouter autre pc </li>';
$recherches.='</ul>';
$recherches.='</div></div>';
echo $recherches;

$salle = R::load('salle', $_GET['salle']);
$salle->id;
$annee = R::load('annee', $_GET['annee']);
$annee->id;

$formulaire = new Formulaire();
$formulaire->AddFormulaireInventaireAutrePc($inventaire, $salle, $annee);
