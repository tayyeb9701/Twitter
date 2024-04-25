<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-900 min-h-screen flex flex-col items-center">

    <nav class="bg-gray-600 shadow-md rounded-lg p-4 mb-4 flex justify-around w-full">
        <a href="../follow/vue_followers.php" class="text-white hover:underline">Followers</a>
        <a href="../follow/vue_followings.php" class="text-white hover:underline">Followings</a>
        <a href="../tweet/vue_aff_tweet.php" class="text-white hover:underline">Accueil</a>
        <a href="../profil/vue_profil.php" class="text-white hover:underline">Profil</a>
        <a href="../index.php" class="text-white hover:underline">Log out</a>
    </nav>

    <form action="co_insc/vue_insc.php" method="POST" class="mb-4"></form>

    <h2 class="text-white font-bold mb-5">Chat</h2>

    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-4 mb-4">
        <div class="messages">
            <div class="message flex mb-2">
                <span class="date text-sm text-gray-500">23:22 :</span>
                <span class="author font-semibold ml-2">Cherif</span>
                <span class="content ml-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate,
                    vitae!</span>
            </div>
        </div>
    </div>

    <form action="vue_chat.php?task=write" method="POST" class="mb-4">
        <div class="flex items-center">
            <input type="text" name="content" id="content" placeholder="Type your message here"
                class="appearance-none bg-gray-200 rounded-lg p-2 flex-1 mr-2 focus:outline-none">
            <button type="submit"
                class="flex-shrink-0 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">&#128293;
                Send!</button>
        </div>
    </form>

    <script src="script.js"></script>

</body>

</html>