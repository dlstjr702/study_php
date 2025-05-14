<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>반복문</title>
</head>
<body>
    <?php
        $sum = 0;
        for($i = 0;$i<=10; $i++)
            $sum+=$i;
        echo "1부터 10까지의 합계 : " , $sum; 
    ?>
</body>
</html>