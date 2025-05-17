<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사용자 정의 함수</title>
</head>
<body>
    <?php 
        function calculateMethod($x,$y){
            echo 2 * $x * $y;
        }

        $radius = 4;
        $pi = 3.14;
        echo "원의 둘레 구하는 공식 : 2 x 반지름 x 원주율 <br>";
        echo "2 x ".$radius."x".$pi."=";
        calculateMethod($radius,$pi);
    ?>
</body>
</html>