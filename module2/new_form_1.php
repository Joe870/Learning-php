<?php

        $nameErr = $emailErr = "";
        $name = $email = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (empty($_POST["name"])){
                $nameErr = "naam is vereist";
            } else {
                $name = test_input($_POST["name"]);
            }
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

    
    <h1> jouw gegevens invullen </h1>
    <p><span class="error">* verplicht field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    Name: <input type="text" name="name">
    <span class="error">*<?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">*<?php echo $emailErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
    </form>

    <?php 
        echo "<h2>jouw ingevulde gegevens:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
    ?>

</body>
</html>