<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>J2F1BELP5L2 - Content uit je database</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- laad hier via php je header in (vanuit je includes map) -->
<div class="container">
<?php 
include 'includes/header.php';


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databank_php";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}

// check if a URL parameter exists
if(isset($_GET['onderwerp'])) {
    // URL parameter exists, retrieve the value 
    $id = $_GET['onderwerp']; 

    // sanitize and validate the input 
    $id = mysqli_real_escape_string($conn, $id);

    // fetch data from MySQL based on the URL parameter
    $sql = "SELECT * From onderwerpen WHERE id = '$id'"; 
    $result = $conn->query($sql);
    
    // check if the query was successful 
    if ($result && $result-> num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            // access the data using $row['column_name']
            $imageData = $row['image'];
            $imageType = $row['Type']; 
            echo "<div class='wrapper'>";
            echo "<img src='data:{$imageType};base64," . base64_encode($imageData) . "' alt='image description'>";
            echo "<div class='text'>";
            echo "<h1>{$row['name']}</h1>";
            echo "<p>{$row['description']}</p>";
            echo "</div>";
            echo "</div>";

                // "<div class='wrapper'>
                //     <img src='{$row['image']}' alt=Image description>
                //     <div class='text'>
                //         <h1>{$row['name']}</h1>
                //         <p>{$row['description']}</p>
                //     </div>
                // </div>";
        }
    } else {
        echo "No data found.";
    }
} else {
    // No URL parameter, handle homepage logic here
    echo "Welcome to the homepage!";
}

?>
</div>

<?php 
// laad hier via php je footer 
include "includes/footer.php";
?>
</body>
</html> 