<?php //affichage de la page de traitement des pannes.

include('include/include.php');
echo '<div id="page-wrapper">
           <div class="page-header">
            <h2 id="nav-tabs">Traitement des pannes informatiques</h2>
      </div>';
$recherches = '<div class="row">';
$recherches.='<div class="col-lg-12">';
$recherches.='<div class="bs-example">';
$recherches.='<ul class="breadcrumb">';
$recherches.='<li><a href="maintenance.html">Maintenance Informatique</a></li>';
$recherches.='<li><a href="si.php">Service Informatique</a></li>';
$recherches.='<li class="active">Traitement des pannes informatiques</li>';
$recherches.='</ul>';
$recherches.='</div></div>';
echo $recherches;

$formulaire = new Formulaire();
$formulaire->FormulaireRechercheTraitementSalle($panne);

$recherche = '<div class="row">';
$recherche.='<div class="col-lg-12">';
$recherche.='<button class="btn btn-info" type="button" '
        . '     onclick="$(this).next().find(\'table:first\').find(\'.success\').toggleClass(\'hide\');$(this).find(\'span\').toggleClass(\'hide\');">';
$recherche.='<span class="hide">Cacher</span><span>Afficher</span> les pannes réparées';
$recherche.='</button>';

$recherche.='<div class="table-responsive" id="table-responsive">';
$recherche.='<table class="table table-bordered table-hover tablesorter">';
$recherche.='<thead>';
$recherche.='<tr>';
$recherche.='<th>N° <i class="fa fa-sort"></i></th>';
$recherche.='<th>Salle <i class="fa fa-sort"></i></th>';
$recherche.='<th>Date panne <i class="fa fa-sort"></i></th>';
$recherche.='<th>Utilisateur <i class="fa fa-sort"></i></th>';
$recherche.='<th>Poste <i class="fa fa-sort"></i></th>';
$recherche.='<th>Type panne <i class="fa fa-sort"></i></th>';
$recherche.='<th>Description <i class="fa fa-sort"></i></th>';
$recherche.='<th>Etat <i class="fa fa-sort"></i></th>';
$recherche.='<th>Modifier </th>';
$recherche.='<th>Supprimer </th>';
$recherche.='</tr>';
$recherche.='</thead>';
$recherche.='<tbody>';
//faire la liste de tous les liens 
$panne = R::findAll('panne', 'ORDER BY date_panne DESC');
//var_dump($pannes);

foreach ($panne as $liste) {
    if ($liste->etat <> 'Réparé') {
        $class = 'danger';
    } else {
        $class = 'success hide';
    }

    $recherche.='<tr class="' . $class . '">';
    $recherche.='<td>' . $liste->id . '</td>';
    $recherche.='<td>' . $liste->salle->libelle . '</td>';
    $recherche.='<td>' . date('d/m/y H\hi', strtotime($liste->datePanne)) . '</td>';
    $recherche.='<td>' . $liste->utilisateur . '</td>';
    $recherche.='<td>' . $liste->poste . '</td>';
    $recherche.='<td>' . $liste->typepanne->libelle . '</td>';
    $recherche.='<td>' . $liste->description . '</td>';
    $recherche.='<td>' . $liste->etat . '</td>';
    $recherche.='<td><a class="btn btn-warning active" href="modifierPanne.php?id=' . $liste->id . '">Modifier</a></td>';
    $recherche.='<td><a class="btn btn-danger active" href="supprimerPanne.php?id=' . $liste->id . '">Supprimer</a></td>';
    $recherche.='</tr>';
}
$recherche.='</tbody >';
$recherche.='</table>';
$recherche.='</div>';
$recherche.='</div>';

echo $recherche;



