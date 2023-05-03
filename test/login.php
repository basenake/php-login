<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
form > div{
        border: 1px solid lightblue;
        box-shadow: 0 0 10px solid lightblue;
        width: 500px;
        margin: 150px auto;
        padding: 15px;
        border-radius: 15px;
    }
    div{
        display: block;
    }
    .input{
        margin: 10px;
    }
    .input input{
        border: 0;
        border-bottom: 1px solid blue;
    }
    input[type='submit']{
        border: 0;
        background-color: blanchedalmond;
        padding:  5px 15px;
    }
    input[type='submit']{
        cursor: pointer;
        background-color: lightgray;
        color: red;
    }
    h1{margin: 1px auto;}
    </style>
</head>
<body>
<h1>會員登入</h1>
<form action="check.php" method="post">
<div>
    <div class="input">
        <label for="">帳號</label><input type="text" name="acc" id="acc">
    </div>
    <div class="input">
        <label for="">密碼</label><input type="text" name="pw" id="pw">
    </div>
    <div><input type="submit" value="登入"></div>
</div>
</form>
</body>
</html>