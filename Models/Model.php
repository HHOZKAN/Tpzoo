<?php


function insertAnimal($nom_animal, $espece, $taille, $poids, $famille, $sexe, $age, $image)
{
    $pdo = getPdo();
    $query = $pdo->prepare('INSERT INTO animaux SET nom_animal = :nom_animal, espece = :espece, taille = :taille, poids = :poids, famille = :famille, sexe = :sexe, age = :age, image = :image');
    $query->execute([
        'nom_animal' => $nom_animal,
        'espece' => $espece,
        'taille' => $taille,
        'poids' => $poids,
        'famille' => $famille,
        'sexe' => $sexe,
        'age' => $age,
        'image' => $image
    ]);
}

function insertEnclos($type)
{
    $pdo = getPdo();
    $query = $pdo->prepare('INSERT INTO enclos SET type = :type');
    $query->execute([
        'type' => $type
    ]);
}

function deleteAnimal(int $id_animal): void
{
    $pdo = getPdo();
    $query = $pdo->prepare('DELETE FROM animaux  WHERE id_animal = :id_animal');
    $query->execute(['id_animal' => $id_animal]);
}

function ModifAnimal()
{
    $pdo = getPdo();
    $query = $pdo->prepare('UPDATE animaux SET nom_animal = :nom_animal, taille = :taille, poids = :poids, age = :age WHERE id_animal = :id_animal');
    $query->execute(compact('nom_animal', 'taille', 'poids', 'age'));
}

function SelectAnimaux()
{
    $pdo = getPdo();
    $query = $pdo->prepare("SELECT * FROM animaux");
    $query->execute();
    $animaux = $query->fetchAll();

    return $animaux;
}

function SelectEnclos()
{
    $pdo = getPdo();
    $query = $pdo->prepare("SELECT * FROM enclos");
    $query->execute();
    $enclos = $query->fetchAll();

    return $enclos;
}
