
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deine App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss-gradients@2.1.2/dist/tailwindcss-gradients.css" rel="stylesheet">
</head>
<body class="font-sans bg-gradient-to-r from-teal-500 via-blue-500 to-indigo-500 min-h-screen flex items-center justify-center">

    <div class="relative w-full h-full flex justify-end pr-64">
        <div class="bg-white p-8 rounded-md shadow-md text-gray-800 relative z-10 max-w-md w-full">
            <h1 class="text-3xl font-bold mb-4">Willkommen zurück!</h1>

            <form action="{{ url('login') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium">E-Mail</label>
                    <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium">Passwort</label>
                    <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-6">
                    <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">Login</button>
                </div>
            </form>

            <a href="{{ url('register') }}" class="text-sm text-blue-500 hover:underline">Noch keinen Account? Jetzt registrieren!</a>
        </div>

        <div class="absolute top-0 right-0 h-full bg-gray-500 bg-opacity-40 w-32 z-0" style="clip-path: polygon(100% 0%, 100% 100%, 0% 100%, 0% 0%);"></div>
    </div>

</body>
</html>
