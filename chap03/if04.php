<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>조건문</title>
</head>
<body>
    <?php
        $x = 50;
        $y = 10;
        $z = 60;

        echo "3개 숫자 : $x, $y, $z <br>";


        if($x>$y){
            if($x >$x){
                echo "{$x}은[는] 가장 큰 수입니다.";
            }else{
                echo "{$x}은[는] 가장 큰 수가 아닙니다.";
            }
        }else{
            echo "{$x}은[는] 가장 큰 수가 아닙니다.";
        }

    ?>
</body>
</html>