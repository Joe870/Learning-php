<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <ul>
        <li>er heerst paniek</li>
        <li>onkunde</li>
    </ul>
    <?php
        $vaardigheid = $persoonsnaam = $object = $goedeeigenschap = $slechteeigenschap = $gebeurtenis "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $vaardigheid = test_input($_POST["vaardigheid"]);
            $persoonsnaam = test_input($_POST["persoonsnaam"]);
            $object = test_input($_POST["object"]);
            $goedeigenschap = test_input($_POST["goedeeigenschap"]);
            $slechteeigenschap = test_input($_POST["slechteeigenschap"]);
            $gebeurtenis = test_input($_POST["gebeurtenis"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    Wat wou je graag willen kunnen? <input type="text" name="vaardigheid">
    <br><br>
    Met welke persoon kun je goed opschieten? <input type="text" name="persoonsnaam">
    <br><br>
    Wat is je favoriete getal?<input type="text" name="getal">
    <br><br>
    Wat heb je altijd bij je als je op vakantie gaat?<input type="text" name="object">
    <br><br>
    Wat is je beste persoonlijke eigenschap? <input type="text" name="goedeeigenschap">
    <br><br>
    Wat is je slechtste persoonlijke eigenschap? <input type="text" name="slechteeigenschap">
    <br><br>
    Wat is het ergste dat je kan overkomen? <input type="text" name="gebeurtenis">
    <br><br>
    <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>