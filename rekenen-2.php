<?php
$basis = 6;
for ($x = 1; $x >=10; $x++) {
    $antwoord = $basis * $x;
    echo ($basis. "*" .$x. "=" .$antwoord);
};

function tafel($nummer){
    for($x = 1; $x >=10; $x++){
        $antwoord = $nummer * $x;
        echo ($basis. "*" .$x. "=" .$antwoord)
    }
}

$cijferreeks = array(3,5,8,12)
foreach ($cijferreeks as $value) {
    $antwoord = $basis * $cijferreeks
    echo ($basis. "*" .$cijferreeks. "=" .$antwoord) 
} 
?>