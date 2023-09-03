<?php



class Tigre extends Animal {

    public function __construct($poids, $taille, $espece, $age) {
        parent::__construct($poids, $taille, $espece, $age);
     }

    public function vagabonder() 
    {
        echo "Le tigre se balade dans l'enclos";
    }


    public function son() 
    {
    echo "Roah, Roaaar, Raaah!";
    }

}