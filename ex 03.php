<?php
    for ($i=0; $i < 20; $i++) { 
        $array[$i] = rand(0,10);
    }

    $qtdMax = 0;
    $qtd = 0;
    print_r($array);

    for ($i=0; $i < count($array); $i++) { 
        for ($x=0; $x < count($array); $x++) { 
            if($array[$i] === $array[$x]){
                $qtd++;
            }
        }
        if ($qtd > $qtdMax) {
            $qtdMax = $qtd;
            $numMax = $array[$i];
            $qtd = 0;
        }else{
            $qtd = 0;
        }
    }

    echo("<br>");
    echo("O número que mais se repetiu foi ". $numMax);
    echo("<br>");
    echo("Ele se repetiu " . $qtdMax . " vezes");
?>