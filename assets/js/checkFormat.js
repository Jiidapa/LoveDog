// var xmlHttp;
// var UserCheck="fail";
// function checkUser(){
//  xmlHttp = new XMLHttpRequest();
//  xmlHttp.onreadystatechange = showUsernameStatus;
//  var username = document.getElementById("username").value;
//  var url = "checkUser.php?username=" + username;
//  xmlHttp.open("GET", url);
//  xmlHttp.send();
// }

// function showUsernameStatus() {
//  if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
//  if (xmlHttp.responseText == "fail") {
//      alert("fail");
//  UserCheck="fail";
//  }else{
//     alert("pass");
// UserCheck="pass";  

//  }
//  }
//  }
// console.log(UserCheck);
function checkValid(){
    // xmlHttp = new XMLHttpRequest();
    // xmlHttp.onreadystatechange = showUsernameStatus;
    // var username = document.getElementById("username").value;
    // var url = "checkUser.php?username=" + username;
    // xmlHttp.open("GET", url);
    // xmlHttp.send();
    
    // namecheck
    var status=false; 
    var checkUser =document.getElementById("usercheck").value;
    var checkFullName =document.getElementById("namecheck").value;
    var Cbirthday = document.getElementById("birthday").value;
    var Cquestion1 = document.getElementById("question1").value;
    var Cans1 = document.getElementById("ans1").value;
    var Cquestion2 = document.getElementById("question2").value;
    var Cans2 = document.getElementById("ans2").value;
    var Cquestion3 = document.getElementById("question3").value
    var Cans3 = document.getElementById("ans3").value;
    var Caccept =document.getElementById("myBtn");
    // Caccept.checked=false;
    var sum=0;
    var CatchDate = 1;
    // var test =document.getElementById("form");
    console.log(checkFullName);
       
    // document.getElementById("fullNameCheck").innerHTML="ชื่อนี้ไม่ได้";
    // console.log(checkUser);
    // console.log("whos".checkFullName);
    // CHECK NAME checkName
    var Cname = document.getElementById("name").value;
    const CCname=Cname;
    const regexName = /^[A-Za-z]+[ ][A-Za-z]+$/g;
    let mName =regexName.exec(CCname);
    if(Cname == null || Cname == ""){
        document.getElementById("alertName").innerHTML = "Please input your Firstname - Lastname";
        // /return false;
        status=false;
    }else if(mName== null){
        document.getElementById("alertName").innerHTML = "First and last name must be contains letters(Eng)";
        // return false;
        status=false;
    }
    // else if(checkFullName == 0 && CatchDate == 1){
    //     document.getElementById("fullNameCheck").innerHTML="This name is already in use.";
    //     status=false; 
    // }
    else{
        document.getElementById("usernameCheck").innerHTML = "";
        sum=sum+1;
        // status=true;
    }
    
    var Cssn = document.getElementById("ssn").value;
    // // // CHECK SSN & PASSPORT
   
    const CCssn=Cssn;
    const regexSSN = /^[0-9]{13}$|^[A-Z]{1}[0-9]{8}$|^[A-Z]{2}[0-9]{7}$/g;
    let mSSN =regexSSN.exec(CCssn);
    if(Cssn == null || Cssn == ""){
        document.getElementById("alertSSN").innerHTML = "Please input your Identification number/Passport number";
        // return false;
        status=false;
    }else if(mSSN== null){
        document.getElementById("alertSSN").innerHTML = "Incorrect pattern";
        // return false;
        status=false;
    }else{
        document.getElementById("alertSSN").innerHTML = "";
        sum=sum+1;
        // status=true;
    }
    
     var CimgSSN = document.getElementById("imgSSN").value;
    // // CHECK Img SSN
    if(CimgSSN == null || CimgSSN == ""){
        document.getElementById("alertImgSSN").innerHTML = "Please choose your Image Identification number/Passport number to upload";
        status=false;
    }else{
        document.getElementById("alertImgSSN").innerHTML = "";
        sum=sum+1;
        // status=true;
    }

     var Cemail = document.getElementById("email").value;
    // // CHECK Email
    const CCemail = Cemail;
    const regexEmail = /[^@\s]+@[^@\s]+\.[^@\s]+/g;
    let mEmail =regexEmail.exec(CCemail);
    if(Cemail == null || Cemail == ""){
        document.getElementById("alertEmail").innerHTML = "Please input your Email";
        status=false;
    }
    else if(mEmail==null){
        document.getElementById("alertEmail").innerHTML = "Email must be @ ex.bananasoft@example.com";
        status=false;
    }else{
        document.getElementById("alertEmail").innerHTML = "";
        sum=sum+1;
        // status=true;
    }

    var Cusername = document.getElementById("username").value;
    // // CHECK Username
    const CCusername = Cusername;
    const regexUsername = /^[A-Za-zก-๙0-9-_]{1,}$/g;
    let mUsername =regexUsername.exec(CCusername);
    if(Cusername == null || Cusername == ""){
        document.getElementById("alertUsername").innerHTML = "Please input your Username";
        status=false;
    }
    else if(mUsername==null){
        document.getElementById("alertUsername").innerHTML = "Please type a username must be contains letters(Thai,Eng), numbers, - and _";
        status=false;
    }else if(checkUser == 0){
        console.log("checkUser");
            document.getElementById("alertUsername").innerHTML="This username is already in use.";
            status=false;
    }
    else{
        
        document.getElementById("alertUsername").innerHTML = "";
        sum=sum+1;
        //status=true;
    }

    var Cpassword = document.getElementById("password").value;
     // // CHECK Password
    const CCpassword = Cpassword;
    const regexPassword = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])([-_]*)(?=.{16,})/g;
    let mPassword =regexPassword.exec(CCpassword);
    if(Cpassword == null || Cpassword == ""){
        document.getElementById("alertPassword").innerHTML = "Please input your Password";
        status=false;
    }else if(mPassword==null){
        document.getElementById("alertPassword").innerHTML = "Please type a password that's at least 16 characters long and which contains letters(Eng) or numbers or - or _";
        status=false;
    }else{
        document.getElementById("alertPassword").innerHTML = "";
        sum=sum+1;
       // status=true;
    }

    var Cconfirmpassword = document.getElementById("confirmpassword").value;
    // // CHECK ConfPassword
    const CCConfirmpassword = Cconfirmpassword;
    const regexConfirmPassword = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])([-_]*)(?=.{16,})/g;
    let mConfirmPassword =regexConfirmPassword.exec(CCConfirmpassword);
    if(Cconfirmpassword == null || Cconfirmpassword == ""){
        document.getElementById("alertConfPassword").innerHTML = "Please input your Confirm Password";
        status=false;
    }else if(mConfirmPassword==null){
        document.getElementById("alertConfPassword").innerHTML = "Please type a password that's at least 16 characters long and which contains letters(Eng) or numbers or - or _";
        status=false;
    }else{
        document.getElementById("alertConfPassword").innerHTML = "";
        sum=sum+1;
        //status=true;
    }

    // // CHECK Birthday
    var input = document.getElementById("birthday").value;
    var d = new Date(input);
    var birth_year = d.getFullYear();
    var birth_month = d.getMonth();
    var birth_day = d.getDate();
    //console.log(birth_year);

    var today_date = new Date();
    var today_year = today_date.getFullYear();
    var today_month = today_date.getMonth();
    var today_day = today_date.getDate();
    var ageCheck=0;
    var age = today_year - birth_year;
    var age_month = today_month - birth_month;
    var age_day = today_day - birth_day;
   // console.log("age :"+age);
   // console.log("age month :"+age_month);
   // console.log("age day:"+age_day);
    if(Cbirthday == null || Cbirthday == ""){
        document.getElementById("alertBirthday").innerHTML = "Please input your Birthday";
        status=false;
    }
    //  age_month == 0 && age_day < 0
   else if ((age_month < 0) || (age_month == 0 && age_day < 0) || (age_month == 0 && age_day == 0) || (age_month > 0 && age_day < 0) || (age_month >0 && age_day == 0)){
        age1 = parseInt(age) - 1;
        console.log("fist"+ageCheck);
        // console.log("age :"+age);
        if((age_month == 0 && age_day == 0  && age >= 20 ) || (age_month > 0 && age_day < 0 && age >= 20) || (age_month >0 && age_day == 0 && age >= 20)){
            ageCheck=1;
        }
       else if(age1 < 20){
          //  console.log("1age :"+age);
           // console.log("fist123"+ageCheck);
            document.getElementById("alertBirthday").innerHTML = "Your Age must be more than 20 years old";
            status=false;
        }        
        else {
            // console.log("1age :"+age);
            ageCheck=1;
            CatchDate = 0;
            // console.log("sec"+ageCheck);
            document.getElementById("alertBirthday").innerHTML = "";
        }
       // console.log(ageCheck);
    }
   
    
    

    // // CHECK Question1
    if(Cquestion1 == "Security Question 1"){
        document.getElementById("alertQuestion1").innerHTML = "Please select your Question1";
        status=false;
    }else{
        document.getElementById("alertQuestion1").innerHTML = "";
        sum=sum+1;
        //status=true;
    }


    // // CHECK Answer1
    if(Cans1 == null || Cans1 == ""){
        document.getElementById("alertAns1").innerHTML = "Please input your Answer";
        status=false;
    }else{
        document.getElementById("alertAns1").innerHTML = "";
        sum=sum+1;
      //  status=true;
        
    }


    // // CHECK Question2
    if(Cquestion2 == "Security Question 2"){
        document.getElementById("alertQuestion2").innerHTML = "Please select your Question2";
        status=false;
    }else{
        document.getElementById("alertQuestion2").innerHTML = "";
       // status=true;
    }

    // // CHECK Answer2
    if(Cans2 == null || Cans2 == ""){
        document.getElementById("alertAns2").innerHTML = "Please input your Answer";
        status=false;
    }else{
        document.getElementById("alertAns2").innerHTML = "";
        sum=sum+1;
      //  status=true;
    }


    //  // CHECK Question3
     if(Cquestion3 == "Security Question 3"){
        document.getElementById("alertQuestion3").innerHTML = "Please select your Question3";
        status=false;
    }else{
        document.getElementById("alertQuestion3").innerHTML = "";
        sum=sum+1;
      //  status=true;
    }


    // // CHECK Answer3
    if(Cans3 == null || Cans3 == ""){
        document.getElementById("alertAns3").innerHTML = "Please input your Answer";
        status=false;
    }else{
        document.getElementById("alertAns3").innerHTML = "";
        sum=sum+1;
        // status=true;
    }

     // CHECK Accept
     
    
    //  if(Caccept == "0"){
    //     document.getElementById("alertAccept").innerHTML = "Please input your Answer";
    //     status=false;
        
    // }else{
    //     document.getElementById("alertAccept").innerHTML = "";
    //     status=true;
    // }
    // if(Caccept.checked){
    //         document.getElementById("alertAccept").innerHTML = "";
    //         status=true;
            
    //     }else{
    //         document.getElementById("alertAccept").innerHTML = "Please accept policies";
    //         status=false;
    //     }
    // if(document.getElementById('myBtn').checked){
    //     return true;
    // } else {  
    //      document.getElementById('alertAccept').innerHTML = 'Please accept policies'; return false;}
    console.log(sum);
    if(sum==12 && Caccept.checked == true && ageCheck==1){
        return true;
    }else{
        if(Caccept.checked == false){
        document.getElementById('alertAccept').innerHTML = 'Please accept policies';
    }else{
        document.getElementById('alertAccept').innerHTML = '';
    }
    }
    return status;
    // checkthis();
    
}

