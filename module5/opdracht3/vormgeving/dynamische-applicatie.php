<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title> BE503 - dynamische applicatie</title>
    <link rel="stylesheet" href="stijl.css">
</head>

<body>
    <div class="container">

        <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "characters.sql";

        $id = "";
        // create connection 
        $conn = new mysqli($servername, $username, $password, $dbname);

        // mysql ordenen op alfebetische volgorde van de namen met asc
        // check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $id = mysqli_real_escape_string($conn, $id);
        $sql = "SELECT * FROM characters ORDER BY name asc";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $imagetype = $row['avatar'];
                $id = $row['id'];
                $health = $row['health'];
                $attack = $row['attack'];
                $defense = $row['defense'];
                $link = "pagina2.php?id=$id";
                echo "<div class='wrapper'>";
                echo "<img src=\"images/$imagetype\" alt=\"image description\">";
                echo "<div class='text'>";
                echo "<p id='naam'>naam: {$row['name']}</p>";
                echo "<p>health: {$row['health']}</p>";
                echo "<p>attack: {$row['attack']}</p>";
                echo "<p>defense: {$row['defense']}</p>";
                echo "<div id=button><a href='pagina2.php?id=$id'>bekijk</a></div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "Geen resultaten gevonden voor ID $id";
        }
        include 'footer.php';
        ?>
    </div>

</html>

