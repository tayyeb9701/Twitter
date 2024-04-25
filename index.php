<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-black min-h-screen flex items-center justify-center">

    <img class="w-20 h-20 sm:w-40 sm:h-40 relative sm:flex"
        src="tailwind/logo-twitter-blanc-png.png" alt="Logo twitter">



    <div class="bg-white p-8 rounded shadow-md w-full sm:w-96">
        <h2 class="text-2xl font-bold mb-4">Log in</h2>
        <form action="profil/vue_profil.php" method="POST">
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" name="username" id="username"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div>
                <input type="submit" value="Login"
                    class="w-full bg-black text-white py-2 px-4 rounded hover:bg-sky-900 cursor-pointer">
            </div>
            <div>
                <a href="inscription.php" type="reset" class="w-max p-3 -ml-3">
                    <span class="text-sm tracking-wide text-blue-600">Sign up</span>
                </a>
            </div>
        </form>
        <script src="script.js"></script>
    </div>

</body>

</html>