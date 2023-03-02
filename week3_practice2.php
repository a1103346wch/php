<meta charset="utf-8">

<?php

if(isset($_POST["id"])){

  $id=$_POST["id"];
  $pwd=$_POST["pwd"];
  $gender=$_POST["gender"];
  $swim=$_POST["swim"];
  $ball=$_POST["ball"];
  $sleep=$_POST["sleep"];
  $city=$_POST["city"];

  //$id=$_GET["id"];
  echo "您的ID是:".$id."<br/>";
  echo "您的密碼是:".$pwd."<br/>";

    if($gender=="male"){
      echo "您的性別是:男性<br/>";
    }else{
      echo "您的性別是:女性<br/>";
    }

echo "您的興趣是:<br/>";

    if(isset($_POST["swim"])){
        $swim=$_POST["swim"];
        echo "游泳<br/>";
    }
    
    if(isset($_POST["ball"])){
        $swim=$_POST["ball"];
        echo "打球<br/>";
    }

    if(isset($_POST["sleep"])){
        $swim=$_POST["sleep"];
        echo "睡覺<br/>";
    }







$city=$_POST["city"];

echo "您的住址是:" .$city;

// for($i=0; $i<count($city); $i++){
    //echo $city[$i]." "; 
//}

foreach ($city as $value){
   echo $value." "; 
}


echo"<br>";

$comment=$_POST["comment"];
echo "您的建議:<br/>";
//echo nl2br($comment);
echo strip_tags(nl2br($comment));







}else{
  echo "資料輸入錯誤";
}



?>


