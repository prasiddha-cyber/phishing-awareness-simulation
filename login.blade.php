<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Account Verification</h2>

<form method="POST">
    @csrf

    <label>Email:</label><br>
    <input type="email" name="email" placeholder="Enter Email" required>
    <br><br>

    <label>Password:</label><br>
    <input type="password" name="password" placeholder="Enter Password" required>
    <br><br>

    <button type="submit">Login</button>

</form>

</body>
</html>
