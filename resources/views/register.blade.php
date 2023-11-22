<form method="POST" action="{{ url('register') }}">
@csrf
<input type="text" name="username" placeholder="username">
<input type="text" name="email" placeholder="email">
<input type="text" name="password" placeholder="password">
<button type="submit">Register</button>

</form>
