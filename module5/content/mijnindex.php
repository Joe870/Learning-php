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


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databank_php";

// create connection
try {
	$conn = new PDO("mysql:host=$servername;dbname=databank_php", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";
} catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}

if (isset($_GET['onderwerp'])){
    $onderwerp = $_GET['onderwerp'];
    $id = mysqli_real_escape_string($conn, $id);
    $query = "SELECT * FROM `onderwerpen` WHERE id = :id";
    $stmt = $conn ->prepare($query);
    $stmt->bindParam(':id', $onderwerp, PDO::PARAM_INT);

    try{$stmt->execute();} 
    catch (PDOException $e) {
        echo "fout bij het uitvoeren van een query". $e->getMessage();
    }

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $naam = $result['name'];
        $tekst = $result['description'];
        $image = $result['image'];
        echo "Name: " . $naam;
        echo "Tekst: " . $tekst;
        echo "Image: " . $image;
    } else {
        echo "Geen resultaten gevonden.";
    }
} else {
    echo "geen onderwerp opgegeven.";
}

// laad hier via php je footer in (vanuit je includes map)
include 'includes/footer.php';

?>
</body>
</html>
