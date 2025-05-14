<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP기본구조</title>
</head>
<body>
    <?php 
        echo "<h1>Hello PHP!</h1>";
        echo "<font color='red'>Hello! Hypertext Preprocessor</font><br>";
        
        echo nl2br("Hello PHP! \n Hello! Hypertext Preprocessor");
        echo "Hello!","Hypertext","Preprocessor<br>";


        $name = "홍길순";

        echo "나의이름은",$name,"입니다.<br>";
        echo "나의 이름은 {$name}입니다.";
    ?>
</body>
</html>