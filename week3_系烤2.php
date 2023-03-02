<meta charset="utf-8">

<html>
<head>
<title> 系烤報名成功 </title>
</head>
<body text ="#000000" bgcolor="#11DFF0">



<?php



  $join=$_POST["join"];
  if($join=="yes"){
     echo "感謝您參加本次系烤<br/>";
  }else{
     echo "下次一定要來喔!<br/>";
  }

  $fee=$_POST["fee"];
  if($fee=="yes"){
     echo "本次系烤的費用為100元<br/>";
  }else{
    echo "本次系烤的費用為150元<br/>";
  }



  $name=$_POST["name"];
  echo "您的姓名是:".$name."<br/>";

  $id=$_POST["id"];
  echo "您的學號是:".$id."<br/>";




  echo "您不吃的食物:";
  if(isset($_POST["chicken"])){
  $chicken=$_POST["chicken"];
  echo "雞肉 ";
  }
  if(isset($_POST["pork"])){
    $pork=$_POST["pork"];
    echo "豬肉 ";
  }
  if(isset($_POST["beef"])){
    $beef=$_POST["beef"];
    echo "牛肉 ";
  }
  if(isset($_POST["seafood"])){
    $seafood=$_POST["seafood"];
    echo "海鮮 ";
  }
  if(isset($_POST["egg"])){
    $egg=$_POST["egg"];
    echo "牛奶及蛋等製品 ";
  }
  if(isset($_POST["none"])){
    $none=$_POST["none"];
    echo "無";
  }
          
echo"<br>";
echo"<br>";



$comment=$_POST["comment"];
echo "您的建議:<br/>";
echo nl2br(strip_tags($comment));



?>


</body>
</html>
















































































