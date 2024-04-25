<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../chat/chat.php">CHAT</a>
    <a href="../profil/vue_profil.php">Profil</a>
    <?php
    include 'mdl_tweet.php';
    include 'ctrl_tweet.php';
    $users = new Tweet();
    $users->defineLog();
    if ($users->displayTweet()) {
        header("Location: vue_aff_tweet.php");
    } else {
        header("Location: error.html");
    }
    ?>
    <form action="vue_create_tweet.php" method="post">
        <textarea name="content" id="tweet" cols="30" rows="10" placeholder="créer un tweet" maxlength="140" required></textarea>
        <input type="submit" value="Tweeter">
    </form>


</body>
</html>