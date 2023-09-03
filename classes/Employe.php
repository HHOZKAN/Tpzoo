<?php

class Employe extends Zoo
{
    private $nom;
    private $age;
    private $sexe;

    function __construct($nom, $age, $sexe)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
    }


    // Fonction qui va renvoyer les caractéristiques des animaux présents dedans et les caracteristiques de l'enclos elle même.
    // Il faut penser a créer un bouton examiner afin de déclencher cette fonction.
    public function examiner()
    {
        
    }

    public function soigner(Animal $animal) 
    {
        if ($animal->malade() != 1) {
            echo " L'animal est malade. Il doît être soigné.";
        } else {
            echo "  L'animal est en bonne santé.";
        }
    }
    
    // Fonction qui va permettre de nettoyer l'enclos s'il est sale, il faut faire une condition avec la fonction qui determine la propreté de l'enclos.
    public function nettoyer()
    {

    }

    

    // Fonction qui va permettre de nourrir les animaux avec une condition qui determine si l'animal en question à faim ou pas il faut rapprocher cela avec la fonction faim.
    public function nourrir(Animal $animal) 
    {
        if ($animal->faim() != 1 ) {
            echo " L'animal a faim. Il est en train d'être nourri.";
        } else {
            echo " L'animal n'a pas faim, pas besoin de le nourrir.";
        }
    }
    

    // Faire uen condition qui determine si l'enclos a de la place et qu'il correspond bien avec l'animal en question afin d'ajouter un animal dans l'enclos.
   
    // Fonction qui permet d'enlever des animaux depuis les enclos.
   

    // Fonction qui permet de transférer un animal d'un enclos à l'autre.
    public function transferer() 
    {

    }


    // ????????????
    public function interface()
    {

    }

    

    public function getSexe()
    {
        return $this->sexe;
    }


    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age)
    {
        $this->age = $age;

        return $this;
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
}
