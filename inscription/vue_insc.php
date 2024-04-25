<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'mdl_insc.php';
    include 'ctrl_insc.php';
    $users = new ViewUser();
    $users->createUser();
    ?>
</body>
</html>