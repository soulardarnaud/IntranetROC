<?php // c'est la class_formulaire qui possède tous les formulaires de l'application

class Formulaire {

//Fonction d'ajout des champs Salle dans une liste déroulante
    private function addChampSalle($attributs = array()) {
        $salles = R::findAll('salle');
        $html = '<select class="form-control" name="salle" ';
        foreach ($attributs as $key => $value) {
            $html.=$key . '="' . $value . '"';
        }
        $html.= '>';
        $html.='<option value="">Aucune salle définie</option>';
        foreach ($salles as $salle) {
            $html.='<option value="' . $salle->id . '">' . $salle->libelle . '</option>';
        }
        $html.='</select>';
        return $html;
    }

//Fonction d'ajout des champs Type de panne dans une liste déroulante
    private function addChampTypePanne($attributs = array()) {
        $types = R::findAll('typepanne');
        $html = '<select class="form-control" name="type" ';
        foreach ($attributs as $key => $value) {
            $html.=$key . '="' . $value . '"';
        }
        $html.= '>';
        $html.='<option value="">Aucun type de panne défini</option>';
        foreach ($types as $typepanne) {
            $html.='<option value="' . $typepanne->id . '">' . $typepanne->libelle . '</option>';
        }
        $html.='</select>';
        return $html;
    }

//Fonction d'ajout des champs Annee dans une liste déroulante
    private function addChampAnnee($attributs = array()) {
        $annees = R::findAll('annee');
        $html = '<select class="form-control" name="annee" ';
        foreach ($attributs as $key => $value) {
            $html.=$key . '="' . $value . '"';
        }
        $html.= '>';

        $html.='<option value="">Aucune année définie</option>';
        foreach ($annees as $annee) {
            $html.='<option value="' . $annee->id . '">' . $annee->libelle . '</option>';
        }
        $html.='</select>';
        return $html;
    }


//Fonction d'ajout des champs Imprimante dans une liste déroulante
        private function addChampImprimante($attributs = array()) {
        $imprimantes = R::findAll('imprimante');
        $html = '<select class="form-control" name="imprimante" ';
        foreach ($attributs as $key => $value) {
            $html.=$key . '="' . $value . '"';
        }
        $html.= '>';

        $html.='<option value="">Aucune imprimante définie</option>';
        foreach ($imprimantes as $imprimante) {
            $html.='<option value="' . $imprimante->id . '">' . $imprimante->libelle . '</option>';
        }
        $html.='</select>';
        return $html;
    }


//Fonction d'ajout des champs Vidéo-projecteur dans une liste déroulante
    private function addChampVideoProj($attributs = array()) {
        $videoprojs = R::findAll('videoproj');
        $html = '<select class="form-control" name="videoproj" ';
        foreach ($attributs as $key => $value) {
            $html.=$key . '="' . $value . '"';
        }
        $html.= '>';
        $html.='<option value="">Aucun vidéo-projecteur défini</option>';
        foreach ($videoprojs as $videoproj) {
            $html.='<option value="' . $videoproj->id . '">' . $videoproj->libelle . '</option>';
        }
        $html.='</select>';
        return $html;
    }

//Fonction d'ajout des champs Type de pc (marque) dans une liste déroulante
       private function addChampTypePC($attributs = array()) {
        $typepcs = R::findAll('typepc');
        $html = '<select class="form-control" name="typepc" ';
        foreach ($attributs as $key => $value) {
            $html.=$key . '="' . $value . '"';
        }
        $html.= '>';

        $html.='<option value="">Aucune marque de pc définie</option>';
        foreach ($typepcs as $typepc) {
            $html.='<option value="' . $typepc->id . '">' . $typepc->libelle . '</option>';
        }
        $html.='</select>';
        return $html;
    } 

//Fonction d'ajout des champs Ecran dans une liste déroulante
        private function addChampEcran($attributs = array()) {
        $ecrans = R::findAll('ecran');
        $html = '<select class="form-control" name="ecran" ';
        foreach ($attributs as $key => $value) {
            $html.=$key . '="' . $value . '"';
        }
        $html.= '>';

        $html.='<option value="">Aucun écran défini</option>';
        foreach ($ecrans as $ecran) {
            $html.='<option value="' . $ecran->id . '">' . $ecran->taille . '</option>';
        }
        $html.='</select>';
        return $html;
    }
    

//Fonction d'ajout des champs Os dans une liste déroulante
    
