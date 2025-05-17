<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get & Post</title>
</head>
<body>
    <?php
        if(isset($_REQUEST["id"]) && isset($_REQUEST["passwd"])){
            echo "<p> 아이디 : ".$_REQUEST["id"]."</p><br>";
            echo "<p> 비밀번호 : ".$_REQUEST["passwd"]."</p><br>";
        }
    ?>


    <form action="" method="POST">
        <p>아이디 : <input type="text" name="id"></p>
        <p>비밀번호 : <input type="text" name="passwd"></p>
        <p><input type="submit" value="로그인"></p>
    </form>
    
</body>
</html>