<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expense tracker";

$rating = $_POST["rating"];
$comment = $_POST["comment"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Failed to connect to the database: " . $conn->connect_error);}

$sql = "INSERT INTO reviews (rating, comment) VALUES ($rating, '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Review saved successfully!";} 
    else {

        echo "An error occurred while saving the assessment: " . $conn->error;}

$conn->close();
?>
