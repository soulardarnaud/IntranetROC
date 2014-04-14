<?php //Appel du formulaire de modification d'une panne
include ("include/include.php");

echo '<div id="page-wrapper">
           <div class="page-header">
            <h2 id="nav-tabs">Modification de la panne</h2>
        </div>';
$recherches = '<div class="row">';
$recherches.='<div class="col-lg-12">';
$recherches.='<div class="bs-example">';
$recherches.='<ul class="breadcrumb">';
$recherches.='<li><a href="maintenance.html">Maintenance Informatique</a></li>';
$recherches.='<li><a href="si.php">Service Informatique</a></li>';
$recherches.='<li><a href="traitementPannes.php">Traitement des pannes informatiques</a></li>';
$recherches.='<li class="active">Modification de la panne</li>';
$recherches.='</ul>';
$recherches.='</div>';
$recherches.='</div></div>';

echo $recherches;

$panne = R::load('panne', $_GET['id']);
$panne->id;
$formulaire= new Formulaire();
$formulaire->ModifyFormulairePanne($panne);



    