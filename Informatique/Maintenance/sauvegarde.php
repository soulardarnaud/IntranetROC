<?php // Appel du formualire d'ajout de panne

include("include/include.php");
echo "<div id='page-wrapper'>
           <div class='page-header'>
            <h2 id='nav-tabs'>Déclarer une panne</h2>
      </div>";
$recherche = '<div class="row">';
$recherche.='<div class="col-lg-12">';
$recherche.='<div class="bs-example">';
$recherche.='<ul class="breadcrumb">';
$recherche.='<li><a href="maintenance.html">Maintenance Informatique</a></li>';
$recherche.='<li class="active">Déclarer une panne</li>';
$recherche.='</ul>';
$recherche.='</div>';
$recherche.='<div>';
        
echo $recherche;

$formulaire = new Formulaire();
$formulaire->AddFormulairePanne($panne);

