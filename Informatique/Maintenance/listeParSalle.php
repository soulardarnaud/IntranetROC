<?php //affichage des listes par salle

include("include/include.php");
echo "<div id='page-wrapper'>
            <div class='row'>
                    <div class='col-lg-12'>
                        <div class='page-header'>
                               <h2 id='nav-tabs'>Les pannes par salle</h2>
                        </div>";
$recherche = '<div class="bs-example">';
$recherche.='<ul class="breadcrumb">';
$recherche.='<li><a href="maintenance.html">Maintenance Informatique</a></li>';
$recherche.='<li><a href="affichage.php">Rechercher une panne</a></li>';
$recherche.='<li class="active">Les pannes par salle</li>';
$recherche.='</ul>';
$recherche.='</div>';

echo $recherche;

$formulaire = new Formulaire();
$formulaire->FormulaireRechercheSalle($panne);

if (isset($_POST['salle'])) {
    $recherches = '<div class="col-lg-12">';
    $recherches.= '<button class="btn btn-info" type="button" '
            . '     onclick="$(this).next().find(\'table:first\').find(\'.success\').toggleClass(\'hide\');$(this).find(\'span\').toggleClass(\'hide\');">';
    $recherches.='<span class="hide">Afficher</span><span>Cacher</span> les pannes réparées';
    $recherches.='</button>';
    $recherches.='<div class="table-responsive">';
    $recherches.='<table class="table table-bordered table-hover tablesorter">';
    $recherches.='<thead>';
    $recherches.='<tr>';
    $recherches.='<th>N° <i class="fa fa-sort"></i></th>';
    $recherches.='<th>Salle <i class="fa fa-sort"></i></th>';
    $recherches.='<th>Date panne <i class="fa fa-sort"></i></th>';
    $recherches.='<th>Utilisateur <i class="fa fa-sort"></i></th>';
    $recherches.='<th>Poste <i class="fa fa-sort"></i></th>';
    $recherches.='<th>Type panne <i class="fa fa-sort"></i></th>';
    $recherches.='<th>Description <i class="fa fa-sort"></i></th>';
    $recherches.='<th>Etat <i class="fa fa-sort"></i></th>';
    $recherches.='</tr></thead>';
    $recherches.='<tbody>';

    $panne = R::find('panne', 'salle_id=?', array($_POST['salle']));

    //var_dump($panne);

    if ($panne == !null) {
        foreach ($panne as $liste) {
            if ($liste->etat <> 'Réparé') {
                $class = 'danger';
            } else {
                $class = 'success';
            }

            $recherches.='<tr class="' . $class . '">';
            $recherches.='<td>' . $liste->id . '</td>';
            $recherches.='<td>' . $liste->salle->libelle . '</td>';
            $recherches.='<td>' . date('d/m/y H\hi', strtotime($liste->datePanne)) . '</td>';
            $recherches.='<td>' . $liste->utilisateur . '</td>';
            $recherches.='<td>' . $liste->poste . '</td>';
            $recherches.='<td>' . $liste->typepanne->libelle . '</td>';
            $recherches.='<td>' . $liste->description . '</td>';
            $recherches.='<td>' . $liste->etat . '</td>';
            $recherches.='</tr>';
        }
        $recherches.='</tbody>';
        $recherches.='</table>';
        $recherches.='</div>';
        $recherches.='</div>';
        $recherches.='</div>';
        $recherches.='</div>';

        echo $recherches;
    } else {
        echo"<div id='page-wrapper'>
                <div class='row'>
                <div class='col-lg-4'>
                    <div class='alert alert-dismissable alert-warning'>
                     <strong>Cette salle n'a pas de pannes informatique !</strong>
                </div>
              </div></div>";
    }
}