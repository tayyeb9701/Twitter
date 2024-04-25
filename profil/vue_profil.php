<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/profil/styleProfil.css">
    <title>Profil</title>
</head>
<body>
    <nav>
        <a href="vue_editProfil.php">Edit your profil</a>
        <a href="../follow/vue_followers.php">Followers</a>
        <a href="../follow/vue_followings.php">Followings</a>
        <a href="../tweet/vue_aff_tweet.php">Accueil</a>
        <a href="../index.php">Log out</a>
    </nav>
    <main>
        <?php
        session_start();
        //vue
        include '../profil/mdl_profil.php';
        include '../profil/ctrl_profil.php';
        $users = new ViewUser();
        $users->showProfil();
        ?>
        <p class="info_profil">
            <?php
            ?>
        </p>
    </main>

</body>
</html>