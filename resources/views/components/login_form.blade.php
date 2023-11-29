<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deine App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss-gradients@2.1.2/dist/tailwindcss-gradients.css" rel="stylesheet">
</head>
<body class="font-sans bg-gradient-to-r from-teal-500 via-blue-500 to-indigo-500 min-h-screen flex items-center justify-center">

    <div class="bg-white max-w-md mx-auto p-8 rounded-md shadow-md w-full md:w-1/2 lg:w-1/3 xl:w-1/4 ml-auto">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">Login</h1>

        <form action="{{ url('login') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">E-Mail</label>
                <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Passwort</label>
                <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-6">
                <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-md hover:bg-blue-700">Login</button>
            </div>
        </form>

        <a href="{{ url('register') }}" class="text-sm text-blue-500 hover:underline">Noch keinen Account? Jetzt registrieren!</a>
    </div>

</body>
</html>

