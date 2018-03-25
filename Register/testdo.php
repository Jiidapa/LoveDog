<?php

include "../connect.php";
?>

<?php
$Name=$_POST['name'];
$Ssn=$_POST['id'];
echo $Name.$Ssn;
$st = $pdo->prepare("INSERT INTO userprepare (name, ssn) values (?, ?)");
$st->bindParam(1, $_POST['name']);
$st->bindParam(2, $_POST['id']);
$st->execute();


?>