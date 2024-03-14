
<form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" id="first_name" required>
    <br>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" id="last_name" required>
    <br> <br>

    

    <button type="submit">Register</button>
</form>
