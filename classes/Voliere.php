<?php
require("../config/autoload.php");

class Voliere extends Enclos {
    private $hauteur;

    function __construct($nom, $hauteur)
    {
        parent::__construct($nom);
        $this->setNom($nom);
        $this->hauteur = $hauteur;
    }


    // Fonction qui permet de vérifier le sommet de la cage
    public function EntretenirSommet()
    {
        echo "Le sommet de la volière a été vérifiée.";
    }
}