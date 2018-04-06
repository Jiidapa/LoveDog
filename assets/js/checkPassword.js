function checkPassword(){
    var status = false;
    var password = document.getElementById("password");
    var confirmpassword = document.getElementById("confirmpassword");
    var result = document.getElementById("result");
    if(password.value==confirmpassword.value){
        console.log(password);
        console.log(confirmpassword);
        console.log("pass");
        result.innerHTML = " ";
        return true;
    }else{
        console.log(password);
        console.log(confirmpassword);
        console.log("nomach");
        result.innerHTML = "Passwords do not match";
        return false;
    }
    return status;
}