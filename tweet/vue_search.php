<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'mdl_tweet.php';
    include 'ctrl_tweet.php';
    $users = new Tweet();
    $users->displayHashtag();
    ?>
</body>
</html>