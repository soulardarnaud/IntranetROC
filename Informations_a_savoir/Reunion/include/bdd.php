<?php

/**
 * Connexion à la base de donnée "panne"
 */
R::setup('mysql:host=127.0.0.1;dbname=poleinformatique', 'root', '');

/**
 * Crée la table evenement, la table tag et la table evenementTag
 */

$evenement = R::dispense('evenement');
$tag = R::dispense('tag');
$evenementTag = R::dispense('evenementTag');

