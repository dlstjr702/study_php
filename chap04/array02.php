<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열</title>
</head>
<body>
    <?php
        // $gradeArr["홍길동"] =79;
        // $gradeArr["홍길순"] =90;
        // $gradeArr["수여인"] =70;

        $gradeArr = ["홍길동"=>79,"홍길순"=>90,"수여인"=>70];

        $sum = 0;
        foreach($gradeArr as $name=> $grade){
            $sum += $grade;
            echo "이름 : ", $name , " , 점수 :",$grade;
            echo "<br>";
        }

        echo "합계:",$sum, "<br>" ;
        echo "평균:",$sum/3, "<br>";

    ?>
    
</body>
</html>