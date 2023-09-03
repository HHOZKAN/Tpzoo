<?php
require("../config/autoload.php");


class Poisson extends Animal {

    public function __construct($poids, $taille, $espece, $age) {
        parent::__construct($poids, $taille, $espece, $age);
     }

    public function nager() 
    {
        echo "Le poisson se noie";
    }

    
    public function son() {
        echo "Bloup... Bloup...";
    }

}