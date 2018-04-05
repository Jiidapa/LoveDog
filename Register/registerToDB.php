<?php
include "../connect.php";
// include "../connect-localhost.php";


$Name=$_POST['name'];
$Ssn=$_POST['ssn'];
$ImgSSN=$_FILES['imgSSN']['name'];
$Email=$_POST['email'];
$Username=$_POST['username'];
$Password=$_POST['password'];
$Confirmpassword=$_POST['confirmpassword'];
$Birthday=$_POST['birthday'];
$Question1=$_POST['question1'];
$Ans1=$_POST['ans1'];
$Question2=$_POST['question2'];
$Ans2=$_POST['ans2'];
$Question3=$_POST['question3'];
$Ans3=$_POST['ans3'];

echo $Name."<br>";
echo $Ssn."<br>";
echo $ImgSSN."<br>";
echo $Email."<br>";
echo $Username."<br>";
echo $Password."<br>";
echo $Confirmpassword."<br>";
echo $Birthday."<br>";
echo $Question1."<br>";
echo $Ans1."<br>";
echo $Question2."<br>";
echo $Ans1."<br>";
echo $Question3."<br>";
echo $Ans3."<br>";
$status="0";

// This is the file we're going to add it in the database
// $MY_FILE = $_FILES['imgSSN']['tmp_name'];
 
// // To open the file and store its contents in $file_contents
// $file = fopen($MY_FILE, 'r');
// $file_contents = fread($file, filesize($MY_FILE));
// fclose($file);
/* We need to escape some stcharacters that might appear in  file_contents,so do that now, before we begin the query.*/
 
// $file_contents = addslashes($file_contents);
//  echo $file_contents;
// To add the file in the database

// mysql_query("INSERT INTO preparemember SET file='$file_contents'") or die("MySQL Query Error: " . mysql_error());
// mysql_close();
// echo "File INSERTED into files table successfully.";

$st=$pdo->prepare("INSERT INTO preparemember (name, ssn, imgSSN, email, username, password, confirmpassword, birthday, question1, ans1, question2, ans2, question3, ans3, status ) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$st->bindParam(1, $Name);
$st->bindParam(2, $Ssn);
 $st->bindParam(3, $ImgSSN);
$st->bindParam(4, $Email);
$st->bindParam(5, $Username);
$st->bindParam(6, $Password);
$st->bindParam(7, $Confirmpassword);
$st->bindParam(8, $Birthday);
$st->bindParam(9, $Question1);
$st->bindParam(10, $Ans1);
$st->bindParam(11, $Question2);
$st->bindParam(12, $Ans2);
$st->bindParam(13, $Question3);
$st->bindParam(14, $Ans3);
$st->bindParam(15, $status);   
$st->execute();
$tmp_name = $_FILES['imgSSN']['tmp_name'];
$uploads_dir = "../img/ssn/";
move_uploaded_file ($tmp_name, "$uploads_dir".$Ssn.$ImgSSN);

// $st1=$pdo->prepare("INSERT INTO test (question1, ans1, question2, ans2, question3, ans3, status) values (?, ?, ?, ?, ?, ?, ?)");
    // $stmt = $pdo->prepare("INSERT INTO preparemember(name,ssn,imgSSN,email,username,password,confirmpassword,birthday,question1,ans1,question2,ans2,question3,ans3,status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
       
    //     $stmt->bindParam(1, $Name);
    //     $stmt->bindParam(2, $Ssn);
    //     $stmt->bindParam(3, $ImgSSN);
    //     $stmt->bindParam(4, $Email);
    //     $stmt->bindParam(5, $Username);
    //     $stmt->bindParam(6, $Password);
    //     $stmt->bindParam(7, $Confirmpassword);
    //     $stmt->bindParam(8, $Birthday);
    //     $stmt->bindParam(9, $Question1);
    //     $stmt->bindParam(10, $Ans1);
    //     $stmt->bindParam(11, $Question2);
    //     $stmt->bindParam(12, $Ans2);
    //     $stmt->bindParam(13, $Question3);
    //     $stmt->bindParam(14, $Ans3);
    //     $stmt->bindParam(15, $status);       
    //     $stmt->execute(); 
    //     echo "regiser";
    // $tmp_name = $_FILES['imgSSN']['tmp_name'];
    // $uploads_dir = "../img/ssn/";
    // move_uploaded_file ($tmp_name, "$uploads_dir".$Ssn.$ImgSSN);

    // header('Location: http://localhost/LoveDog/Register/correct_registation.html');
    header('Location: http://10.199.66.227/SoftEn2018/Sec01_BS/Register/correct_registation.html');

?>

