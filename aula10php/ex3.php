<?php
// Guarde em um array 5 idades. exiba quantas pessoas são
// maior de idade(18anos) e quantas são menores.

$idade = array(60,17,15,35,21);

$qtmaior=0;
$qtmenor=0;
foreach ($idade as $i) {
    if ($i >= 18) {
        $qtmaior++;
    } else {
        $qtmenor++;
    }
        
    
} 
echo"<br/> total de maior de idade ".$qtmaior;
echo"<br/> total de menor de idade ".$qtmenor;   
?>
