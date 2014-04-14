<?php

include('include/include.php');
echo '<div id="page-wrapper">
           <div class="page-header">
            <h2 id="nav-tabs">Liste des inventaires</h2>
           </div>';

$recherche = '<div class="row">'
        . '<div class="col-lg-12">'
        . '<div class="bs-example">';
$recherche.='<ul class="breadcrumb">';
$recherche.='<li><a href="maintenance.html">Maintenance Informatique</a></li>';
$recherche.='<li><a href="si.php">Service Informatique</a></li>';
$recherche.='<li class="active">Liste des inventaires</li>';
$recherche.='</ul>';
$recherche.='</div>'
        . '</div>'
        . '</div>';

echo $recherche;


if (isset($_GET['salle']) && isset($_GET['annee'])) {

    $inventaire = R::find('inventaire', 'salle_id=? and annee_id=?', array($_GET['salle'], $_GET['annee']));
    //var_dump($inventaire);
    $annee = R::findOne('annee', 'id=?', array($_GET['annee']));
    $salle = R::findOne('salle', 'id=?', array($_GET['salle']));

    $recherches = '<div class="row">';
    $recherches.='<div class="col-lg-12">';

    if ($inventaire == !null) {
        $idmin = end($inventaire);
        foreach ($inventaire as $liste):
            if ($liste->id <= $idmin) {
                $idmin = $liste->id;
            }
        endforeach;
        foreach ($inventaire as $liste) {

            if ($liste->id == $idmin) {
                $recherches.='<div class="col-lg-12">';
                $recherches.='<h1 align="center">Salle <strong class="text-danger">' . $liste->salle->libelle . '</strong> pour l\'année <strong class="text-danger">' . $liste->annee->libelle . '</strong></h1><br>';
                $recherches.='<h4><p align="left"><strong class="text-info">Imprimante : </strong> ' . $liste->imprimante->libelle . '</p>';
                $recherches.='<p align="left"><strong class="text-info">Vidéo-projecteur : </strong> ' . $liste->videoproj->libelle . '</p>';
                $recherches.='<p align="left"><strong class="text-info">Nombre de prise RJ45 : </strong> <strong class="text-primary">' . $liste->rj45 . '</strong></p>';
                $recherches.='<p align="left"><strong class="text-info">Commentaire(s) : </strong> ' . $liste->commentaires . '</p></h4>';
                $recherches.='</div>';
                $recherches.='<div class="col-lg-12">';
                $recherches.='<div class="table-responsive">';
                $recherches.='<table class="table table-bordered table-hover tablesorter">';
                $recherches.='<tbody>';
                $recherches.='<tr>';
                $recherches.='<td><strong class="text-info"><u>Libelle PC : </u></strong></td><td>' . $liste->libellepc . '</td></tr>';
                $recherches.='<tr><td><strong>Nombre de PC & Année</strong></td><td><strong class="text-primary">' . $liste->nombrepc . '</strong> PC de ' . $liste->anneepc . '</td></tr>';
                $recherches.='<tr><td><strong>Marque du PC</strong></td>';
                $recherches.='<td>' . $liste->typepc->libelle . '</td></tr>';
                $recherches.='<tr><td><strong>OS</strong></td>';
                $recherches.='<td>' . $liste->os->libelle . '</td></tr>';
                $recherches.='<tr><td><strong>Mémoire RAM</strong></td>';
                $recherches.='<td>' . $liste->ram->capacite . '</td></tr>';
                $recherches.='<tr><td><strong>Ecran</strong></td>';
                $recherches.='<td>' . $liste->ecran->taille . '</td></tr>';
                $recherches.='</tr>';
                $recherches.='</tbody></table>';
                $recherches.='</div>';
                $recherches.='<div class="btn-group btn-group-justified">';
                $recherches.='<a class="btn btn-warning" href="modifierInventaire.php?id=' . $liste->id . '&salle=' . $salle->id . '&annee=' . $annee->id . '">Modifier PC</a>';
                //$recherches.='<a class="btn btn-danger" href="supprimerInventaire.php?id=' . $liste->id . '">Supprimer</a>';
                $recherches.='</div><br></div>';
            } else {

                $recherches.='<div class="col-lg-12">';
                $recherches.='<div class = "table-responsive">';
                $recherches.='<table class = "table table-bordered table-hover tablesorter">';
                $recherches.='<tbody>';
                $recherches.='<tr>';
                $recherches.='<td><strong class = "text-info"><u>Libelle PC : </u></strong></td><td>' . $liste->libellepc . '</td></tr>';
                $recherches.='<tr><td><strong>Nombre de PC & Année</strong></td><td><strong class="text-primary">' . $liste->nombrepc . '</strong> PC de ' . $liste->anneepc . '</td></tr>';
                $recherches.='<tr><td><strong>Marque du PC</strong></td>';
                $recherches.='<td>' . $liste->typepc->libelle . '</td></tr>';
                $recherches.='<tr><td><strong>OS</strong></td>';
                $recherches.='<td>' . $liste->os->libelle . '</td></tr>';
                $recherches.='<tr><td><strong>Mémoire RAM</strong></td>';
                $recherches.='<td>' . $liste->ram->capacite . '</td></tr>';
                $recherches.='<tr><td><strong>Ecran</strong></td>';
                $recherches.='<td>' . $liste->ecran->taille . '</td></tr>';
                $recherches.='</tr>';
                $recherches.='</tbody></table>';
                $recherches.='<div class="btn-group btn-group-justified">';
                $recherches.='<a class="btn btn-warning" href="modifierInventaireAutrePC.php?id=' . $liste->id . '&salle=' . $salle->id . '&annee=' . $annee->id . '">Modifier PC</a>';
                $recherches.='<a class="btn btn-danger" href="supprimerInventaire.php?id=' . $liste->id . '">Supprimer</a>';
                $recherches.='</div>';
                $recherches.='</div><br></div>';
            }
        }
        $recherches.='<div class="col-lg-12">';
        $recherches.='<div class="btn-group btn-group-justified">';
        $recherches.='<a class="btn btn-success" href="ajouterInventaireAutrePC.php?salle='.$salle->id.'&annee='.$annee->id.'">Ajouter autre PC à cet inventaire</a>';
        $recherches.='</div><br>';
        $salle = R::findOne('salle', 'id=?', array($_GET['salle']));
        $anneeEnCours = R::findOne('annee', 'id=?', array($_GET['annee']));
        $anneeSuivante = R::findOne('annee', 'libelle>? ORDER BY libelle', array($anneeEnCours->libelle));
        //var_dump($anneeSuivante);

        $inventaireSuivant = R::find('inventaire', 'salle_id=? and annee_id=?', array($_GET['salle'], $anneeSuivante->id));
        //var_dump($inventaireSuivant);

        if (empty($inventaireSuivant)) {
            $recherches.='<div class="btn-group btn-group-justified">';
            $recherches.='<a class="btn btn-primary" href="ajouterNouvelInventaire.php?salle='.$salle->id.'&anneeCourante=' . $anneeEnCours->id . '&anneeSuivante='.$anneeSuivante->id.'">Nouvel inventaire pour l\'année ' . $anneeSuivante->libelle . '</a>';
            $recherches.='<a class="btn btn-info" href="transfererInventaire.php?salle='.$salle->id.'&anneeCourante='.$anneeEnCours->id.'&anneeSuivante='.$anneeSuivante->id.'">Transferer les données de l\'inventaire pour l\'année ' . $anneeSuivante->libelle . '</a>';
            $recherches.='</div></div>';
        } else {
            $recherches.='<div class="btn-group btn-group-justified">';
            //$recherches.='<a class="btn btn-primary" href="ajoutInventaire.php">Nouvel inventaire pour l\'année ' . $anneeSuivante->libelle . '</a>';
            //$recherches.='<a class="btn btn-info" href="transfererInventaire.php">Transferer les données de l\'inventaire pour l\'année '.$anneeSuivante->libelle.'</a>';
            $recherches.='</div></div>';
        }



        $recherches.='</div></div>';
        $recherches.='</div>';


        echo $recherches;
    }
}