<h1>cookie</h1>
<?php
date_default_timezone_set("Asia/Taipei");
//設定 cookie
// 查詢網頁cookie f12  application cookie
//         姓名   使用者  使用時間到期為止
setcookie('name','wayne',time()+(60*60*24));

echo $_COOKIE['cookie'];








?>
