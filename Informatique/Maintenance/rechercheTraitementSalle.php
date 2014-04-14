<?php //traitement des pannes par salles

include('include/include.php');
echo '<div id="page-wrapper">
           <div class="page-header">
            <h2 id="nav-tabs">Traitement des pannes informatiques par salle</h2>
      </div>';

$recherche = '<div class="row">';
$recherche.='<div class="col-lg-12">';
$recherche.='<div class="bs-example">';
$recherche.='<ul class="breadcrumb">';
$recherche.='<li><a href="maintenance.html">Maintenance Informatique</a></li>';
$recherche.='<li><a href="si.php">Service Informatique</a></li>';
$recherche.='<li><a href="traitementPannes.php">Traitement des pannes informatiques</a></li>';
$recherche.='<li class="active">Par salle</li>';
$recherche.='</ul>';
$recherche.='</div></div></div>';
$recherche.='<div class="row">';
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
$recherche.='<th>Modifier </th>';
$recherche.='<th>Supprimer </th>';
$recherche.='</tr></thead>';
$recherche.='<tbody>';

//faire la liste de tous les liens 
$panne = R::find('panne', 'salle_id=?', array($_POST['salle']));

//var_dump($pannes);
if ($panne == !null) {
    foreach ($panne as $liste) {
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
        $recherche.='<td><a class="btn btn-warning active" href="modifierPanne.php?id=' . $liste->id . '">Modifier</a></td>';
        $recherche.='<td><a class="btn btn-danger active" href="supprimerPanne.php?id=' . $liste->id . '">Supprimer</a></td>';
        $recherche.='</tr>';
    }
$recherche.='</tbody >';
$recherche.='</table>';
$recherche.='</div>';
$recherche.='</div></div>';

    echo $recherche;
} else {
    echo"<div id='page-wrapper'>
                <div class='row'>
                <div class='col-lg-12'>
                    <div class='alert alert-dismissable alert-warning'>
                     <strong>Cette salle n'a pas d\'inventaire !</strong>
                </div>
              </div></div>";
}


