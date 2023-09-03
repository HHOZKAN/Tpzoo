<?php

require('../config/database.php');
require('../Models/Model.php');

if (isset($_POST['id_animal'])) {
$nom_animal = $_POST['nom_animal'];
$espece = $_POST['espece'];
$taille = $_POST['taille'];
$poids = $_POST['poids'];
$famille = $_POST['famille'];
$sexe = $_POST['sexe'];
$age = $_POST['age'];
$image = $_POST['image'];

insertAnimal($nom_animal, $espece, $taille,$poids, $famille, $sexe, $age, $image);

header('Location: ../index.php');

}