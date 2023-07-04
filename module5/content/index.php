<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>J2F1BELP5L2 - Content uit je database</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->
<?php 
include 'includes/header.php';

//<!-- Haal hier uit de URL welke pagina uit het menu is opgevraagd. Gebruik deze om de content uit de database te halen. -->
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databank_php";

// for($x = 0; $x<=2; $x++){
// 	$id = $x;
// 	$query = "SELECT * FROM name WHERE id = $id";
// }

try {
	$conn = new PDO("mysql:host=$servername;dbname=databank_php", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";
} catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}

$id = 1;
echo $id;
$query = "SELECT * FROM `onderwerpen` WHERE id = :id";
$stmt = $conn ->prepare($query);
$stmt->bindParam(":id", $id);
try{$stmt->execute();
} catch (PDOException $e) {
	echo "fout bij het uitvoeren van een query". $e->getMessage();
}

if ($stmt->execute()) {
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $naam = $result['naam'];
        echo "Naam: " . $naam;
    } else {
        echo "Geen resultaten gevonden.";
    }
} else {
    echo "Fout bij het uitvoeren van de query.";
}

// $conn = null;
// if(isset($_GET['subject'])){
//   $onderwerp = $_GET['subject'];
// }
//<!-- Laat hier de content die je op hebt gehaald uit de database zien op de pagina. -->

//<!-- laad hier via php je footer in (vanuit je includes map)-->
echo"<p></p>";
require 'includes/footer.php';
echo " $naam ";
echo "$datum";


?>
</body>
</html>
