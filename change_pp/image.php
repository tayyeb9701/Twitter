<?php

//include '../dbh.php';
include 'ctrl_image.php';


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

    </head>
<body>
    <h2>Ajouter image</h2>
    <form action="vue_image.php" method="POST" enctype="multipart/form-data">
    
        <label for="file">Fichier</label>
        <input type="file" name="file">
        
        <button type="submit">Enregistrer</button>
    </form>
    <h2>Mes images</h2>
</body>
</html>