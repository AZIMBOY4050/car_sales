<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
        
        $idLast=$_GET["Lastid"]; 
         $userID=$_GET["userID"]; 
        
        
$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ex";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE cart SET isActive=0 WHERE id=$idLast";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
     header('location:welcome.php?userID='.$userID.'');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
    </body>
</html>
