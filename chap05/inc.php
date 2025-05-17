<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include와 require</title>
</head>
<body>
    <?php
        include "second.php";
        echo "--------현재 페이지 영역 ----------<br>";
        include "second.php"
    ?>
</body>
</html>