<?php // enregistrement de la panne dans la bdd poleinformatique

include ("include/include.php");

$panne = R::dispense('panne');
//if (!empty($_POST['datePanne']) & !empty($_POST['utilisateur']) & !empty($_POST['salle']) & !empty($_POST['type'])) {
    $panne->datePanne = date('Y-m-d H:i:s');
    $panne->utilisateur = $_POST['utilisateur'];
    $salle=R::findOne('salle','id=?',array($_POST['salle']));
    $panne->salle= $salle;
    $panne->poste = $_POST['poste'];
    $typepanne=R::findOne('typepanne','id=?',array($_POST['type']));
    $panne->typepanne = $typepanne;
    $panne->description = $_POST['description'];
    $panne->etat = $_POST['etat'];

//sauvegarde dans la table panne
    $panne = R::store($panne);

//redirection sur la page d'accueil    
    header("location:maintenance.html");
//}  else {
 //   echo "<div id='page-wrapper'>
   //         <div class='row'>
  //          <div class='col-lg-4'>
   //             <div class='alert alert-dismissable alert-danger'>
   //              <strong>Des champs ne sont pas saisie !</strong> <br>Veuillez les remplir pour pouvoir déclarer la panne.
   //             </div>
   //         </div>
   //       </div></div>";
       // header("location:sauvegarde.php");

//} 
