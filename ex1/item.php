<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style/item.css" />
</head>

<body>

    <?php

    $id = $_GET["id"];
    $userID = $_GET["userID"];

    $username = "root";
    $password = "";
    $hostname = "localhost";
    $db = "ex";

    $conn = mysqli_connect($hostname, $username, $password, $db)
        or die("Unable to connect to MySQL");

    $sql = "SELECT * FROM items where id=" . $id;
    ?>

    <div class="card-container">
        <table class="table">
            <?php
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    $uPrice = $row["unit_price"];

                    echo "<tr>";
                    echo "<td><h3> " . $row["name"] . "</h3></td><td><h4>  Price: " . $uPrice . "</h4></td><br>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td> <center><img src=\"" . $row["image_url"] . "\" height=\"50%\" width=\"70%\"></img></center></td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>
    </div>

    <form class="form-horizontal" method="post" action="curt.php?id=<?php echo $id ?>&userID=<?php echo $userID ?>">
        <div class="form-group">
            <label class="control-label col-sm-2" for="user"> Unit Price :</label>
            <div class="col-sm-10">
                <input name="price" type="text" value="<?php echo $uPrice ?>" readonly="readonly" class="form-control"
                    id="user" readonly="readonly">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="add"> Quantity :</label>
            <div class="col-sm-10">
                <input type="text" name="qty" class="form-control" id="user" placeholder="Enter Quantity"
                    required="Enter Quantity">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Add to Cart</button>
            </div>
        </div>
    </form>
</body>

</html>