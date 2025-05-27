<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Shop - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
</head>
<body>

<div class="form-wrapper">
    <h2>Login</h2>
    <form method="post" action="log.php">
        <label for="username">Username</label>
        <input id="username" type="text" name="username" placeholder="Enter your username" required>

        <label for="password">Password</label>
        <input id="password" type="password" name="password" placeholder="Enter your password" required>

        <button type="submit">Login</button>
    </form>

    <p class="register-link">
        Not registered yet? <a href="register.php">Click here</a>
    </p> 
 
</div>

</body>
</html>
