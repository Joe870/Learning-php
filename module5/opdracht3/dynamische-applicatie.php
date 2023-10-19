<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title> BE503 - dynamische applicatie</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "characters.sql";

// create connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// mysql ordenen op alfebetische volgorde van de namen met asc
// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

for($x=1; $x<11; $x++){
    $id = $x;  
    $id = mysqli_real_escape_string($conn, $id);
    $sql = "SELECT * FROM characters ORDER BY name asc";
    $imagetype = "SELECT avatar FROM characters";
    $imagedata = $row['avatar'];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='wrapper'>";
            echo "<img src='data:{$imagetype} alt='image description'>";
            echo "<div class='text'>";
            echo "<p>naam: {$row['name']}</p>";
            echo "<p>health: {$row['health']}</p>";
            echo "<p>attack: {$row['attack']}</p>";
            echo "<p>defense: {$row['defense']}</p>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "Geen resultaten gevonden voor ID $id";
    }

}
