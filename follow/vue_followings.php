<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Followings</title>
</head>
<body>
    <a href="vue_followers.php">Followers</a>
    <a href="../profil/vue_profil.php">Profil</a>
    <a href="../index.php">Log out</a>
    <h1>Followings</h1>
    <?php
    include('../dbh.php');
    include('../follow/ctrl_followings.php');
    
    $user = new following();
    $user->followings();
    ?>



</body>
</html>