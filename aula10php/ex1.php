<?php
    $carro = array("gol","fox","corola","civic");
    var_dump($carro);
    echo"<br/>========== <br/>";
    $carros1[]="gol";
    $carros1[]="hilux";
    $carros1[]="corola";
    $carros1[]="porche";
    $carros1[]="brasilia";
    var_dump($carros1);

    echo "<br/>========== <br/>";
    echo "eu tenho um" .$carros1[0];
    
    
    echo "<br/>========== <br/>";
    echo "eu tenho um" .$carro[0];

    foreach($carro as $car){
        // impreso todo o conteudo do vetor
        echo $car."<br/>";
    }
    
    
    ?>