// function checkthis(){
//     if(document.getElementById('myBtn').checked){
//     //     return true;
//     // } else {  
//     //      document.getElementById('alertAccept').innerHTML = 'Please accept policies'; return false;}
// }
function checkonfocus(){
    var status=false; 
    var Cbirthday = document.getElementById("birthday").value;
    var Cquestion1 = document.getElementById("question1").value;
    var Cans1 = document.getElementById("ans1").value;
    var Cquestion2 = document.getElementById("question2").value;
    var Cans2 = document.getElementById("ans2").value;
    var Cquestion3 = document.getElementById("question3").value
    var Cans3 = document.getElementById("ans3").value;
    // var Caccept =document.getElementById("myBtn");
    // Caccept.checked=false;
    
    
    // CHECK NAME
    var Cname = document.getElementById("name").value;
    const CCname=Cname;
    const regexName = /^[A-Za-z]+[ ][A-Za-z]+$/g;
    let mName =regexName.exec(CCname);
    if(Cname == null || Cname == ""){
        document.getElementById("alertName").innerHTML = "Please input your Firstname - Lastname";
        // /return false;
        status=false;
    }else if(mName== null){
        document.getElementById("alertName").innerHTML = "First and last name must be contains letters(Eng)";
        // return false;
        status=false;
    }else{
        document.getElementById("alertName").innerHTML = "";
       // status=true;
    }
    
    var Cssn = document.getElementById("ssn").value;
    // // // CHECK SSN & PASSPORT
   
    const CCssn=Cssn;
    const regexSSN = /^[0-9]{13}$|^[A-Z]{1}[0-9]{8}$|^[A-Z]{2}[0-9]{7}$/g;
    let mSSN =regexSSN.exec(CCssn);
    if(Cssn == null || Cssn == ""){
        document.getElementById("alertSSN").innerHTML = "Please input your Identification number/Passport number";
        // return false;
        status=false;
    }else if(mSSN== null){
        document.getElementById("alertSSN").innerHTML = "Incorrect pattern";
        // return false;
        status=false;
    }else{
        document.getElementById("alertSSN").innerHTML = "";
        //status=true;
    }
    
     var CimgSSN = document.getElementById("imgSSN").value;
    // // CHECK Img SSN
    if(CimgSSN == null || CimgSSN == ""){
        document.getElementById("alertImgSSN").innerHTML = "Please choose your Image Identification number/Passport number to upload";
        status=false;
    }else{
        document.getElementById("alertImgSSN").innerHTML = "";
        //status=true;
    }

     var Cemail = document.getElementById("email").value;
    // // CHECK Email
    const CCemail = Cemail;
    const regexEmail = /[^@\s]+@[^@\s]+\.[^@\s]+/g;
    let mEmail =regexEmail.exec(CCemail);
    if(Cemail == null || Cemail == ""){
        document.getElementById("alertEmail").innerHTML = "Please input your Email";
        status=false;
    }
    else if(mEmail==null){
        document.getElementById("alertEmail").innerHTML = "Email must be @ ex.bananasoft@example.com";
        status=false;
    }else{
        document.getElementById("alertEmail").innerHTML = "";
        //status=true;
    }

    var Cusername = document.getElementById("username").value;
    // // CHECK Username
    const CCusername = Cusername;
    const regexUsername = /^[A-Za-zก-๙0-9-_]{1,}$/g;
    let mUsername =regexUsername.exec(CCusername);
    if(Cusername == null || Cusername == ""){
        document.getElementById("alertUsername").innerHTML = "Please input your Username";
        status=false;
    }
    else if(mUsername==null){
        document.getElementById("alertUsername").innerHTML = "Please type a username must be contains letters(Thai,Eng), numbers, - and _";
        status=false;
    }else{
        document.getElementById("alertUsername").innerHTML = "";
       // status=true;
    }

    var Cpassword = document.getElementById("password").value;
     // // CHECK Password
    const CCpassword = Cpassword;
    const regexPassword = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])([-_]*)(?=.{16,})/g;
    let mPassword =regexPassword.exec(CCpassword);
    if(Cpassword == null || Cpassword == ""){
        document.getElementById("alertPassword").innerHTML = "Please input your Password";
        status=false;
    }else if(mPassword==null){
        document.getElementById("alertPassword").innerHTML = "Please type a password that's at least 16 characters long and which contains letters(Eng) or numbers or - or _";
        status=false;
    }else{
        document.getElementById("alertPassword").innerHTML = "";
      //  status=true;
    }

    var Cconfirmpassword = document.getElementById("confirmpassword").value;
    // // CHECK ConfPassword
    const CCConfirmpassword = Cconfirmpassword;
    const regexConfirmPassword = /[A-Za-z0-9-_]{16,}/g;
    let mConfirmPassword =regexConfirmPassword.exec(CCConfirmpassword);
    if(Cconfirmpassword == null || Cconfirmpassword == ""){
        document.getElementById("alertConfPassword").innerHTML = "Please input your Confirm Password";
        status=false;
    }else if(mConfirmPassword==null){
        document.getElementById("alertConfPassword").innerHTML = "Please type a password that's at least 16 characters long and which contains letters(Eng) or numbers or - or _";
        status=false;
    }else{
        document.getElementById("alertConfPassword").innerHTML = "";
      //  status=true;
    }

    // // CHECK Birthday
    var input = document.getElementById("birthday").value;
    var d = new Date(input);
    var Year = d.getFullYear();
    var Year_string = Year.toString();
    var year_int = parseInt(Year_string);
    // console.log(year_int);

    var now =  new Date()
    var year_now = now.getFullYear();
    var year_now_string = year_now.toString();
    var year_now_int = parseInt(year_now_string);
    // console.log(year_now_int);

    var calculate_year = year_now_int-year_int;
    // console.log(console.log(year_now_int));
    if(Cbirthday == null || Cbirthday == ""){
        document.getElementById("alertBirthday").innerHTML = "Please input your Birthday";
        status=false;
    }
    else if(calculate_year < 20){
        document.getElementById("alertBirthday").innerHTML = "Your Age must be more than 20 years old";
        status=false;
    }
    else{
        document.getElementById("alertBirthday").innerHTML = "";
     //   status=true;
    }
    
    // // CHECK Question1
    if(Cquestion1 == "Security Question 1"){
        document.getElementById("alertQuestion1").innerHTML = "Please select your Question1";
        status=false;
    }else{
        document.getElementById("alertQuestion1").innerHTML = "";
      //  status=true;
    }


    // // CHECK Answer1
    if(Cans1 == null || Cans1 == ""){
        document.getElementById("alertAns1").innerHTML = "Please input your Answer";
        status=false;
    }else{
        document.getElementById("alertAns1").innerHTML = "";
       // status=true;
    }


    // // CHECK Question2
    if(Cquestion2 == "Security Question 2"){
        document.getElementById("alertQuestion2").innerHTML = "Please select your Question2";
        status=false;
    }else{
        document.getElementById("alertQuestion2").innerHTML = "";
      //  status=true;
    }

    // // CHECK Answer2
    if(Cans2 == null || Cans2 == ""){
        document.getElementById("alertAns2").innerHTML = "Please input your Answer";
        status=false;
    }else{
        document.getElementById("alertAns2").innerHTML = "";
       // status=true;
    }


    //  // CHECK Question3
     if(Cquestion3 == "Security Question 3"){
        document.getElementById("alertQuestion3").innerHTML = "Please select your Question3";
        status=false;
    }else{
        document.getElementById("alertQuestion3").innerHTML = "";
      //  status=true;
    }

    if(Cans3 == null || Cans3 == ""){
        document.getElementById("alertAns3").innerHTML = "Please input your Answer";
        status=false;
    }else{
        document.getElementById("alertAns3").innerHTML = "";
        // status=true;
    }
    
    

     // // CHECK Accept
    //  if(Caccept == "0"){
    //     document.getElementById("alertAccept").innerHTML = "Please input your Answer";
    //     status=false;
        
    // }else{
    //     document.getElementById("alertAccept").innerHTML = "";
    //     status=true;
    // }
    // if(Caccept.checked){
    //         document.getElementById("alertAccept").innerHTML = "";
    //         status=true;
    //     }else{
    //         document.getElementById("alertAccept").innerHTML = "Please accept policies";
    //         status=false;
    //     }
    // if(document.getElementById('myBtn').checked){
    //     return true;
    // } else {  
    //      document.getElementById('alertAccept').innerHTML = 'Please accept policies'; return false;}
    return status;
    // checkthis();
}

function checkPassword(){
    var password = document.getElementById("password");
    var confirmpassword = document.getElementById("confirmpassword");
    var result = document.getElementById("result");
    if(password.value==confirmpassword.value){
        console.log(password);
        console.log(confirmpassword);
        console.log("pass");
        result.innerHTML = " ";
    }else{
        console.log(password);
        console.log(confirmpassword);
        console.log("nomach");
        result.innerHTML = "Passwords do not match";
    }


}

function checkTopic(){
    
    var Topic =document.getElementById("Topic").value;
    const CCtopic = Topic;
    const regexTopic = /[ก-๙a-zA-Z0-9]+/g;
    let mTopic =regexTopic.exec(CCtopic);
    var status=false;
    console.log(mTopic);
    if(Topic == null || Topic == ""){
        document.getElementById("alertTopic").innerHTML = "กรุณากรอกหัวข้อข่าว";
        status = false;
    }else if(mTopic== null){
        document.getElementById("alertTopic").innerHTML = "กรุณากรอกหัวข้อข่าว";
        // return false;
        status=false;
    }else{
        document.getElementById("alertTopic").innerHTML = "";
        status=true;
    }
    return status;
}

