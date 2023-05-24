<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="madlibs.css">
</head>
<body>
<body>
    <nav>
        <ul>
            <li><a href="paniek.php" id="form">paniek</a></li>
            <li><a href="onkunde.php" id="form">onkunde</a></li>
        </ul>
    </nav>
    <?php
        $vaardigheid = $persoonsnaam = $object = $goedeeigenschap = $slechteeigenschap = $gebeurtenis = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $huisdier = test_input($_POST["huisdier"]);
            $persoon= test_input($_POST["persoon"]);
            $land = test_input($_POST["land"]);
            $verveling = test_input($_POST["verveling"]);
            $speelgoed = test_input($_POST["speelgoed"]);
            $docent = test_input($_POST["docent"]);
            $geld = test_input($_POST["geld"]);
            $bezigheid = test_input($_POST["bezigheid"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    
    <form method="post" action="paniek2.php">
    Welk dier zou je nooit als huisdier willen hebben?<input type="text" name="huisdier">
    <br><br>
    Wie is de belangrijkste persoon in je leven?<input type="text" name="persoon">
    <br><br>
    In welk land zou je graag willen wonen?<input type="text" name="land">
    <br><br>
    Wat doe je als je je verveelt?<input type="text" name="verveling">
    <br><br>
    Met welk speelgoud speelde je als kind het meest?<input type="text" name="speelgoed">
    <br><br>
    Bij welke docent spijbel je het liefst?<input type="text" name="docent">
    <br><br>
    Als je € 100.000,- had, wat zou je dan kopen?<input type="text" name="geld">
    <br><br>
    Wat is je favoriete bezigheid?<input type="text" name="bezigheid">
    <br><br>
    <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>