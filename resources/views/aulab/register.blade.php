<form action="{{ route('register') }}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="password" name="password_confirmation">
    <button type="submit">Registrati</button>
</form>
