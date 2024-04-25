<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/tweet/styleTweet.css">
</head>
<body>
    <nav>
        <!-- <img src="../twitter.png" alt=""> -->
        <a href="../chat/chat.php">Chat</a>
        <a href="../profil/vue_profil.php">Profil</a>
        <a href="../recherche/vue_recherche.php">Recherche de membres</a> 
        <a href="../index.php">Log out</a>
    </nav>
    <main>
        <form action="vue_create_tweet.php" method="post">
            <textarea name="content" id="tweet" cols="30" rows="10" placeholder="créer un tweet" maxlength="140" required></textarea>
            <input type="submit" value="Tweeter">
        </form>
    </main>
    <?php
    include 'mdl_tweet.php';
    include 'ctrl_tweet.php';
    $users = new Tweet();
    $users->recupLog();
    $users->displayTweet();
    ?>
    

    <script src="tweet.js"></script>
</body>
</html>