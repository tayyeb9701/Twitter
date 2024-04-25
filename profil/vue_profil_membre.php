<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../tweet/vue_aff_tweet.php">Accueil</a>
    <a href="../index.php">Log out</a>

    <?php

    include('../dbh.php');
    include('ctrl_profil_membre.php');

    $users = new membre();
    $users->profil_membre();
    $users->suivre();
    
    ?>
    
    <form method="post">
        <input type="submit" name="suivre" value="suivre" />
    </form>

   

</body>
</html>