<?php
include "../connect.php"
// include "../connect-localhost.php"
?>

<?php 

chmod("../img/imgAnno/", 777);
$topic = $_POST['Topic'];
$content = $_POST['Content'];
$date = $_POST['Date'];
if($topic == ''){
    header('Location: http://10.199.66.227/SoftEn2018/Sec01_BS/News/FormNews.php?message=2'); 
}else{
$stmt = $pdo->prepare("INSERT INTO news  (Topic, Content, Date) VALUES (?, ?, ?)");
$stmt->bindParam(1, $topic);
$stmt->bindParam(2, $content);
$stmt->bindParam(3, $date);
$stmt->execute(); 
?>

<?php 
$stmt = $pdo->prepare("SELECT * FROM news where Topic = ? and Date = ?");
$stmt->bindParam(1, $topic);
$stmt->bindParam(2, $date);
$stmt->execute();
$row= $stmt->fetch();
$newsid= $row["NewsId"];
echo $newsid;

       //chmod($name, 777);
        $uploads_dir = '../img/imgAnno/';
        echo $uploads_dir;
        foreach ($_FILES["ImageName"]["error"] as $key => $error) {
                
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["ImageName"]["tmp_name"][$key];
                $name = basename($_FILES["ImageName"]["name"][$key]);
                echo $name;
                echo $tmp_name;
                echo $upload_dir;
                $stmt = $pdo->prepare("INSERT INTO images (ImgName,Date,NewsId) VALUES (?, ?, ?) ");
                $stmt->bindParam(1, $name);
                $stmt->bindParam(2, $date);
                $stmt->bindParam(3, $newsid);
                $stmt->execute();
                move_uploaded_file ($tmp_name, "$uploads_dir/".$name);
            }
        }
    //    header('Location: http://localhost/LoveDog 2/News/FormNews.php?message=1');
    header('Location: http://10.199.66.227/SoftEn2018/Sec01_BS/News/FormNews.php?message=1');
}
?>