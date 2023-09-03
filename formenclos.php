<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./utils/insertEnclos.php" method="POST">

    
            <input type="hidden" name="id_enclos">
            <label for="type">Créer votre type d'enclos : </label>
            <select name="type" required>
            <option value="Terrestre">Terrestre</option>
            <option value="Aerien">Aerien</option>
            <option value="Aquatique">Aquatique</option>
        </select>

        <input type="submit" value ="Ajouter">
    </form>
</body>
</html>