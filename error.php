<html>
<head>
<meta charset="utf-8">
</head>


<body>

    非法進入網頁!!!
    網頁將在5秒後跳轉至登入頁面<br>
    <a href="week5form.php">回到登入頁面<a>
<?php
header("Refresh:5;url=week5form.php");  


?>
</body>
</html>

<?php ob_flush(); ?>