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
    body {
        margin: 0;
        padding: 0;
    }

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
        background: linear-gradient(to right, #050b1a 0%, #1a202c 50%, #050b1a 100%);
        z-index: -1;
    }

    .welcome-content {
        position: absolute;
        left: 0;
        top: 0;
        width: 55%; /* Breite leicht erhöht */
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        padding: 0 3rem;
        background-color: #26194F;
    }

    .welcome-content h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 1rem;
        color: #f8f8f8; /* White */
    }

    .welcome-content p {
        font-size: 1.2rem;
        text-align: center;
        margin-bottom: 2rem;
        color: #a0aec0; /* Tailwind CSS gray-300 */
    }

    .welcome-content img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 2rem;
    }

    .welcome-content a {
        text-decoration: underline;
        color: white; /* White */
        font-weight: bold;
        transition: color 0.3s ease-in-out;
    }

    .welcome-content a:hover {
        color: #2d3748; /* Tailwind CSS gray-700 */
    }

    .login-box {
        position: absolute;
        top: 50%;
        right: 7%; /* Leicht nach rechts verschoben */
        transform: translateY(-50%);
        background-color: #26194F; /* Hintergrundfarbe auf lila geändert */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Schattenfarbe auf lila geändert */
        border-radius: 10px;
        padding: 20px; /* Innenabstand hinzugefügt */
        width: 40%; /* Breite leicht verringert */
    }

    /* Korrektur für die Formularelemente */
    .login-container input {
        background-color: black;
    }

    /* Stilisierung der Willkommensseite */
    .welcome-content .features {
        display: flex;
        justify-content: space-around;
        margin-top: 2rem;
    }

    .welcome-content .feature {
        text-align: center;
        padding: 1.5rem;
        background-color: black; /* Dunkles Blau */
        border-radius: 10px;
        margin: 0.5rem;
        width: 80%;
    }

    .welcome-content .feature h2 {
        font-size: 1.5rem;
        color: #f8f8f8; /* White */
    }

    .welcome-content .feature p {
        font-size: 1rem;
        color: #a0aec0; /* Tailwind CSS gray-300 */
    }

    @media (max-width: 768px) {
        .welcome-content {
            width: 100%; /* Auf 100% Breite ändern für kleine Bildschirme */
        }

        .login-box {
            width: 80%; /* Auf 80% Breite ändern für kleine Bildschirme */
            right: 10%; /* Anpassung der rechten Position */
        }
    }
</style>

<body class="font-sans bg-gradient-to-r from-teal-500 via-blue-500 to-indigo-500 min-h-screen flex items-center justify-center relative">

    <!-- Das Hintergrundoverlay -->
    <div class="login-background"></div>

    <div class="relative w-full h-full flex justify-end pr-8 pl-8 login-container">
        <div class="mx-auto bg-gray-800 bg-opacity-90 p-8 rounded-md shadow-md text-gray-200 relative z-10 max-w-md w-full"
            style="margin-right: 10%;">
            <h1 class="text-3xl font-bold mb-4">Willkommen zurück!</h1>

            <form action="{{ url('login') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-300">Username</label>
                    <input type="text" name="username" id="email"
                        class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-gray-600">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-black-300">Passwort</label>
                    <input type="password" name="password" id="password"
                        class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-black-600">
                </div>

                <div class="mb-6">
                    <button type="submit"
                        class="w-full bg-gray-800 text-white p-3 rounded-md hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray transition-all duration-300">Login</button>
                </div>
            </form>

            <div class="flex items-center justify-between">
                <a href="{{ url('register') }}" class="text-sm text-gray-300 hover:underline">Noch keinen Account? Jetzt
                    registrieren!</a>
                <a href="#" class="text-sm text-gray-400 hover:underline">Passwort vergessen?</a>
            </div>
        </div>
    </div>

    <!-- Willkommensseite -->
    <div class="welcome-content">
        <h1>Willkommen bei (NAME)!</h1>
        <p>Erlebe ein einzigartiges Elebnis, in einer Welt, welche innovativ und Benutzerfeundlich ist. Melde dich an und
            tauch ein!</p>
        <div class="features">
            <div class="feature">
                <h2> Ranked System </h2>
                <p>Sammle XP und <br>
                    steig auf!</p>
            </div>
            <div class="feature">
                <h2>Chat</h2>
                <p>Find neue Freunde</p>
            </div>
            <div class="feature">
                <h2>eeeeeeeeee</h2>
                <p>eeeeeeeeeee</p>
            </div>
        </div>

        <a href="{{ url('register') }}" class="text-gray-300 hover:text-gray-400">Jetzt registrieren</a>
    </div>

    <!-- Login-Box -->

</body>

</html>
