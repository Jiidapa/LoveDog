<?php
include "../connect.php"
?>

<?php 
chmod("../img/imgAnno", 777);
$topic = $_POST['Topic'];
$content = $_POST['Content'];
$date = $_POST['Date'];

$stmt = $pdo->prepare("INSERT INTO news  (Topic, Content, Date) VALUES (?, ?, ?)");
$stmt->bindParam(1, $topic);
$stmt->bindParam(2, $content);
$stmt->bindParam(3, $date);
$stmt->execute(); 
?>

<?php 
$stmt = $pdo->prepare("SELECT * FROM news where topic = ? and date = ?");
$stmt->bindParam(1, $_POST["Topic"]);
$stmt->bindParam(2, $_POST["Date"]);
$stmt->execute();
$row= $stmt->fetch();
$newsid= $row["NewsId"];

// $uploads_dir = "../img/imgAnno";
// foreach ($_FILES["ImageName"]["error"] as $key => $error) {
//     if ($error == UPLOAD_ERR_OK) {
//         $tmp_name = $_FILES["ImageName"]["tmp_name"][$key];
//         $name = basename($_FILES["ImageName"]["name"][$key]);
//         $uploadfile = $uploads_dir .basename($_FILES["ImageName"]["name"][$key]);
//         $stmt = $pdo->prepare("INSERT INTO images (ImgName,Date,NewsId) VALUES (?, ?, ?)");
//         $stmt->bindParam(1, $name);
//         $stmt->bindParam(2, $date);
//         $stmt->bindParam(3, $newsid);
//         try {
//             $stmt->execute();
//             print_r($tmp_name);
//             echo "Dir: " . $uploads_dir;
//             if(move_uploaded_file($tmp_name, $uploadfile)) {
//                 echo "Upload " .basename($_FILES["ImageName"]["name"][$key]) ." complete.<br>";
//             } else {
//                 echo "Upload failed.<br>";
//             }
//             echo "ชื่อรูป :".$name;
//             echo "ไอดีข่าว :".$newsid;
//             echo "วันที่ :".$date;
            
//         } catch (PDOException $e) {
//             echo "Error " .$e->getMessage();
//         }
//     }
    
//    // header('Location: http://10.199.66.227/SoftEn2018/Sec01_BS/News/FormNews.php');
// }

$uploads_dir = '../img/imgAnno';
foreach ($_FILES["ImageName"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["ImageName"]["tmp_name"][$key];
        $name = basename($_FILES["ImageName"]["name"][$key]);
        echo $name;
        $stmt = $pdo->prepare("INSERT INTO images (ImgName,Date,NewsId) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $date);
        $stmt->bindParam(3, $newsid);
        $stmt->execute();
        if(move_uploaded_file($tmp_name, "$uploads_dir/$name")){
            echo "up com";
        }else{
            echo "fail";
        }
        
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