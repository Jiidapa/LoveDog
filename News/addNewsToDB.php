<?php
include "../connect.php"
?>

<?php 
$stmt = $pdo->prepare("INSERT INTO news VALUES ('', ?, ?, ?)");
$stmt->bindParam(1, $_POST["Topic"]);
$stmt->bindParam(2, $_POST["Content"]);
$stmt->bindParam(3, $_POST["Date"]);
$stmt->execute(); 
?>

<?php 
$stmt = $pdo->prepare("SELECT * FROM news where topic = ? and date = ?");
$stmt->bindParam(1, $_POST["Topic"]);
$stmt->bindParam(2, $_POST["Date"]);
$stmt->execute();
$row= $stmt->fetch();
$newsid= $row["newsId"];

$uploads_dir = '../img/imgAnno';
foreach ($_FILES["ImageName"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["ImageName"]["tmp_name"][$key];
        $name = basename($_FILES["ImageName"]["name"][$key]);
        echo $name;
        $stmt = $pdo->prepare("INSERT INTO img VALUES ('', ?, ?, ?) ");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $_POST["Date"]);
        $stmt->bindParam(3, $newsid);
        $stmt->execute();
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
}
/*
foreach ($_FILES['img']['name'] as $file)
    {
        echo "date : ".$_POST["date"]."<br>";
        echo "newsid : ".$newsid."<br>";
        $name = $_FILES["img"]["name"];
        print_r($file);
        move_uploaded_file($_FILES["img"]["tmp_name"],$name);
        $stmt = $pdo->prepare("INSERT INTO news VALUES ('', ?, ?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $_POST["date"]);
        $stmt->bindParam(3, $newsid);
        
    }*/
?>