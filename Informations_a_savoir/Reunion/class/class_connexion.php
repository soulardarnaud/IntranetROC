<?php

class Connexion {

    /**
     * Connexion à la base de donnée "panne"
     */
    public function addConnexion() {

        R::setup('mysql:host=127.0.0.1;dbname=poleinformatique', 'root', '');
    }

    /**
     * Création des tables
     */
    public function addTable($nomTable) {
      
        $evenement = R::dispense("'" . $nomTable . "'");
        $tag = R::dispense("'" . $nomTable . "'");
        $evenement_tag = R::dispense("'" . $nomTable . "'");
    }

}
