<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문자열</title>
</head>
<body>
    <?php
        $name = "홍길순";
        echo $name;
        echo "<br>";



        $age = "20세";
        echo $age;
        echo "<br>";


        $c= "나의이름은 \"$name\"입니다.";
        $d = "나의나이는 "."\"".$age."\"" ."입니다";
        echo $c."<br>";
        echo $d."<br>";
    ?>
    
</body>
</html>