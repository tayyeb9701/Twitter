<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/editProfil/styleEditProfil.css">
</head>
<body>
    <nav>
        <a href="vue_profil.php">Profil</a>
        <a href="../index.php">Log out</a>
    </nav>
    <?php
    session_start();
    // vue
    include '../profil/mdl_profil.php';
    include '../profil/ctrl_profil.php';
    $users = new ViewUser();
    ?>
    <main>
        <?php $users->editProfil(); ?>
        <form action="" method="POST">
            <label>Enter your actual username</label>
            <div class="input">
                <input type="text" name="username">
            </div>
            <label>Enter your new username</label>
            <div class="input">
                <input type="text" name="new_username">
            </div>
            <label>Enter your actual profile picture</label>
            <div class="input">
                <input type="text" name="profilePicture">
            </div>
            <label>Enter your new profile picture</label>
            <div class="input">
                <input type="text" name="new_profilePicture">
            </div>
            <label>Enter your actual bio</label>
            <div class="input">
                <input type="text" name="bio">
            </div>
            <label>Enter your new bio</label>
            <div class="input">
                <input type="text" name="new_bio">
            </div>
            <label>Enter your actual banner</label>
            <div class="input">
                <input type="text" name="banner">
            </div>
            <label>Enter your new banner</label>
            <div class="input">
                <input type="text" name="new_banner">
            </div>
            <label>Enter your actual mail</label>
            <div class="input">
                <input type="text" name="mail">
            </div>
            <label>Enter your new mail</label>
            <div class="input">
                <input type="text" name="new_mail">
            </div>
            <label>Enter your actual password</label>
            <div class="input">
                <input type="text" name="password">
            </div>
            <label>Enter your new password</label>
            <div class="input">
                <input type="text" name="new_password">
            </div>
            <label>Enter your actual private</label>
            <div class="input">
                <input type="text" name="private">
            </div>
            <label>Enter your new private</label>
            <div class="input">
                <input type="text" name="new_private">
            </div>
            <label>Enter your actual city</label>
            <div class="input">
                <input type="text" name="city">
            </div>
            <label>Enter your new city</label>
            <div class="input">
                <input type="text" name="new_city">
            </div>
            <label>Enter your actual campus</label>
            <div class="input">
                <input type="text" name="campus">
            </div>
            <label>Enter your new campus</label>
            <div class="input">
                <input type="text" name="new_campus">
            </div>
            <div class="submit">
                <input type="submit" value="Modify">
            </div>
        </form>
    </main>
    <footer>
        <a href="../index.php">Please reconnect to validate the changes</a>
    </footer>
</body>
</html>