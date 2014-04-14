<?php

class Connexion {

    /**
     * Connexion à la base de donnée "poleinformatique"
     */
    public function addConnexion() {

        R::setup('mysql:host=127.0.0.1;dbname=poleinformatique', 'root', '');
    }

    /**
     * Création des tables
     */
    public function addTable($nomTable) {
        $panne = R::dispense("'" . $nomTable . "'");
        $salle = R::dispense("'" . $nomTable . "'");
        $typepanne = R::dispense("'" . $nomTable . "'");
        $annee = R::dispense("'" . $nomTable . "'");
        $inventaire = R::dispense("'" . $nomTable . "'");
        $imprimante = R::dispense("'" . $nomTable . "'");
        $videoproj = R::dispense("'" . $nomTable . "'");
        $ecran = R::dispense("'" . $nomTable . "'");
        $os = R::dispense("'" . $nomTable . "'");
        $ram = R::dispense("'" . $nomTable . "'");
        $typepc = R::dispense("'" . $nomTable . "'");

    }

}
