<!DOCTYPE html>

<html>

<head>
    <title>Online Shop - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = $_POST['username'];
        $pass = $_POST['password'];
    }


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ex";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT username,password FROM login";
    $result = $conn->query($sql);

    static $x = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["username"] == $user && $row["password"] == $pass) {
                $x++;
                $userID = $row["username"];
            } else {
                echo "try again Bro";
            }
        }
        if ($x > 0) {
            echo 'Welcome to the DeepWeb';
            header('location:welcome.php?userID=' . $userID . '');
        } else {
            echo "try again Bro";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

</body>

</html>