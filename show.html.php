<!DOCTYPE html>
<html>

<head>
    <title>Ajouter un nouvel animal</title>
</head>

<body>
    <h1>Ajouter un nouvel animal</h1>
    <form action="./utils/insertAnimal.php" method="POST">

        <input type="hidden" name="id_animal">
        <label for="nom_animal">Nom de l'animal:</label>
        <input type="text" name="nom_animal" required><br>

        <label for="poids">Poids (en kg):</label>
        <input type="number" name="poids" required><br>

        <label for="famille">La Mif :</label>
        <input type="text" name="famille" required><br>

        <label for="taille">Taille (en cm):</label>
        <input type="number" name="taille" required><br>

        <label for="espece">Espèce:</label>
        <input type="text" name="espece" required><br>

        <label for="age">Âge:</label>
        <input type="number" name="age" required><br>

        <label for="sexe">Sexe:</label>
        <select name="sexe" required>
            <option value="M">Mâle</option>
            <option value="F">Femelle</option>
        </select><br>

        <label for="image">Image de votre animal :</label>
        <input type="file" name="image">

        <input type="submit" value="Ajouter">
    </form>
</body>

</html>