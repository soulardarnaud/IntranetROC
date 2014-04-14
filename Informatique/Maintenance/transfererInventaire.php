<?php

include ("include/include.php");

$bdd = mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('poleinformatique', $bdd);

$sql = 'INSERT INTO inventaire(rj45,annee_id,salle_id,typepc_id,os_id,ram_id,ecran_id,imprimante_id,videoproj_id,nombrepc,anneepc,libellepc)
SELECT rj45,' . $_GET['anneeSuivante'] . ',salle_id,typepc_id,os_id,ram_id,ecran_id,imprimante_id,videoproj_id,nombrepc,anneepc,libellepc 
FROM inventaire
WHERE annee_id=' . $_GET['anneeCourante'] . '
and salle_id=' . $_GET['salle'] . ' ';

//exécution de la requête SQL:
$requete = mysql_query($sql, $bdd) or die(mysql_error());

//affichage des résultats, pour savoir si l'insertion a marchée:
if ($requete) {
    echo("L'insertion a été correctement effectuée");
} else {
    echo("L'insertion à échouée");
}

mysql_close();

//redirection sur la page d'accueil    
header("location:rechercheInventaire.php");
