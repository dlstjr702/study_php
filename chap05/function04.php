<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사용자 정의함수</title>
</head>
<body>
    <?php
        function swap(&$param1,&$param2){
            $temp = $param1;
            $param1 = $param2;
            $param2 = $temp;
        }

        $num1 =3;
        $num2 =4;
        echo "swap() 함수 호출 전 숫자 : ".$num1.",".$num2;
        echo "<br>";


        swap($num1,$num2);
        echo "swap() 함수 호출 후 숫자 : ".$num1.",".$num2;
    ?>
</body>
</html>