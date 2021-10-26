<?php

echo "Parte de PHP";



//$a =10;
//$b = 3;
//$c= "Hola Guapo";
//echo "<br>", "2º ejercicio <br>";
//echo $a, "<br>", $b, "<br>", $c;
//echo "<br>";
//echo "<br>", "3º ejercicio <br>";
//
//$d = 8;
//$e =3;
//echo  $d +$e, "<br>";
//echo  $d -$e, "<br>";
//echo  $d *$e, "<br>";
//echo  $d /$e, "<br>";
//$d++;
//echo  $d, "<br>";
//$e--;
//echo  $e, "<br>";
//
//if ($a > $b) {
//    echo "hola";
//}
//if ($a = $b){
//    echo "ja no";
//}
//if ($e === $b){
//    echo "jaja q te paso";
//}
//if ($a != $b){
//    echo "ojo";
//}
//echo "<br>";
//$hecho = rand(1,3);
//
//echo "<br>","swich";
//echo "<br>";
//echo $hecho;
//
//switch ($hecho){
//    case 1:
//        echo "<br>","hola";
//        break;
//    case 2:
//        echo "<br>","jajajajajaj caiste";
//        break;
//    case 3:
//        echo "<br>", "Que paso??";
//        break;
//}



"</table>";

echo "<br>", "Tablas de multiplicar", "<br>";
$numero = 1;
echo "--------------------";
echo "<table border='1'>";

for ($j = 1; $j<=10; $j++){
    echo "<td colspan='10' align='center' bgcolor='aqua'>tabla del $j</td>";
    echo "<tr>";
    for ($k = 1; $k <=10; $k++) {

        $numero = $k * $j;
        echo "<td>". $k ."</td> <td>* </td> <td>" .$j ."</td> <td>  = </td> <td>" .$numero ."</td></tr>";

    }
}
"</table>";
?>
