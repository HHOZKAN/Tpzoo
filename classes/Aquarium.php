<?php 
require("../config/autoload.php");

class Aquarium extends Enclos {
    private $salinite;

    public function __construct($nom) 
    {
        parent::__construct($nom);
        $this->setNom($nom);
    }


    // Fonction qui genere de la salinite dans l'aquarium.
    public function TauxDeSalinite($salinite) 
    {

    }
}