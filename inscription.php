<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="dist/style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-black min-h-screen flex items-center justify-center">

    <img class="w-20 h-20 sm:w-40 sm:h-40 relative sm:flex"
        src="tailwind/logo-twitter-blanc-png.png" alt="Logo twitter">

    <div class="bg-white p-8 rounded shadow-md w-full sm:w-96">
        <h2 class="text-2xl font-bold mb-4">Sign up</h2>
        <form action="inscription/vue_insc.php" method="POST">
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" name="username" id="username"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
            </div>
            <div class="mb-4">
                <label for="AtUsername" class="block text-gray-700">@</label>
                <input type="text" name="AtUsername" id="AtUsername"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required pattern=".*@.+">
            </div>
            <div class="mb-4">
                <label for="birthdate" class="block text-gray-700">Birthdate</label>
                <input type="date" name="birthdate" id="birthdate"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
            </div>
            <div class="mb-4">
                <label for="city" class="block text-gray-700">City</label>
                <input type="text" name="city" id="city"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
            </div>
            <div class="mb-4">
                <label for="mail" class="block text-gray-700">Email</label>
                <input type="email" name="mail" id="mail"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    autocomplete="on" minlength="3" required>
            </div>
            <div>
                <input type="submit" value="Subscribe"
                    class="w-full bg-black text-white py-2 px-4 rounded hover:bg-sky-900 cursor-pointer">
            </div>
        </form>
        <div>
            <a href="index.php" type="reset" class="w-max p-3 -ml-3">
                <span class="text-sm tracking-wide text-blue-600">Log in</span>
            </a>
        </div>
    </div>

</body>

</html>