<?php //PAGE D'ACCUEIL DU SERVICE INFORMATIQUE

include('include/include.php');
echo "<div id='page-wrapper'>
           <div class='page-header'>
            <h2 id='nav-tabs'>Service Informatique</h2>
           </div>
           <div class='row'>  
           <div class='col-lg-12'>  
           <div class='bs-example'>  
                <ul class='breadcrumb'>  
                    <li><a href='maintenance.html'>Maintenance Informatique</a></li>  
                    <li class='active'>Service Informatique</li>  
                </ul>  
           </div>  
           </div>
           </div>
           <br>
           <div class='row'> 
           <h3><u>Gestion des pannes informatiques</u></h3>
           <div class='btn-group btn-group-justified'>
             <a class='btn btn-warning' href='traitementPannes.php'>Traitement des pannes informatiques</a>
           </div><br>  
           <h3><u>Gestion des inventaires</u></h3>
           <div class='btn-group btn-group-justified'>
             <a class='btn btn-success' href='ajoutInventaire.php'>Faire l'inventaire d'une salle</a>
             <a class='btn btn-info' href='ajoutSalle.php'>Ajouter une salle</a>
             <a class='btn btn-success' href='rechercheInventaire.php'>Visualiser un inventaire</a>
           </div><br>
           
           <div class='col-lg-12'>
           <div class='panel panel-primary'>
           <div class='panel-heading'><h3 class='panel-title'><i class='fa fa-download'></i> EXPORTER LES INVENTAIRES PAR ANNEE </h3></div>
           <div class='panel-body'> ";
$formulaire = new Formulaire();
$formulaire->AddFormulaireExportParAnnee($inventaire);


echo "</div>
      </div></div></div>
      <div class='col-lg-12'>
      <div class='panel panel-primary'>
      <div class='panel-heading'><h3 class='panel-title'><i class='fa fa-download'></i> EXPORTER LES INVENTAIRES PAR SALLE </h3></div>
      <div class='panel-body'>";
$formulaire = new Formulaire();
$formulaire->AddFormulaireExportParSalle($inventaire);
echo "</div>
      </div>
      </div>
      </div>";

//$formulaire = new Formulaire();
//$formulaire->AddFormulaireExport($inventaire);