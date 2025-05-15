<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Order Summary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style/curt.css" />

</head>

<body>

    <?php include 'header.php'; ?>

    <?php
    $id = $_GET["id"];
    $userID = $_GET["userID"];
    $price = $_POST["price"];
    $qty = $_POST["qty"];
    $amount = $price * $qty;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ex";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO cart(userid, itemid, quanity, isActive)
            VALUES ('$userID', $id, $qty, 1)";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>

    <div class="container">
        <h2>Confirm Your Order</h2>

        <form method="post" action="purchase.php?Lastid=<?php echo $last_id ?>&userID=<?php echo $userID ?>">
            <div class="form-group">
                <label>Unit Price:</label>
                <input name="price" type="text" value="<?php echo $price ?>" readonly>
            </div>

            <div class="form-group">
                <label>Quantity:</label>
                <input name="qty" type="text" value="<?php echo $qty ?>" readonly>
            </div>

            <div class="form-group">
                <label>Total Amount:</label>
                <input type="text" name="tot" value="<?php echo $amount ?>" readonly>
            </div>

            <div class="btn-wrapper">
                <button type="submit" class="btn">Purchase</button>
            </div>
        </form>
    </div>

</body>

</html>