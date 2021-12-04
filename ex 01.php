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
        seculoAno(1800);
    ?>
</body>
</html>

<?php
    function seculoAno($ano)
    {   
        $seculo = intdiv($ano, 100);
        if($ano%100 !== 0){
            $seculo++;
        }
        return $seculo;
    }
?>