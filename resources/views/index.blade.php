<form action= "{{ url('login') }}" method = "POST" >
    @csrf
    <input type="text" placeholder = "Username" name="username">
    <input type="text" placeholder = "Password" name="password">
    <button type="submit">Login</button>

</form>