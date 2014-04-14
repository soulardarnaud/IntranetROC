<?php

try {
    $PDO = new PDO('mysql:host=localhost;dbname=poleinformatique', 'root', '');
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo'Connection impossible';
}

$req1 = $PDO->prepare('SELECT annee.libelle as ANNEE, salle.libelle as SALLE, imprimante.libelle as IMPRIMANTE, videoproj.libelle as VIDEO_PROJECTEUR'
        . ' FROM inventaire, salle, annee, imprimante, videoproj'
        . ' WHERE salle.id = inventaire.salle_id'
        . ' AND annee.id = inventaire.annee_id'
        . ' AND salle.id = ' . $_POST['salle'] . ' '
        . ' AND imprimante.id = inventaire.imprimante_id'
        . ' AND videoproj.id = inventaire.videoproj_id'
        . ' ORDER BY annee.libelle, inventaire.id');
$req1->execute();
$data1 = $req1->fetchAll();
require 'class.csv.php';
CSV::export($data1, 'ListeInventaireParAnnee');

$req2 = $PDO->prepare('SELECT annee.libelle as ANNEE, salle.libelle as SALLE, anneepc as ANNEE_PC, libellepc as NOM_DU_PC, nombrepc as NOMBRE_DE_PC, typepc.libelle as MARQUE, os.libelle as OS, ram.capacite as RAM, ecran.taille as ECRAN, rj45 as NOMBRE_DE_RJ45, commentaires as COMMENTAIRES'
        . '  FROM inventaire, salle, annee, typepc, os, ram, ecran'
        . ' WHERE salle.id = inventaire.salle_id'
        . ' AND annee.id = inventaire.annee_id'
        . ' AND salle.id = ' . $_POST['salle'] . ''
        //. ' AND imprimante.id = inventaire.imprimante_id'
        //. ' AND videoproj.id = inventaire.videoproj_id'
        . ' AND typepc.id = inventaire.typepc_id'
        . ' AND os.id = inventaire.os_id'
        . ' AND ram.id = inventaire.ram_id'
        . ' AND ecran.id = inventaire.ecran_id'
        . ' ORDER BY annee.libelle');
$req2->execute();
$data2 = $req2->fetchAll();
CSV::export($data2, 'ListeInventaireParSalle');
?>