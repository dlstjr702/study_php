<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>연산자</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 10;

        echo "a>b =>",($a>$b),"<br>";
        echo "!(a>b) =>",!($a>$b),"<br>";
        echo "(a == b) && (a == 5) =>",(($a==$b) && ($a == 5)),"<br>";
        echo "(a != b) && (a == 5) =>",(($a!=$b) && ($a == 5)),"<br>";
        echo "!((a != b) && (a == 5)) =>",(!(($a!=$b) && ($a == 5))),"<br>";
    ?>
</body>
</html>