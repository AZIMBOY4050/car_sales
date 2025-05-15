<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style/register.css" />
</head>

<body>

  <div class="form-wrapper register-form">
    <h2>Register</h2>
    <form method="post" action="save.php">
      <label for="username">User Name :</label>
      <input type="text" name="username" id="username" placeholder="Enter Username" required />

      <label for="password">Password :</label>
      <input type="password" name="password" id="password" placeholder="Enter password" required />

      <label for="add">Address :</label>
      <input type="text" name="add" id="add" placeholder="Enter Address" required />

      <label for="tp">Telephone :</label>
      <input type="tel" name="tp" id="tp" placeholder="Enter Telephone" required />

      <label for="email">Email :</label>
      <input type="email" name="email" id="email" placeholder="Enter Email" required />

      <button type="submit">Register</button>
    </form>
    <p class="login-link">
      Already have an account? <a href="index.php">Login here</a>
    </p>
  </div>


</body>

</html>