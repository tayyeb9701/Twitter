<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/recherche/recherche.css">
</head>
<body>
    <nav>
        <a href="../tweet/vue_aff_tweet.php">Accueil</a>
        <a href="../index.php">Log out</a>
    </nav>
    <main>
        <form action="" method="post">
            <label for="recherche">Recherche de membre :</label>
            <input type="text" name="recherche">
        </form>
        <?php
        include('../dbh.php');
        include ('ctrl_recherche.php');

        $user = new recherche();
        $user->rechercher();
        ?>
    </main>
</body>
</html>