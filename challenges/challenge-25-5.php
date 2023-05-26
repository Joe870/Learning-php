<?php
function lijst_optellen($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number % 2 == 0){
            $sum += $number;
        } 
    }
    return $sum;
}

$getallenLijst = [1, 2, 3, 4];

$result = lijst_optellen($getallenLijst);

echo $result; // Output: 10
echo "<br>";

function langste_woord($woorden) {
    $longest = '';
    foreach ($woorden as $woord) {
        $first_woord = $woorden[0];
        if (strlen($first_woord) > strlen($woord)){
            $longest = $first_woord;
        }
        else {
            $longest = $woord;
        }
    }
    return $longest;
}

$woordenlijst = ['kat','hond','olifant'];
$result2 = langste_woord($woordenlijst);
echo $result2;
echo "<br>";

function getal_lijst($nummers){
    $soorteren = TRUE;
    while($soorteren){
        $soorteren = FALSE;
        for($x = 0; $x < count($nummers)-1; $x++){
            if ($nummers[$x] > $nummers[$x+1]){
                $swap = $nummers[$x];
                $nummers[$x] = $nummers[$x+1];
                $nummers[$x+1]=$swap;
                $soorteren = TRUE;
            }
        }
    }
    return $nummers;
}

$getallenlijst2 = [3,1,4,2];

$result3 = getal_lijst($getallenlijst2);
$result3 = implode(" ",$result3);
echo $result3;
echo "<br>";

function gcd($getal1,$getal2){
    return $getal2 ? gcd($getal2, $getal1 % $getal2): $getal1;
}

$result4 = gcd(8,12);
echo $result4;
?>
