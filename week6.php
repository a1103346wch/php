<meta charset="utf-8">

<?php
echo time();  //取得現在時間戳記
echo "<br>";
date_default_timezone_set('Asia/Taipei');  //轉成台灣時間
echo date("Y-M-d H:i:s", time());
echo "<br>";
echo mktime(0,0,0,4,1,2023);  //自己定時間
echo "<br>";
echo $nM=strtotime("next month"); //下個月
echo "<br>";
echo date("Y-M-d H:i:s", $nM);
echo "<br>";
echo "<br>";
?>




<form action="week6check.php" method="post" enctype="multipart/form-data">
<?php
if(isset($_COOKIE["myID"])){
    echo $_COOKIE["myID"]."安安!";
    echo "<br>";
    //setcookie("ID","",time()-100);  //刪除Cookie
    echo "帳號:<input type='text' name='ID' value='".$_COOKIE["myID"]."' ><br/>";
    echo "密碼:<input type='password' name='PWD' value='".$_COOKIE["myPWD"]."' ><br/>";

}else{
    echo "<input type='text' name='ID' ><br/>";
    echo "<input type='password' name='PWD' ><br/>";
}
?>

<input type="file" name="myfile" ><br/>   
<input type="submit">
<input type="reset"><br/>
</form>













