<?php
include_once('comn.php');
$here='front';
// 如果有分類 須加上 路徑../ 出去外層及 連接外層的資料
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <link rel="stylesheet" href="style.css">
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
    <?php include("header.php");?>
    <?php
    if(isset($_SESSION['login'])){
        echo "登入成功";
        echo "歡迎";
        echo $_SESSION['login']; 
        echo "<a href='logout.php'>登出</a> ";
    }else{
        
    }
    ?>
<h1>會員登入</h1>
<form action="check.php" method="post">
    <div>
        <div style='color:red'>
            <?php
                if(isset($_SESSION['error'])){
                    echo "帳號或密碼錯誤";
                }else{
                }
            ?>
        </div>
        <div class="input">
            <label for="">帳號</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div class="input">
            <label for="">密碼</label>
            <input type="text" name="pw" id="pw">
        </div>
        <div>
            <input type="submit" value="登入">
        </div>
    </div>
</form>
</body>
</html>