<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Followers</title>
</head>
<body>
    <a href="vue_followings.php">Followings</a>
    <a href="../profil/vue_profil.php">Profil</a>
    <a href="../index.php">Log out</a>
    <h1>Followers</h1>
    <?php
    include('../dbh.php');
    include('../follow/ctrl_followers.php');
    
    $user = new follow();
    $user->followers();
    ?>


</body>
</html>