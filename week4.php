<meta charset="utf-8">
<html>

<head></head>


<body>
<?php
@include "header.inc";
?>


<form action="week4.php" method="post">
請輸入m:<input type="text" name="m"><br/>
請輸入n:<input type="text" name="n"><br/>

<input type="submit">
<input type="reset"><br/>
</form>


<?php
$m=$_POST["m"];
$n=$_POST["n"];

echo"<table border='1'>"; //在php裡要用table的話要加echo
for($i=1; $i<=$m; $i++){
    echo "<tr>";
    for($j=1; $j<=$n; $j++){
        echo "<td>";
        echo $i."*".$j."=".$i*$j."\t";
        echo "</td>";
    }
    echo"<br>";
    echo "</tr>";
}        
echo "</table>";




//$grade=array(95,88,50,70);
$grade=array("math"=>95,"chinese"=>88,"english"=>50,"sport"=>70);
//echo $grade[0];
echo $grade["chinese"]; //88
echo"<br>";
$grade2=array(100,50,70,60);
echo $grade2[0]; //100
echo"<br>";

foreach($grade2 as $element){
    echo $element."\t"; //100 50 70 60
}
echo"<br>";
$grade3=array(1000,10,70,600);
print_r($grade3);    //Array ( [0] => 1000 [1] => 10 [2] => 70 [3] => 600 )
echo"<br>";
sort($grade3);   //10 70 600 1000
foreach($grade3 as $elephant){   
    echo $elephant."\t"; 
}
echo"<br>";
echo $grade3[0];//10
echo"<br>";
rsort($grade3);   //Array ( [0] => 1000 [1] => 600 [2] => 70 [3] => 10 )
print_r($grade3);   
echo"<br>";


$test="yes, no, ng, my";
$arr1=explode(",",$test);   //Array ( [0] => yes [1] => no [2] => ng [3] => my )
print_r($arr1);
echo"<br>";

$newstr=implode(",",$grade);  //95,88,50,70
echo $newstr;
echo"<br>";

$newstr=implode("#",$grade);  //95#88#50#70
echo $newstr;
echo"<br>";




?>

</body>












</html>









































