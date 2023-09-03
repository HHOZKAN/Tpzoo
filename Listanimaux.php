<?php 

require("./config/autoload.php");
require('./Models/Model.php');
require('./config/database.php');

$animaux = SelectAnimaux();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animal Cards</title>
  <!-- Inclure les fichiers CSS et JavaScript de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<?php require('./nav/navbar.php') ?>

<div class="container mt-5">
  <div class="row">
    <?php foreach ($animaux as $animal) : ?>
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img src="./assets/<?= $animal['image'] ?>" class="card-img-top" alt="..." data-toggle="modal" data-target="#animalModal<?= $animal['id_animal'] ?>">
          <div class="card-body">
            <p class="card-text"><?= $animal['nom_animal'] ?></p>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="animalModal<?= $animal['id_animal'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><?= $animal['nom_animal'] ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <img src="./assets/<?= $animal['image'] ?>" class="img-fluid" alt="<?= $animal['nom_animal'] ?>">
                </div>
                <div class="col-md-6">
                  <p>Il a <?= $animal['age'] ?> ans</p>
                  <p>Il pèse <?= $animal['poids'] ?> kilos</p>
                  <p>Il mesure <?= $animal['taille'] ?> cm</p>

                  <!-- Ajoutez d'autres détails de l'animal depuis la base de données ici -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>


</body>
</html>









</body>
</html>
