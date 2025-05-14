<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>반복문</title>
</head>
<body>
    <?php

        $i=1;
        while($i<=10){
            if($i % 2 ==0){
                echo $i,"는 짝수입니다.<br>";
            }
            else{
                echo $i,"는 홀수입니다.<br>";
            }
            $i++;
        }

    ?>
</body>
</html>