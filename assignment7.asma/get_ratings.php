<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expense tracker";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Failed to connect to the database: " . $conn->connect_error);}


$sql = "SELECT * FROM reviews";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["rating"] . "</td>";
        echo "<td>" . $row["comment"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>There are no ratings yet. </td></tr>";}

$conn->close();
?>
