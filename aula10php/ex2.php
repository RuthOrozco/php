<?php
// crie um array com 10 números e informe a média dos números// digitados



$numero = array(100,90,8,7,6,5,4,3,2,1);

$soma = 0;
//$quantidades = 10;
$contador = 0;

foreach($numero as $n){
    $soma =+ $n;
    //$soma = $soma + $n;
    //$contador = $ contador + 1;
    echo $n."<br/>";
    $contador = $contador + 1;
}
echo"<br/> soma:".$soma;
//echo" <r/>média:".soma/$quantidade;
echo"<br/> contador>".$contador;
echo"<br/>média>".$soma/$contador;

?>


