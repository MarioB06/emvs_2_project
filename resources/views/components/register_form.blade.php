<div class="container mx-auto p-4">
        <div class="bg-white max-w-md mx-auto p-8 rounded-md shadow-md">
            <h1 class="text-2xl font-bold mb-4">Registrierung</h1>

            <form action="{{ url('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                    <input type="text" name="username" id="name" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">E-Mail</label>
                    <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">Passwort</label>
                    <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-6">
                    <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-700">Registrieren</button>
                </div>
            </form>
        </div>
    </div>