        private function addChampOs($attributs = array()) {
        $oss = R::findAll('os');
        $html = '<select class="form-control" name="os" ';
        foreach ($attributs as $key => $value) {
            $html.=$key . '="' . $value . '"';
        }
        $html.= '>';

        $html.='<option value="">Aucun os défini</option>';
        foreach ($oss as $os) {
            $html.='<option value="' . $os->id . '">' . $os->libelle . '</option>';
        }
        $html.='</select>';
        return $html;
    }
    
    
//Fonction d'ajout des champs Mémoire Ram dans une liste déroulante
        private function addChampRam($attributs = array()) {
        $rams = R::findAll('ram');
        $html = '<select class="form-control" name="ram" ';
        foreach ($attributs as $key => $value) {
            $html.=$key . '="' . $value . '"';
        }
        $html.= '>';

        $html.='<option value="">Aucune ram définie</option>';
        foreach ($rams as $ram) {
            $html.='<option value="' . $ram->id . '">' . $ram->capacite . '</option>';
        }
        $html.='</select>';
        return $html;
    }
    
    
//Fontion permetant d'afficher le formulaire d'ajout des pannes
    public function AddFormulairePanne($panne) {

//formulaire d'ajout des pannes

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form role="form" action="ajoutPanne.php" method="post">';

//Saisie d'une date de panne
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="datepanne" class="col-sm-2 control-label">Date de demande : </label>';
        $html.='<input id="dp1" type="date" required name="datePanne" data-date-format="dd/mm/yy" class="form-control" value="' . $panne->datePanne . '" placeholder="Date de demande" ></div>';
        $html.='</div>';

//Saisie de l'utilisateur
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="utilisateur" class="col-sm-2 control-label">Utilisateur : </label>';
        $html.='<input type="text" required name="utilisateur" class="form-control" placeholder="Utilisateur" value="' . $panne->utilisateur . '" ></div>';
        $html.='</div>';

//Choix d'une salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="salle" class="col-sm-2 control-label">Salle : </label>';
        $html.=$this->addChampSalle(array('required' => 'required'));
        $html.='</div></div>';

//Saisie d'un poste
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="poste" class="col-sm-2 control-label">Poste :</label>';
        $html.='<input type="text" required name="poste" class="form-control" value="' . $panne->poste . '" placeholder="Poste"></div>';
        $html.='</div>';

//Choix dun type de panne
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="type" class="col-sm-2 control-label">Type panne : </label>';
        $html.=$this->addChampTypePanne(array('required' => 'required'));
        $html.='</div></div>';

//Saisie d'une description
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="description" class="col-sm-2 control-label">Description de la panne :</label>';
        $html.='<textarea name="description" class="form-control" rows="7">' . $panne->description . '</textarea>';
        $html.='</div></div>';
        


//Etat par défaut -> En attente
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="etat" class="form-control" placeholder="Etat" value="En attente"  >';
        $html.='</div></div>';

        $html.='<div class = "form-group">';
        $html.='<div class="col-sm-4">';
        $html.='<button type = "reset" class = "btn btn-primary">Réinitialiser le formulaire</button>&nbsp;';
        $html.='<button type = "submit" value = "Envoyer" class = "btn btn-success">Envoyer</button>';
        $html.='</div></div>';

        $html.='</form>';
        $html.="</div></div>";

        echo $html;
    }

//Fontion permetant d'afficher le formulaire d'ajout de pannes
    public function ModifyFormulairePanne($panne) {

//formulaire d'ajout des liens

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form role="form" method="post" action="modifier.php?id="' . $panne->id . '">';

//ID
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="id" class="form-control" placeholder="ID" value="' . $panne->id . '" ></div>';
        $html.='</div>';

//Saisie d'une date de panne
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="datepanne" class="col-sm-2 control-label">Date de demande : </label>';
        $html.='<input id="dp1" type="date" name="datePanne" data-date-format="dd/mm/yy" class="form-control" value="' . $panne->datePanne . '" placeholder="Date de demande" ></div>';
        $html.='</div>';

//Saisie du Utilisateur
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="utilisateur" class="col-sm-2 control-label">Utilisateur : </label>';
        $html.='<input type="text" name="utilisateur" class="form-control" placeholder="Utilisateur" value="' . $panne->utilisateur . '" ></div>';
        $html.='</div>';

//Choix d'une salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="salle" class="col-sm-2 control-label">Salle : </label>';
        $html.='<input type="text" name="salle" class="form-control" placeholder="Salle" value="' . $panne->salle->libelle . '" >';
        $html.='</div></div>';

//Saisie d'un poste
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="poste" class="col-sm-2 control-label">Poste :</label>';
        $html.='<input type="text" name="poste" class="form-control" value="' . $panne->poste . '" placeholder="Poste"></div>';
        $html.='</div>';

//Choix dun type de panne
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="salle" class="col-sm-2 control-label">Type panne : </label>';
        $html.='<input type="text" name="type" class="form-control" placeholder="Type panne" value="' . $panne->typepanne->libelle . '" >';
        $html.='</div></div>';

//Saisie d'une description
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="description" class="col-sm-2 control-label">Description de la panne :</label>';
        $html.='<textarea name="description" class="form-control" rows="7">' . $panne->description . '</textarea></div>';
        $html.='</div>';

//Saisie d'un Etat
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group has-error">';
        $html.='<label for="etat" class="col-sm-2 control-label">Etat :</label>';
        $html.='<select class="form-control" name="etat">';
        $html.='<option value="En attente" >En attente</option>';
        $html.='<option value="Réparé">Réparé</option>';
        $html.='</select>';
        $html.='</div>';

        $html.='<div class = "form-group">';
        $html.='<div class="col-sm-4">';
        $html.='<button type = "submit" value = "Modifier" class = "btn btn-success">Modifier</button>';
        $html.='</div></div>';

        $html.='</form>';
        $html.="</div></div>";

        echo $html;
    }

//Fontion permetant d'afficher le formulaire de la recherche par Salle
    public function FormulaireRechercheSalle($panne) {

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form class=" role="form" action="listeParSalle.php" method="post">';

//Choix d'une salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="salle" class="col-sm-2 control-label">Salle : </label>';
        $html.=$this->addChampSalle(array('required' => 'required'));
        $html.='</div></div>';

//Bouton Valider
        $html.='<div class="col-sm-10">';
        $html.='<div class = "form-group">';
        $html.='<button type = "submit"  value="Valider" class="btn btn-success">Lancer la recherche</button>';
        $html.='</div></div></div>';


        $html.='</form>';
        $html.='</div></div>';

        echo $html;
    }

//Fontion permetant d'afficher le formulaire de la recherche par Salle
    public function FormulaireRechercheTraitementSalle($panne) {

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form class=" role="form" action="rechercheTraitementSalle.php" method="post">';

//Choix d'une salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="salle" class="col-sm-2 control-label">Salle : </label>';
        $html.=$this->addChampSalle(array('required' => 'required'));
        $html.='</div></div>';

//Bouton Valider
        $html.='<div class="col-sm-10">';
        $html.='<div class = "form-group">';
        $html.='<button type = "submit"  value="Valider" class="btn btn-success">Lancer la recherche</button>';
        $html.='</div></div>';


        $html.='</form>';
        $html.='</div></div>';

        echo $html;
    }

//Fontion permetant d'afficher le formulaire d'ajout d'un inventaire
    public function AddFormulaireInventaire($inventaire) {

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form role="form" action="enregistrerInventaire.php" method="post">';

//Saisie d'une Année
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="annee" class="col-sm-2 control-label">Année</label>';
        $html.=$this->addChampAnnee(array('required' => 'required'));
        $html.='</div></div>';

//Choix d'une salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="salle" class="col-sm-2 control-label">Salle</label>';
        $html.=$this->addChampSalle(array('required' => 'required'));
        $html.='<hr></div></div>';


//Choix d'une Imprimante
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="imprimante" class="col-sm-2 control-label">Imprimante</label>';
        $html.=$this->addChampImprimante(array('required' => 'required'));
        $html.='</div></div>';

//Choix d'un video_projecteur
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="videoproj" class="col-sm-2 control-label">Video - projecteur</label>';
        $html.=$this->addChampVideoProj(array('required' => 'required'));
        $html.='</div></div>';

//Saisie du nombre de RJ45
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="rj45" class="col-sm-2 control-label">Nombre de RJ45</label>';
        $html.='<input type="text" required name="rj45" class="form-control" value="' . $inventaire->rj45 . '" placeholder="Nombre de RJ45"></div>';
        $html.='</div>';


//Saisie d'un commentaire
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="commentaires" class="col-sm-2 control-label">Commentaires</label>';
        $html.='<textarea name="commentaires" class="form-control" rows="3">' . $inventaire->commentaires . '</textarea></div>';
        $html.='<hr></div>';
//Pc libelle
        $html.='<div class="col-sm-10">';
        $html.='<div class="alert alert-dismissable alert-info">';
        $html.='Si il y a un <strong>PC Prof, </strong>alors commencer par déclarer celui-ci ci-dessous ! et vous déclarer les autres pc ensuite.';
        $html.='</div></div>';
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="libellepc" class="col-sm-2 control-label text-info">Libelle PC</label>';
        $html.='<input type="text" required name="libellepc" class="form-control" value="' . $inventaire->libellepc . '" placeholder="Libelle PC (prof - élève)"></div>';
        $html.='</div>';

//Nombre pc
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="nombrepc" class="col-sm-2 control-label">Nombre de PC</label>';
        $html.='<input type="text" required name="nombrepc" class="form-control" value="' . $inventaire->nombrepc . '" placeholder="Nombre de PC"></div>';
        $html.='</div>';

        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="anneepc" class="col-sm-2 control-label">Annee du PC</label>';
        $html.='<input type="text" required name="anneepc" class="form-control" value="' . $inventaire->anneepc . '" placeholder="Année du PC"></div>';
        $html.='</div>';

//Choix du type de pc (marque)
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="typepc" class="col-sm-2 control-label">Marque PC</label>';
        $html.=$this->addChampTypePC(array('required' => 'required'));
        $html.='</div></div>';

//Choix de l'OS
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="os" class="col-sm-2 control-label">OS</label>';
        $html.=$this->addChampOs(array('required' => 'required'));
        $html.='</div></div>';

//Choix de la RAM
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="ram" class="col-sm-2 control-label">Mémoire RAM</label>';
        $html.=$this->addChampRam(array('required' => 'required'));
        $html.='</div></div>';

//Choix de l'ecran
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="ecran" class="col-sm-2 control-label">Ecran</label>';
        $html.=$this->addChampEcran(array('required' => 'required'));
        $html.='</div></div>';
        
        $html.='<div class = "form-group">';
        $html.='<div class="col-sm-4">';
        $html.='<button type = "reset" class = "btn btn-primary">Réinitialiser le formulaire</button>&nbsp;';
        $html.='<button type = "submit" value = "Envoyer" class = "btn btn-success">Envoyer</button>';
        $html.='</div></div>';

        $html.='</form>';
        $html.="</div></div>";

        echo $html;
    }

    
    //Fontion permetant d'afficher le formulaire d'ajout d'un inventaire
    public function AddFormulaireNouvelInventaire($inventaire, $salle, $annee) {

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form role="form" action="enregistrerInventaire.php" method="post">';

//Saisie d'une Année
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="annee" class="form-control" placeholder="Annee" value="' . $annee->id . '" ></div>';
        $html.='</div></div>';

//Choix d'une salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="salle" class="form-control" placeholder="Salle" value="' . $salle->id . '" ></div>';
        $html.='</div></div>';


//Choix d'une Imprimante
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="imprimante" class="col-sm-2 control-label">Imprimante</label>';
        $html.=$this->addChampImprimante(array('required' => 'required'));
        $html.='</div></div>';

//Choix d'un video_projecteur
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="videoproj" class="col-sm-2 control-label">Video - projecteur</label>';
        $html.=$this->addChampVideoProj(array('required' => 'required'));
        $html.='</div></div>';

//Saisie du nombre de RJ45
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="rj45" class="col-sm-2 control-label">Nombre de RJ45</label>';
        $html.='<input type="text" required name="rj45" class="form-control" value="' . $inventaire->rj45 . '" placeholder="Nombre de RJ45"></div>';
        $html.='</div>';

//Saisie d'un commentaire
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="commentaires" class="col-sm-2 control-label">Commentaires</label>';
        $html.='<textarea name="commentaires" class="form-control" rows="3">' . $inventaire->commentaires . '</textarea></div>';
        $html.='<hr></div>';
//Pc libelle
        $html.='<div class="col-sm-10">';
        $html.='<div class="alert alert-dismissable alert-info">';
        $html.='Si il y a un <strong>PC Prof, </strong>alors commencer par déclarer celui-ci ci-dessous ! et vous déclarer les autres pc ensuite.';
        $html.='</div></div>';
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="libellepc" class="col-sm-2 control-label text-info">Libelle PC</label>';
        $html.='<input type="text" required name="libellepc" class="form-control" value="' . $inventaire->libellepc . '" placeholder="Libelle PC (prof - élève)"></div>';
        $html.='</div>';

//Nombre pc
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="nombrepc" class="col-sm-2 control-label">Nombre de PC</label>';
        $html.='<input type="text" required name="nombrepc" class="form-control" value="' . $inventaire->nombrepc . '" placeholder="Nombre de PC"></div>';
        $html.='</div>';

        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="anneepc" class="col-sm-2 control-label">Annee du PC</label>';
        $html.='<input type="text" required name="anneepc" class="form-control" value="' . $inventaire->anneepc . '" placeholder="Année du PC"></div>';
        $html.='</div>';

//Choix du type de pc (marque)
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="typepc" class="col-sm-2 control-label">Marque PC</label>';
        $html.=$this->addChampTypePC(array('required' => 'required'));
        $html.='</div></div>';

//Choix de l'OS
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="os" class="col-sm-2 control-label">OS</label>';
        $html.=$this->addChampOs(array('required' => 'required'));
        $html.='</div></div>';

//Choix de la RAM
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="ram" class="col-sm-2 control-label">Mémoire RAM</label>';
        $html.=$this->addChampRam(array('required' => 'required'));
        $html.='</div></div>';

//Choix de l'ecran
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="ecran" class="col-sm-2 control-label">Ecran</label>';
        $html.=$this->addChampEcran(array('required' => 'required'));
        $html.='</div></div>';

        $html.='<div class = "form-group">';
        $html.='<div class="col-sm-4">';
        $html.='<button type = "reset" class = "btn btn-primary">Réinitialiser le formulaire</button>&nbsp;';
        $html.='<button type = "submit" value = "Envoyer" class = "btn btn-success">Envoyer</button>';
        $html.='</div></div>';

        $html.='</form>';
        $html.="</div></div>";

        echo $html;
    }
//Fontion permetant d'afficher le formulaire de modification d'inventaire
    public function ModifyFormulaireInventaire($inventaire) {

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form role="form" action="enregistrerModifInventaire.php?id="' . $inventaire->id . '" method="post">';

//ID
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="id" class="form-control" placeholder="ID" value="' . $inventaire->id . '" ></div>';
        $html.='</div>';
//Saisie d'une Année
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="annee" class="form-control" placeholder="Annee" value="' . $inventaire->annee_id . '" ></div>';
        $html.='</div></div>';

//Choix d'une salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="salle" class="form-control" placeholder="Salle" value="' . $inventaire->salle_id . '" ></div>';
        $html.='</div></div>';

//Choix d'une Imprimante
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="imprimante" class="col-sm-2 control-label">Imprimante</label>';
        $html.=$this->addChampImprimante(array('required' => 'required'));
        $html.='</div></div>';

//Choix d'un video_projecteur
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="videoproj" class="col-sm-2 control-label">Video - projecteur</label>';
        $html.=$this->addChampVideoProj(array('required' => 'required'));
        $html.='</div></div>';

//Saisie du nombre de RJ45
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="rj45" class="col-sm-2 control-label">Nombre de RJ45</label>';
        $html.='<input type="text" name="rj45" class="form-control" value="' . $inventaire->rj45 . '" placeholder="Nombre de RJ45"></div>';
        $html.='</div>';

//Saisie d'un commentaire
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="commentaires" class="col-sm-2 control-label">Commentaires</label>';
        $html.='<textarea name="commentaires" class="form-control" rows="3">' . $inventaire->commentaires . '</textarea></div>';
        $html.='<hr></div>';

//Pc libelle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="libellepc" class="col-sm-2 control-label text-info">Libelle PC</label>';
        $html.='<input type="text" name="libellepc" class="form-control" value="' . $inventaire->libellepc . '" placeholder="Libelle PC (prof - élève)"></div>';
        $html.='</div>';

//Nombre pc
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="nombrepc" class="col-sm-2 control-label">Nombre de PC</label>';
        $html.='<input type="text" name="nombrepc" class="form-control" value="' . $inventaire->nombrepc . '" placeholder="Nombre de PC"></div>';
        $html.='</div>';

        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="anneepc" class="col-sm-2 control-label">Annee du PC</label>';
        $html.='<input type="text" name="anneepc" class="form-control" value="' . $inventaire->anneepc . '" placeholder="Année du PC"></div>';
        $html.='</div>';

//Choix du type de pc (marque)
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="typepc" class="col-sm-2 control-label">Marque PC</label>';
        $html.=$this->addChampTypePC(array('required' => 'required'));
        $html.='</div></div>';

//Choix de l'OS
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="os" class="col-sm-2 control-label">OS</label>';
        $html.=$this->addChampOs(array('required' => 'required'));
        $html.='</div></div>';

//Choix de la RAM
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="ram" class="col-sm-2 control-label">Mémoire RAM</label>';
        $html.=$this->addChampRam(array('required' => 'required'));
        $html.='</div></div>';

//Choix de l'ecran
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="ecran" class="col-sm-2 control-label">Ecran</label>';
        $html.=$this->addChampEcran(array('required' => 'required'));
        $html.='<hr></div></div>';



        $html.='<div class = "form-group">';
        $html.='<div class="col-sm-4">';
        $html.='<button type = "reset" class = "btn btn-primary">Réinitialiser le formulaire</button>&nbsp;';
        $html.='<button type = "submit" value = "Envoyer" class = "btn btn-success">Envoyer</button>';
        $html.='</div></div>';

        $html.='</form>';
        $html.="</div></div>";

        echo $html;
    }

//Fontion permetant d'afficher le formulaire d'ajout d'un inventaire
    public function AddFormulaireInventaireAutrePc($inventaire, $salle, $annee) {

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form role="form" action="enregistrerInventaireAutrePC.php" method="post">';

//Saisie d'une Année
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="annee" class="form-control" placeholder="Annee" value="' . $annee->id . '" ></div>';
        $html.='</div>';
//Choix d'une salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="salle" class="form-control" placeholder="Salle" value="' . $salle->id . '" ></div>';
        $html.='</div>';

//Pc libelle

        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="libellepc" class="col-sm-2 control-label text-info">Libelle PC</label>';
        $html.='<input type="text" name="libellepc" class="form-control" value="' . $inventaire->libellepc . '" placeholder="Libelle PC (prof - élève)"></div>';
        $html.='</div>';

//Nombre pc
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="nombrepc" class="col-sm-2 control-label">Nombre de PC</label>';
        $html.='<input type="text" name="nombrepc" class="form-control" value="' . $inventaire->nombrepc . '" placeholder="Nombre de PC"></div>';
        $html.='</div>';

        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="anneepc" class="col-sm-2 control-label">Annee du PC</label>';
        $html.='<input type="text" name="anneepc" class="form-control" value="' . $inventaire->anneepc . '" placeholder="Année du PC"></div>';
        $html.='</div>';

//Choix du type de pc
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="typepc" class="col-sm-2 control-label">Marque PC</label>';
        $html.=$this->addChampTypePC(array('required' => 'required'));
        $html.='</div></div>';

//Choix de l'OS
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="os" class="col-sm-2 control-label">OS</label>';
        $html.=$this->addChampOs(array('required' => 'required'));
        $html.='</div></div>';

//Choix de la RAM
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="ram" class="col-sm-2 control-label">Mémoire RAM</label>';
        $html.=$this->addChampRam(array('required' => 'required'));
        $html.='</div></div>';
//Choix de l'ecran
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="ecran" class="col-sm-2 control-label">Ecran</label>';
        $html.=$this->addChampEcran(array('required' => 'required'));
        $html.='<hr></div></div>';

//Choix d'une Imprimante
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="imprimante" class="form-control" value=" " >';
        $html.='</div></div>';

//Choix d'un video_projecteur
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="videoproj" class="form-control" value=" " >';
        $html.='</div></div>';

        $html.='<div class = "form-group">';
        $html.='<div class="col-sm-4">';
        $html.='<button type = "submit" value = "Envoyer" class = "btn btn-success">Envoyer</button>';
        $html.='</div></div>';

        $html.='</form>';
        $html.="</div></div>";

        echo $html;
    }

//Fontion permetant d'afficher le formulaire de modif d'un inventaire autre pc
    public function ModifyFormulaireInventaireAutrePC($inventaire) {

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form role="form" action="enregistrerModifInventaireAutrePC.php?id="' . $inventaire->id . '" method="post">';

//ID
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="id" class="form-control" placeholder="ID" value="' . $inventaire->id . '" ></div>';
        $html.='</div>';
//Saisie d'une Année
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="annee" class="form-control" placeholder="Annee" value="' . $inventaire->annee_id . '" ></div>';
        $html.='</div></div>';
//Choix d'une salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<input type="hidden" name="salle" class="form-control" placeholder="Salle" value="' . $inventaire->salle_id . '" ></div>';
        $html.='</div></div>';

//Pc libelle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="libellepc" class="col-sm-2 control-label text-info">Libelle PC</label>';
        $html.='<input type="text" name="libellepc" class="form-control" value="' . $inventaire->libellepc . '" placeholder="Libelle PC (prof - élève)"></div>';
        $html.='</div>';

//Nombre pc
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="nombrepc" class="col-sm-2 control-label">Nombre de PC</label>';
        $html.='<input type="text" name="nombrepc" class="form-control" value="' . $inventaire->nombrepc . '" placeholder="Nombre de PC"></div>';
        $html.='</div>';

        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="anneepc" class="col-sm-2 control-label">Annee du PC</label>';
        $html.='<input type="text" name="anneepc" class="form-control" value="' . $inventaire->anneepc . '" placeholder="Année du PC"></div>';
        $html.='</div>';

//Choix du type de pc (marque)
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="typepc" class="col-sm-2 control-label">Marque PC</label>';
        $html.=$this->addChampTypePC(array('required' => 'required'));
        $html.='</div></div>';

//Choix de l'OS
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="os" class="col-sm-2 control-label">OS</label>';
        $html.=$this->addChampOs(array('required' => 'required'));
        $html.='</div></div>';

//Choix de la RAM
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="ram" class="col-sm-2 control-label">Mémoire RAM</label>';
        $html.=$this->addChampRam(array('required' => 'required'));
        $html.='</div></div>';

//Choix de l'ecran
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="ecran" class="col-sm-2 control-label">Ecran</label>';
        $html.=$this->addChampEcran(array('required' => 'required'));
        $html.='<hr></div></div>';

        $html.='<div class = "form-group">';
        $html.='<div class="col-sm-4">';
        $html.='<button type = "reset" class = "btn btn-primary">Réinitialiser le formulaire</button>&nbsp;';
        $html.='<button type = "submit" value = "Envoyer" class = "btn btn-success">Envoyer</button>';
        $html.='</div></div>';

        $html.='</form>';
        $html.="</div></div>";

        echo $html;
    }

//Fontion permetant d'afficher le formulaire de transfert d'un inventaire
    public function TransfererFormulaireInventaire($inventaire) {

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form role="form" method="post" action="transfererCetInventaire.php">';

//Choix d'une salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        //$html.='<div class="form-group has-success">';
        $html.='<label for="salle" class="col-sm-2 control-label">Salle</label>';
        $html.=$this->addChampSalle(array('required' => 'required'));
        $html.='</div></div>';

//Saisie d'une Année
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="annee" class="col-sm-2 control-label">Année dont on veut récupérer les données.</label>';
        $html.=$this->addChampAnnee(array('required' => 'required'));
        $html.='</div></div>';

        $html.='<div class = "form-group">';
        $html.='<div class="col-sm-4">';
        $html.='<button type = "submit" value = "Transferer" class = "btn btn-success">Transferer</button>';
        $html.='</div></div>';

        $html.='</form>';
        $html.="</div></div>";

        echo $html;
    }

//Fontion permetant d'afficher le formulaire de la recherche par Salle et année
    public function FormulaireRechercheInventaire($inventaire) {

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form class=" role="form" action="rechercheInventaire.php" method="post">';

//Choix d'une salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="salle"  class="col-sm-2 control-label">Salle : </label>';
        $html.=$this->addChampSalle(array('required' => 'required'));
        $html.='</div></div>';

//Choix d'une année
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="annee" class="col-sm-2 control-label">Année : </label>';
        $html.=$this->addChampAnnee(array('required' => 'required'));
        $html.='</div></div>';

//Bouton Valider
        $html.='<div class="col-sm-10">';
        $html.='<div class = "form-group">';
        $html.='<button type = "submit"  value="Valider" class="btn btn-success">Lancer la recherche</button>';
        $html.='</div></div></div>';


        $html.='</form>';
        $html.='</div></div>';

        echo $html;
    }

//Fontion permetant d'afficher le formulaire d'ajout d'une salle
    public function AddFormulaireSalle($salle) {

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form role="form" action="enregistrerSalle.php" method="post">';

//Saisie d'une Salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="salle" class="col-sm-2 control-label">Ajouter une salle</label>';
        $html.='<input type="text" name="libelle" class="form-control" value="' . $salle->libelle . '" placeholder="Salle"></div>';
        $html.='</div>';

//Bouton Envoyer
        $html.='<div class = "form-group">';
        $html.='<div class="col-sm-4">';
        $html.='<button type = "reset" class = "btn btn-primary">Réinitialiser le formulaire</button>&nbsp;';
        $html.='<button type = "submit" value = "Envoyer" class = "btn btn-success">Envoyer</button>';
        $html.='</div></div>';

        $html.='</form>';
        $html.="</div></div>";

        echo $html;
    }
    
