<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>분기문</title>
</head>
<body>
    <?php
        for($i =1; $i<=10; $i++){
            echo "숫자 $i <br>";
            if($i==5){
                break;
            }
        }
    ?>
</body>
</html>