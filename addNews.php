<?php include "connectDB.php"; ?>

<?php
echo $_POST["Topic"];
echo  $_POST["Detail"];
echo $_POST["Date"];
/*
    $stmt = $pdo->prepare("INSERT INTO News VALUES ('', ?, ?, ?)");
    $stmt->bindParam(1, $_POST["Topic"]);
    $stmt->bindParam(2, $_POST["Detail"]);
    $stmt->bindParam(3, $_POST["Date"]);
    $stmt->execute(); // เริ่มเพิ่มข้อมูล
    */
    
?>


<?php
   echo $_FILES['ImgName']['name'];
    $i=0;
    echo sizeof($img);
while($i < sizeof($img)){
       
        $stmt = $pdo->prepare("INSERT INTO images VALUES ('', ?, ?)");
        $stmt->bindParam(1, $_POST["Date"]);
        $stmt->bindParam(2, $_POST["ImgName"]);
        $stmt->execute(); // เริ่มเพิ่มข้อมูล
       gfgfhfghfgfgh
       
   
    ?>
