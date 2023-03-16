<?php
session_start();


$prpID="a111";  
$prpPWD="1111";

$trID="a222";  
$trPWD="2222";

$stuID="a333";  
$stuPWD="3333";




$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($prpID==$id)&&($prpPWD==$pwd)){
   $_SESSION["login"]="prp";
   header("Location: week5ok.php"); 
}elseif(($trID==$id)&&($trPWD==$pwd)){
   $_SESSION["login"]="tr";
    header("Location: week5ok.php"); 
}elseif(($stuID==$id)&&($stuPWD==$pwd)){
   $_SESSION["login"]="stu";
    header("Location: week5ok.php");  
}else{ 
   $_SESSION["login"]="No";
   header("Location: week5fail.php");
}
