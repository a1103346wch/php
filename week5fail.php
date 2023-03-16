<?php ob_start();   //資料先存在ob，之後再flush

session_start();   


if ($_SESSION["login"]=="No") {

 }else{
        header("Location: error.php"); 
    }


?>


<html>
<head>
<meta charset="utf-8">
</head>


<body>
<?php

?>
    登入失敗!!!
    網頁將在5秒後跳轉至登入頁面<br>
    <a href="week5form.php">點選這裡<a>
<?php
header("Refresh:5;url=week5form.php");  

?>
</body>
</html>

<?php ob_flush(); ?>



