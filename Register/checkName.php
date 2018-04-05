<?php 
// include "../connect-localhost.php";
include "../connect.php";
$name=$_GET["name"];
$date=$_GET["date"];

$stmt = $pdo->prepare("SELECT * FROM preparemember ");
$stmt->execute();
while($row= $stmt->fetch()){
    // echo "date" .$date;
    // echo "rwo date".$row["birthday"]; 
    // echo $row["name"];
    // echo $name;
    
    // echo $DateForCheck1;
    // echo $DateForCheck;
    if($name == $row["name"]){
        $dateC1 = $date; 
        $Day1 = explode("-", $dateC1);
        $DateForCheck1 = $Day1[2]."/".$Day1[1]."/".$Day1[0];
        $dateC = $row["birthday"]; 
        $Day = explode("-", $dateC);
        $DateForCheck = $Day[2]."/".$Day[1]."/".$Day[0];
        // echo $DateForCheck."\n";
        // echo $DateForCheck1;
        if( $DateForCheck1 == $DateForCheck){
            echo "fail";
            break;
        }else{
            echo "test";
        }
    }
}
?>