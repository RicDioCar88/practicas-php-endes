<?php
$num = $_GET['num'];
$res = 0;

for ($i=1;$i<12;$i++){
    $res= $i * $num;
    echo "$num x $i = $res <br>";
    
}
?>