<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<form action= "{{ url('login') }}" method = "POST" >
    @csrf
    
    <div>
    <label for="username">Username:</label>
    <input type="text" placeholder = "Username" name="username">
    </div>


    <div>
    <label for="password">Password:</label>
    <input type="text" placeholder = "Password" name="password" required>
    </div>

    <button type="submit">Login</button>
</body>
</form>