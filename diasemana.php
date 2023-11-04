<h1>
<?php
$num = $_GET['num'];

switch($num){
    case 1:{
        echo "Lunes!";
        break;
    }
    case 2:{
        echo "Martes!";
        break;
    }
    case 3:{
        echo "Miércoles!";
        break;
    }
    case 4:{
        echo "Jueves!";
        break;
    }
    case 5:{
        echo "Viernes!";
        break;
    }
    case 6:{
        echo "Sábado!";
        break;
    }
    case 7:{
        echo "Domingo!";
        break;
    }
    default:{
        echo " <b>Numero ingresado incorrecto!</b> ";
        break;
    }
}
?>
</h1>