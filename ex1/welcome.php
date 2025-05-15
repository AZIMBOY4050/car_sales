<!DOCTYPE html>
<html>
<head>
    <title>Online Shop - Welcome</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./style/welcome.css" />
</head>
<body>
    <div class="container">

        <?php
        $userID = $_GET["userID"];
        $username = "root";
        $password = "";
        $hostname = "localhost";
        $db = "ex";

        $conn = mysqli_connect($hostname, $username, $password, $db)
            or die("Unable to connect to MySQL");

        $result = mysqli_query($conn, "SELECT * FROM items");
        ?>

        <h1>Welcome to the Online Shop</h1>
        <h4>Let's start shopping.</h4>

        <div class="items-grid">
            <?php while ($row = mysqli_fetch_array($result)) : ?>
                <div class="item-card">
                    <h3><?php echo htmlspecialchars($row["name"]); ?></h3>
                    <img src="<?php echo htmlspecialchars($row["image_url"]); ?>" alt="<?php echo htmlspecialchars($row["name"]); ?>" />
                    <a href="item.php?id=<?php echo $row["id"]; ?>&userID=<?php echo $userID; ?>" class="details-link">View More Details</a>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
</body>
</html>
