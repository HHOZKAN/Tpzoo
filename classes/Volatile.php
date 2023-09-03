<?php
require("../config/autoload.php");


class Volatile extends Animal {

    public function __construct($poids, $taille, $espece, $age) {
        $this->setPoids($poids);
        $this->setTaille($taille);
        $this->setEspece($espece);
        $this->setAge($age);
    }

    public function voler() 
    {
        
    }

    public function son() {
        
    }
}