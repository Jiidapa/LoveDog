<?php 
include "../connect-localhost.php";

$name=$_POST["name"];
$ssn=$_POST["ssn"];
$imgSSN=$_FILES["imgSSN"]["name"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmpassword"];
$birthday=$_POST["birthday"];
$question1=$_POST["question1"];
$ans1=$_POST["ans1"];
$question2=$_POST["question2"];
$ans2=$_POST["ans2"];
$question3=$_POST["question3"];
$ans3=$_POST["ans3"];



if($password == $confirmpassword){
    $stmt = $pdo->prepare("INSERT INTO preparemember  (name, ssn, imgSSN, email,username,password,confirmpassword,birthday,question1,ans1,question2,ans2,question3,ans3,status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $ssn);
        $stmt->bindParam(3, $imgSSN);
        $stmt->bindParam(4, $email);
        $stmt->bindParam(5, $username);
        $stmt->bindParam(6, $password);
        $stmt->bindParam(7, $confirmpassword);
        $stmt->bindParam(8, $birthday);
        $stmt->bindParam(9, $question1);
        $stmt->bindParam(10, $ans1);
        $stmt->bindParam(11, $question2);
        $stmt->bindParam(12, $ans2);
        $stmt->bindParam(13, $question3);
        $stmt->bindParam(14, $ans3);
        $stmt->bindParam(15, 0);
        $stmt->execute(); 
    $tmp_name = $_FILES["imgSSN"]["tmp_name"]
    //$uploads_dir = "../img/ssn";
    move_uploaded_file ($tmp_name, "../img/ssn/$ssn");
    header('Location: http://localhost/LoveDog/Register/correct_registation.html');
}else{
    
}
?>

