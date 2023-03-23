<meta charset="utf-8">

<?php
$id="a1103346";  
$pwd="2003";

$ID=$_POST["ID"];
$PWD=$_POST["PWD"];
if(($ID==$id)&&($PWD==$pwd)){
   echo "login success";
   setcookie("myID",$ID);
   setcookie("myPWD",$PWD);
}else{
   echo "login failed!!!";
}


echo "檔案名稱: ".$_FILES["myfile"]["name"]."<br/>";
echo "暫存檔名: ".$_FILES["myfile"]["tmp_name"]."<br/>";
echo "檔案尺寸: ".$_FILES["myfile"]["size"]."<br/>";
echo "檔案種類: ".$_FILES["myfile"]["type"]."<hr/>";

copy($_FILES["myfile"]["tmp_name"],"myPic");
unlink($_FILES["myfile"]["tmp_name"]);

?>
