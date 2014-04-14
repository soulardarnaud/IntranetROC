<?php

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
        $html = '<select class="form-control" name="type">';
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
    private function addChampImprimante() {
        $imprimantes = R::findAll('imprimante');
        $html = '<select class="form-control" name="imprimante">';
        $html.='<option value=" ">Aucune imprimante définie</option>';
        foreach ($imprimantes as $imprimante) {
            $html.='<option value="' . $imprimante->id . '">' . $imprimante->libelle . '</option>';
        }
        $html.='</select>';
        return $html;
    }

//Fonction d'ajout des champs Vidéo-projecteur dans une liste déroulante
    private function addChampVideoProj() {
        $videoprojs = R::findAll('videoproj');
        $html = '<select class="form-control" name="videoproj">';
        $html.='<option value="">Aucun vidéo-projecteur défini</option>';
        foreach ($videoprojs as $videoproj) {
            $html.='<option value="' . $videoproj->id . '">' . $videoproj->libelle . '</option>';
        }
        $html.='</select>';
        return $html;
    }

//Fonction d'ajout des champs Type de pc (marque) dans une liste déroulante
    private function addChampTypePC() {
        $typepcs = R::findAll('typepc');
        $html = '<select class="form-control" name="typepc">';
        $html.='<option value="">Aucune marque de pc définie</option>';
        foreach ($typepcs as $typepc) {
            $html.='<option value="' . $typepc->id . '">' . $typepc->libelle . '</option>';
        }
        $html.='</select>';
        return $html;
    }

//Fonction d'ajout des champs Ecran dans une liste déroulante
    private function addChampEcran() {
        $ecrans = R::findAll('ecran');
        $html = '<select class="form-control" name="ecran">';
        $html.='<option value="">Aucune taille d\'écran définie</option>';
        foreach ($ecrans as $ecran) {
            $html.='<option value="' . $ecran->id . '">' . $ecran->taille . '</option>';
        }
        $html.='</select>';
        return $html;
    }

//Fonction d'ajout des champs Os dans une liste déroulante
    private function addChampOs() {
        $oss = R::findAll('os');
        $html = '<select class="form-control" name="os">';
        $html.='<option value="">Aucun OS défini</option>';
        foreach ($oss as $os) {
            $html.='<option value="' . $os->id . '">' . $os->libelle . '</option>';
        }
        $html.='</select>';
        return $html;
    }

//Fonction d'ajout des champs Mémoire Ram dans une liste déroulante
    private function addChampRam() {
        $rams = R::findAll('ram');
        $html = '<select class="form-control" name="ram">';
        $html.='<option value="">Aucune ram définie</option>';
        foreach ($rams as $ram) {
            $html.='<option value="' . $ram->id . '">' . $ram->capacite . '</option>';
        }
        $html.='</select>';
        return $html;
    }

//Fontion permetant d'afficher le formulaire d'ajout d'un évènement
    public function AddFormulaireEvenement($evenement) {

        $html = '<div class="row">';
        $html.= '<div class="col-lg-12">';
        $html.= '<form role="form" action="enregistrerEvenement.php" method="post">';

//Saisie d'un evenement
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="libelle" class="col-sm-2 control-label">Ajouter un évènement :</label>';
        $html.='<input type="text" name="libelle" class="form-control" value="' . $evenement->libelle . '" placeholder="Evenenment"></div>';
        $html.='</div>';

//Saisie d'une description
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="description" class="col-sm-2 control-label">Description de l\'évenement :</label>';
        $html.='<textarea name="description" class="form-control" rows="3">' . $evenement->description . '</textarea>';
        $html.='</div></div>';
        
//Saisie d'un evenement
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="lieu" class="col-sm-2 control-label">Lieu : </label>';
        $html.='<input type="text" name="lieu" class="form-control" value="' . $evenement->lieu . '" placeholder="Lieu"></div>';
        $html.='</div>';

//Saisie d'une date et heure de début
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="heureDebut" class="col-sm-2 control-label">Date et heure de début : </label>';
        $html.='<input id="dp1" type="date" required name="heureDebut" data-date-format="dd/mm/yy" class="form-control" value="' . $evenement->heureDebut . '" placeholder="Date et heure de début" ></div>';
        $html.='</div>';
        
//Saisie d'une date de panne
        $html.='<div class="col-sm-10">';
        $html.='<div class="form-group">';
        $html.='<label for="heureFin" class="col-sm-2 control-label">Date et heure de fin : </label>';
        $html.='<input id="dp1" type="date" required name="heureFin" data-date-format="dd/mm/yy" class="form-control" value="' . $evenement->heureFin . '" placeholder="Date et heure de fin" ></div>';
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

}
