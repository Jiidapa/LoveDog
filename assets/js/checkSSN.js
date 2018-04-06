
function checkNationalID() {
    var ssn = document.getElementById("ssn").value;
    console.log(ssn);
    if(ssn.length != 13){
        console.log("length != 13");
         return false;
    }
    for(i=0, sum=0; i < 12; i++)
        sum += parseFloat(ssn.charAt(i))*(13-i); if((11-sum%11)%10!=parseFloat(ssn.charAt(12)))
         return false; return true;
}

function checkSSN() {
    if(!checkNationalID()){
        document.getElementById("alertSSN").innerHTML = "incorrect identification number";
    }else{
    document.getElementById("alertSSN").innerHTML = "";
    }
}