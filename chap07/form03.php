<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 태그</title>
</head>
<body>
    <h3>회원가입</h3>
    <form action="#" name="member" method="POST">
        <p>아이디 : <input type="text" name="id"> <input type="button" value="아이디 중복검사"></p>
        <p>비밀번호 : <input type="password" name="passwd"></p>
        <p>이름 : <input type="text" name="name"></p>
        <p>연락처 : 
            <select name="phone1" id="">
                <option value="010">010</option>
                <option value="011">011</option>
                <option value="016">016</option>
                <option value="017">017</option>
                <option value="019">019</option>
            </select>
            <input type="text" name="phone2" size="4" maxLength="4">
            <input type="text" name="phone3" size="4" maxLength="4">
        </p>
        <p>성별 : 
            <input type="radio" name="sex" value="남성" checked> 남성
            <input type="radio" name="sex" value="여성"> 여성
        </p>
        <p>취미 : 
            <input type="checkbox" name="hobby1" value="독서" checked> 독서
            <input type="checkbox" name="hobby2" value="운동"> 운동
            <input type="checkbox" name="hobby3" value="영화"> 영화
        </p>
        <p>
            <textarea name="comment" cols="30" row="3" placeholder="가입인사를 입력해주세요."></textarea>
        </p>
        <p>
            <input type="submit" value="가입하기">
            <input type="reset" value="다시쓰기">
        </p>
    </form>
</body>
</html>