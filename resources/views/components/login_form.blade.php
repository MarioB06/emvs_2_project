<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deine App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss-gradients@2.1.2/dist/tailwindcss-gradients.css" rel="stylesheet">
</head>

<style>
    .login-container {
        position: relative;
        z-index: 1;
    }

    .login-background {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        width: 50%;
        background: linear-gradient(to right, #1a202c 0%, #2d3748 25%, #4a5568 50%, #2d3748 75%, #1a202c 100%);
        z-index: -1;
    }

    .welcome-content {
        position: absolute;
        left: 0;
        top: 0;
        width: 50%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        padding: 0 3rem;
    }

    .welcome-content h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .welcome-content p {
        font-size: 1.2rem;
        text-align: center;
        margin-bottom: 2rem;
    }

    .welcome-content img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 2rem;
    }

    .welcome-content a {
        text-decoration: underline;
        color: #fff;
        font-weight: bold;
        transition: color 0.3s ease-in-out;
    }

    .welcome-content a:hover {
        color: #4f93ff;
    }

    .login-box {
        position: absolute;
        top: 50%;
        right: 10%;
        transform: translateY(-50%);
    }
</style>

<body class="font-sans bg-gradient-to-r from-teal-500 via-blue-500 to-indigo-500 min-h-screen flex items-center justify-center relative">

    <!-- Das Hintergrundoverlay -->
    <div class="login-background"></div>

    <div class="relative w-full h-full flex justify-end pr-8 pl-8 login-container">
        <div class="mx-auto bg-gray-800 bg-opacity-90 p-8 rounded-md shadow-md text-gray-200 relative z-10 max-w-md w-full">
            <h1 class="text-3xl font-bold mb-4 text-blue-300">Willkommen zurück!</h1>

            <form action="{{ url('login') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-300">Username</label>
                    <input type="text" name="username" id="email" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-300">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-300">Passwort</label>
                    <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-300">
                </div>

                <div class="mb-6">
                    <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue transition-all duration-300">Login</button>
                </div>
            </form>

            <div class="flex items-center justify-between">
                <a href="{{ url('register') }}" class="text-sm text-blue-300 hover:underline">Noch keinen Account? Jetzt registrieren!</a>
                <a href="#" class="text-sm text-gray-400 hover:underline">Passwort vergessen?</a>
            </div>
        </div>
    </div>

    <!-- Willkommensseite -->
    <div class="welcome-content">
        <h1>Willkommen bei Deiner App!</h1>
        <p>Erlebe eine Welt voller Innovation und Benutzerfreundlichkeit. Melde dich an und tauche ein!</p>
        <img src="" alt="Willkommensbild" class="rounded-md">
        <a href="{{ url('register') }}" class="text-blue-300 hover:text-blue-400">Jetzt registrieren</a>
    </div>

    <!-- Login-Box -->
    <div class="login-box">
        <!-- Hier können zusätzliche Elemente für die Login-Box platziert werden -->
    </div>

</body>
</html>