    //Fontion permetant d'afficher le formulaire d'ajout d'une salle
    public function AddFormulaireExportParAnnee($inventaire) {

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form role="form" action="exportParAnnee.php" method="post">';

//Saisie d'une Salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="annee" class="col-sm-2 control-label">Année</label>';
        $html.=$this->addChampAnnee(array('required' => 'required'));
        $html.='</div>';

//Bouton Envoyer
        $html.='<div class = "form-group">';
        $html.='<div class="col-sm-10">';
        $html.='<button type = "submit" value = "Envoyer" class = "btn btn-success">EXPORTER PAR ANNEE</button>';
        $html.='</div></div>';

        $html.='</form>';
        $html.="</div></div>";

        echo $html;
    }
     //Fontion permetant d'afficher le formulaire d'ajout d'une salle
    public function AddFormulaireExportParSalle($inventaire) {

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form role="form" action="exportParSalle.php" method="post">';

//Saisie d'une Salle
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="salle" class="col-sm-2 control-label">Salle</label>';
        $html.=$this->addChampSalle(array('required' => 'required'));
        $html.='</div>';

//Bouton Envoyer
        $html.='<div class = "form-group">';
        $html.='<div class="col-sm-10">';
        $html.='<button type = "submit" value = "Envoyer" class = "btn btn-success">EXPORTER PAR SALLE</button>';
        $html.='</div></div>';

        $html.='</form>';
        $html.="</div></div>";

        echo $html;
    }

}
