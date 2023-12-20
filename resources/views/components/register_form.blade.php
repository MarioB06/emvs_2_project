<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deine App - Registrierung</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<style>
    body {
        margin: 0;
        padding: 0;
    }

    .register-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(to right, #050b1a 0%, #1a202c 50%, #050b1a 100%);
    }

    .register-box {
        width: 100%;
        max-width: 400px;
        background-color: #26194F;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .register-box h1 {
        font-size: 2xl;
        font-weight: bold;
        color: white;
        margin-bottom: 1rem;
    }

    .register-box label {
        display: block;
        font-size: sm;
        font-medium;
        color: white;
        margin-bottom: 0.5rem;
    }

    .register-box input {
        width: 100%;
        padding: 0.5rem;
        border: 1px solid #a0aec0;
        border-radius: 5px;
        margin-bottom: 1rem;
        color: white;
        background-color: black;
    }

    .register-box button {
        width: 100%;
        background-color: #050b1a; /* Hintergrundfarbe für Button auf Schwarz geändert */
        color: white;
        padding: 0.75rem;
        border: 1px solid #050b1a; /* Randfarbe für Button auf Schwarz geändert */
        border-radius: 5px;
        cursor: pointer;
    }

    .register-box button:hover {
        background-color: black; /* Hintergrundfarbe für Hover auf Schwarz geändert */
        color: white;
    }

    .login-link {
        color: #a0aec0; /* Schriftfarbe für Link auf grau geändert */
        text-decoration: underline;
        display: block;
        margin-top: 1rem;
    }

    .login-link:hover {
        color: white; /* Schriftfarbe für Hover auf Weiß geändert */
    }
</style>

<body>

    <div class="register-container">
        <div class="register-box">
            <h1>Registrierung</h1>

            <form action="{{ url('register') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name">Name</label>
                    <input type="text" name="username" id="name" class="mt-1">
                </div>

                <div class="mb-4">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" id="email" class="mt-1">
                </div>

                <div class="mb-4">
                    <label for="password">Passwort</label>
                    <input type="password" name="password" id="password" class="mt-1">
                </div>

                <div class="mb-6">
                    <button type="submit">Registrieren</button>
                </div>
            </form>

            <a href="{{ url('login') }}" class="login-link">Bereits einen Account? Jetzt einloggen!</a>
        </div>
    </div>

</body>

</html>
