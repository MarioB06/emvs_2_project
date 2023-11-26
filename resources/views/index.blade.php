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

</form>

<br>
<a href="/register">Register</a>
