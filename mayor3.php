<h1>
<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

if($num1 > $num2 && $num1 > $num3){
    echo "$num1 es el numero mayor.";
}
if($num2 > $num1 && $num2>$num3){
    echo "$num2 es el numero mayor.";
}
if($num3 > $num1 && $num3 > $num2){
    echo "$num3 es el numero mayor.";
}
?>
</h1>