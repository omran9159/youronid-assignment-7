<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expense tracker";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Failed to connect to the database: " . $conn->connect_error);}

$sql = "SELECT AVG(rating) AS average FROM reviews";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $average_rating = $row["average"];
    echo "average ratings: " . round($average_rating, 2);}
     else {
        echo "There are no ratings yet.";}

$conn->close();
?>
