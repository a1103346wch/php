<?php
session_start();

if (($_SESSION["login"]=="prp")||($_SESSION["login"]=="tr")||($_SESSION["login"]=="stu")) {

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

//$id=$_POST["id"];
//$pwd=$_POST["pwd"];

$prpdata=array(10,100,1000,10000);
$trdata=array(20,200,2000,20000);
$studata=array(30,300,3000,30000);

if ($_SESSION["login"]=="prp"){
    echo "您的身分是校長<br>";
    //echo "您的帳號是".$id."<br>"; 
    //echo "您的密碼是".$pwd."<br>";
    print_r($prpdata); echo"<br>"; print_r($trdata); echo"<br>";
}
if ($_SESSION["login"]=="tr"){
    echo "您的身分是老師<br>";
    //echo "您的帳號是".$id."<br>"; 
    //echo "您的密碼是".$pwd."<br>";
    print_r($trdata); echo"<br>"; print_r($studata); echo"<br>";
}
if ($_SESSION["login"]=="stu"){
    echo "您的身分是學生<br>";
    //echo "您的帳號是".$id."<br>"; 
    //echo "您的密碼是".$pwd."<br>";
    print_r($studata); echo"<br>"; 
}

?>

<a href="logout.php">登出<a>  
</body>


</html>

