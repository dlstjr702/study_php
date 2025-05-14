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

        echo "c = a =>",($c = $a), "<br>";//5
        echo "b += a =>",($b += $a), "<br>";//15
        echo "b -= a =>",($b -= $a), "<br>";//10
        echo "b *= a =>",($b *= $a), "<br>";//50
        echo "b /= a =>",($b /= $a), "<br>";//10
        echo "b %= a =>",($b %= $a), "<br>";//0
        echo "b ^= a =>",($b ^= $a), "<br>";//5


    ?>
    
</body>
</html>