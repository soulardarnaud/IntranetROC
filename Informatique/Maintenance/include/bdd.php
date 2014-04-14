<?php

/**
 * Connexion à la base de donnée "poleinformatique"
 */
R::setup('mysql:host=127.0.0.1;dbname=poleinformatique', 'root', '');

/**
 * Crée la table panne, la table salle et la table inventaire et les autres
 */
$panne = R::dispense('panne');
$salle = R::dispense('salle');
$typepanne = R::dispense('typepanne');
$annee = R::dispense('annee');
$inventaire = R::dispense('inventaire');
$imprimante = R::dispense('imprimante');
$videoproj = R::dispense('videoproj');
$ecran = R::dispense('ecran');
$os = R::dispense('os');
$ram = R::dispense('ram');
$typepc = R::dispense('typepc');

