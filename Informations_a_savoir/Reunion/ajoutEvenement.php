<?php

include("include/include.php");

echo '<div id="page-wrapper">
           <div class="page-header">
            <h2 id="nav-tabs">Déclarer un nouvel évènement </h2>
      </div>';
$recherches = '<div class="row">';
$recherches.='<div class="col-lg-12">';
$recherches.='<div class="bs-example">';
$recherches.='<ul class="breadcrumb">';
$recherches.='<li><a href="réunion.php">Réunion</a></li>';
$recherches.='<li class="active">Déclarer un nouvel évènement</li>';
$recherches.='</ul>';
$recherches.='</div></div>';
echo $recherches;

$formulaire = new Formulaire();
$formulaire->AddFormulaireEvenement($evenement);