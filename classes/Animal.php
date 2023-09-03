<?php
require_once ('./config/autoload.php');

class Animal extends Enclos
{   
    private $id_animal;
    private $nom_animal;
    private int $poids;
    private $famille;
    private $sexe;
    private int $taille;
    private string $espece;
    private int $age;
    private $probabiliteFaim = 1;
    private $probabiliteDormir = 1;
    private $probabiliteMalade = 1;


    public function __construct($poids, $taille, $espece, $age)
    {
        $this->setPoids($poids);
        $this->setTaille($taille);
        $this->setEspece($espece);
        $this->setAge($age);
    }


    // Faire une fonction qui permettrait de nourrir l'animal avec un bouton s'il a faim.
    public function manger()
    {
        echo "Le $this->espece est entrain de se nourrir";
    }

    // Essayer de faire émettre des sons aléatoirement aux animaux.
    public function son()
    {
    }

 
  

    public function faim() 
    {
        // Générer un nombre aléatoire entre 0 et 1
        $random = mt_rand(0,1);
        var_dump($random);

        // Vérifier si l'animal dort en fonction de la probabilité
        if ($random != $this->probabiliteFaim) {
            echo $this->espece . " a faim.";
        } else {
            echo $this->espece . " n'a pas faim.";
        }

        return $random; 
    }



  

    public function dormir()
    {
        // Générer un nombre aléatoire entre 0 et 1
        $random = mt_rand(0,1);

        // Vérifier si l'animal dort en fonction de la probabilité
        if ($random != $this->probabiliteDormir) {
            echo $this->espece . " dort.";
        } else {
            echo $this->espece . " ne dort pas.";
        } 
    }



    //  FONCTION MALADE 



    public function malade()
    {
        $random = mt_rand(0,1);

        if ($random != $this->probabiliteMalade) {
            echo $this->espece . ' est malade';
        } else {
            echo $this->espece . ' est en bonne santé';
        }
        return $random;
    }



    // Fonction qui permet d'afficher toutes les caractéristiques de l'animal.
    public function caracteristiques()
    {
        echo "$this->poids <br> $this->taille <br> $this->espece <br> $this->age <br>";
    }







    public function getPoids()
    {
        return $this->poids;
    }


    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }


    public function getTaille()
    {
        return $this->taille;
    }


    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    public function getEspece()
    {
        return $this->espece;
    }


    public function setEspece($espece)
    {
        $this->espece = $espece;

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











    public function getProbabiliteDormir()
    {
        return $this->probabiliteDormir;
    }


    public function setProbabiliteDormir($probabiliteDormir)
    {
        $this->probabiliteDormir = $probabiliteDormir;

        return $this;
    }


    public function getProbabiliteMalade()
    {
        return $this->probabiliteMalade;
    }


    public function setProbabiliteMalade($probabiliteMalade)
    {
        $this->probabiliteMalade = $probabiliteMalade;

        return $this;
    }

    /**
     * Get the value of probabiliteFaim
     */
    public function getProbabiliteFaim()
    {
        return $this->probabiliteFaim;
    }

    /**
     * Set the value of probabiliteFaim
     *
     * @return  self
     */
    public function setProbabiliteFaim($probabiliteFaim)
    {
        $this->probabiliteFaim = $probabiliteFaim;

        return $this;
    }

    /**
     * Get the value of id_animal
     */ 
    public function getId_animal()
    {
        return $this->id_animal;
    }

   

    /**
     * Get the value of nom_animal
     */ 
    public function getNom_animal()
    {
        return $this->nom_animal;
    }

    /**
     * Set the value of nom_animal
     *
     * @return  self
     */ 
    public function setNom_animal($nom_animal)
    {
        $this->nom_animal = $nom_animal;

        return $this;
    }

    /**
     * Get the value of famille
     */ 
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set the value of famille
     *
     * @return  self
     */ 
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }
}
