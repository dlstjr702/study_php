<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열</title>
</head>
<body>
    <?php 
        $colors[0] = "red";
        $colors[1] = "blue";
        $colors[2] = "green";


        for($i=0; $i<3; $i++){
            echo "colors[ $i ] : $colors[$i] <br>";
            echo "<font color='$colors[$i]'>Hello PHP!</font><br>";
        }
    ?>
</body>
</html>