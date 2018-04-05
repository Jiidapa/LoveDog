<?php 
// include "../connect-localhost.php";
include "../connect.php";
$username=$_GET["username"];

$stmt = $pdo->prepare("SELECT username FROM preparemember ");
$stmt->execute();
while($row= $stmt->fetch()){
    if($username == $row["username"]){
        echo "fail";
        break;
    }
}
?>