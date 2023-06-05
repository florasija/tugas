<!DOCTYPE html>
<html>
<head>
    <title>Create Doctor Account</title>
</head>
<body>
    <h1>Create Doctor Account</h1>
    <form method="POST" action="save_user_account.php">
        <label for="username">Name:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Create Account">
    </form>
</body>
</html>
