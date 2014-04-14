<?php //Menu de recehrche de salle
include ("include/include.php");

 
 echo "<div id='page-wrapper'>
           <div class='page-header'>
            <h2 id='nav-tabs'>Rechercher une panne</h2>
      </div>";
 $recherche = '<div class="row">';
$recherche.='<div class="col-lg-12">';
$recherche.='<div class="bs-example">';
$recherche.='<ul class="breadcrumb">';
$recherche.='<li><a href="maintenance.html">Maintenance Informatique</a></li>';
$recherche.='<li class="active">Rechercher une panne</li>';
$recherche.='</ul>';
$recherche.='</div>';
$recherche.='<div>';
        
echo $recherche;
 
 //liste entière et par salle 
 echo "<div id='page-wrapper'>
        <div class='row'>
        <div class='col-lg-12'>
            <div class='btn-group btn-group-justified'>
                <a class='btn btn-primary' href='toutesLesPannes.php'>Toutes les pannes informatiques</a>
                <a class='btn btn-primary' href='listeParSalle.php'>Pannes informatiques par salle</a>
            </div><br><br>
            <div class='col-lg-12'>
            <img class='img-responsive' src='../../images/SAV.jpg' alt='' align='center'>
            </div>
       </div></div></div>";

 //$panne = R::find('panne','Professeur="' . $_POST['professeur'] . '"');
 //var_dump($panne);
 
 //faire la liste de tous les liens 
 //$panne = R::findAll('panne',' ORDER BY datePanne ');
 //var_dump($panne);
 
 // foreach ($panne as $liste){
 //     $affichage = "<table>";
 //     $affichage.="<tr><td>Date de demande : $liste->datePanne</td>";
 //     $affichage.="<tr><td>Professeur : $liste->professeur</td>";
 //     $affichage.="<tr><td>Salle : $liste->salle</td>";
 //    $affichage.="<tr><td>Poste : $liste->poste</td>";
 //    $affichage.="<tr><td>Panne : $liste->panne</td>";
 //     $affichage.="<tr><td>Description : $liste->description</td>";
 //     $affichage.="<tr><td> <a href='modifierFormulaire.php?id=".$liste->id."'>Modifier</a> | <a href='supprimer.php?id=".$liste->id."'>Supprimer</a></td><br><br>";
 //     $affichage.="</table>";
        
 //     echo $affichage;
 //  }
   
   

 
