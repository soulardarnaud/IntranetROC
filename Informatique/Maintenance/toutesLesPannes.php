<?php //affichage de toutes les pannes

include('include/include.php');
echo '<div id="page-wrapper">
           <div class="page-header">
            <h2 id="nav-tabs">Toutes les pannes</h2>
      </div>';
$recherche = '<div class="row">';
$recherche.='<div class="col-lg-12">';
$recherche.='<div class="bs-example">';
$recherche.='<ul class="breadcrumb">';
$recherche.='<li><a href="maintenance.html">Maintenance Informatique</a></li>';
$recherche.='<li><a href="affichage.php">Rechercher une panne</a></li>';
$recherche.='<li class="active">Toutes les pannes</li>';
$recherche.='</ul>';
$recherche.='</div></div></div>';
$recherche.='<div class="col-lg-12">';
$recherche.='<button class="btn btn-info" type="button" '
        . '     onclick="$(this).next().find(\'table:first\').find(\'.success\').toggleClass(\'hide\');$(this).find(\'span\').toggleClass(\'hide\');">';
$recherche.='<span class="hide">Afficher</span><span>Cacher</span> les pannes réparées';
$recherche.='</button>';
$recherche.='<div class="table-responsive">';
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
$recherche.='</tr></thead>';
$recherche.='<tbody>';
//faire la liste de toutes les pannes
$pannes = R::findAll('panne', 'ORDER BY date_panne DESC');
//var_dump($pannes);
foreach ($pannes as $liste) {
    if ($liste->etat <> 'Réparé') {
        $class = 'danger';
    } else {
        $class = 'success';
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
    $recherche.='</tr>';
}
$recherche.= '</tbody >';
$recherche.="</table></div></div></div>";

echo $recherche;


