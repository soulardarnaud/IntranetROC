<?php
include('include/include.php');
echo '<div id="page-wrapper">
           <div class="page-header">
            <h2 id="nav-tabs">Déclarer l\'inventaire d\'une salle </h2>
      </div>';
$recherches = '<div class="row">';
$recherches.='<div class="col-lg-12">';
$recherches.='<div class="bs-example">';
$recherches.='<ul class="breadcrumb">';
$recherches.='<li><a href="maintenance.html">Maintenance Informatique</a></li>';
$recherches.='<li><a href="si.php">Service Informatique</a></li>';
$recherches.='<li class="active">Déclarer un inventaire</li>';
$recherches.='</ul>';
$recherches.='</div></div>';
echo $recherches;

$formulaire = new Formulaire();
$formulaire->AddFormulaireInventaire($inventaire);

