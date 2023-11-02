<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title> character pagina </title>
    <link rel="stylesheet" href="stijl2.css">
</head>

<body>

    <div class="container">
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

        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM characters WHERE id = $id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if ($result->num_rows > 0){
            $id = $row['id'];
            $imagetype = $row['avatar'];
            $health = $row['health'];
            $attack = $row['attack'];
            $defense = $row['defense'];
            $color = $row['color'];
            $text = $row['bio'];
            $weapon = $row['weapon'];
            $armor = $row['armor'];
            $naam = $row['name'];
            echo "<div class='wrapper'>";
            echo "<p id='naam'>{$row['name']}</p>";
            echo "<img src='images/$imagetype' id='image' alt='image description'>";
            echo "<p id=alinea>$text</p>";
            echo "<div class='text' style='background-color: $color;'>";
            echo "<p>weapon:$weapon</p>";
            echo "<p>armor:$armor</p>";
            echo "<p>health: {$row['health']}</p>";
            echo "<p>attack: {$row['attack']}</p>";
            echo "<p>defense: {$row['defense']}</p>";
            echo "<div id=button><a href='dynamische-applicatie.php'>bekijk</a></div>";
            echo "</div>";
            echo "</div>";
            } else {
                echo "Geen resultaten gevonden voor ID $id";
            }
        } else {
            echo "Geen ID opgegeven";
        }
        include 'footer.php';
        ?> 
    </div>
</body>    
