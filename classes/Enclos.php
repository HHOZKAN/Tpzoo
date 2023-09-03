<?php

class Enclos extends Employe
{
    private $type;
    private $nom;
    private $proprete;
    private $nbranimaux;
    public $table = [];
    public $count = 0;


    function __construct($nom)
    {
        $this->nom = $nom;
    }


    // Afficher toutes les caractéristiques des animaux dans l'enclos
    public function AfficherAnimaux()
    {
        return $this->table;
    }


    public function caracteristiques()
    {
        echo "Les caractéristiques de cet enclos sont : <br> $this->nom <br> $this->proprete <br> $this->count";
    }


  
    // Fonction permettant d'ajouter un animal dans un enclos
    public function ajouter($animal)
    {
        if ($this->count < 6)
            $this->table[] = $animal;
        $this->count++;

        echo "Animal a bien été ajouté a l'enclos";
    }

    // Fonction permettant d'enlever un animal de l'enclos
    public function enlever($animal)
    {
        $this->table[]= $animal;
        $this->count--;

        echo "Votre animal a été retiré de l'enclos.";

    }


    // Fonction permettant a l'employé de nettoyer l'enclos
    public function entretenir($entretien)
    {
        if ($entretien === true) {
            echo "L'enclos est propre";
        } else {
            echo "L'enclos doît être nettoyé";
        }
    }




    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getProprete()
    {
        return $this->proprete;
    }


    public function setProprete($proprete)
    {
        $this->proprete = $proprete;

        return $this;
    }

    public function getNbranimaux()
    {
        return $this->nbranimaux;
    }

    public function setNbranimaux($nbranimaux)
    {
        $this->nbranimaux = $nbranimaux;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
