<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo(primoInferior(30));
    ?>
</body>
</html>

<?php
    function primoInferior($num)
    {   
        $contDiv = 0;
        $primo = 2;
        
        for ($i=$num; $i > 0; $i--) { 
            for ($x=1; $x < $num; $x++) { 
                if($i%$x == 0){
                    $contDiv++;
                }
            }
            if($contDiv == 2){
                return $i;
            }
            else{
                $contDiv = 0;
            }
        }
    }
?>