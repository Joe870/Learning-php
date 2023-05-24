<?php 
$images = array('morning.png','afternoon.png','night.png','evening.png');
$time = getdate();
if ($time["hours"] >=6 and $time["hours"] <=12){
    $image = $images[0];
    echo"<h1>"."goede"." morgen"."</h1>";
    echo"<p>"."het"." is". " nu ". $time['hours'].":".$time['minutes'];
}
elseif ($time["hours"] >=12 and $time["hours"] <=18){
    $image = $images[1];
    echo"<h1>"."goede"." middag"."</h1>";
    echo"<p>"."het"." is". " nu". $time['hours'].":".$time['minutes'];
}
elseif ($time["hours"] >=18 and $time["hours"] <= 24){
    $image = $images[2];
    echo"<h1>"."goede"." avond"."</h1>";
    echo"<p>"."het"." is". " nu". $time['hours'].":".$time['minutes'];
}
else{
    $image = $images[3];
    echo"<h1>"."goede"." avond"."</h1>";
    echo"<p>"."het"." is". " nu". $time['hours'].":".$time['minutes'];
}
?>
<div class = "container" id="indx-jumbo"
style=" background: url('<?php echo $image ?>') no-repeat center center;">
</div>

<style>
    div{
        height:100%;
        width:100%;
    }
</style>
    