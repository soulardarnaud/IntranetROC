<?php

include('include/include.php');
echo "<div id='page-wrapper'>
           <div class='page-header'>
            <h2 id='nav-tabs'>Déclarer une nouvelle salle</h2>
           </div>
           <div class='row'>  
           <div class='col-lg-12'>  
           <div class='bs-example'>  
                <ul class='breadcrumb'>  
                    <li><a href='maintenance.html'>Maintenance Informatique</a></li> 
                    <li><a href='si.php'>Service Informatique</a></li>
                    <li class='active'>Déclarer une nouvelle salle</li>  
                </ul>  
           </div>  
           </div>";

$formulaire = new Formulaire();
$formulaire->AddFormulaireSalle($salle);
           