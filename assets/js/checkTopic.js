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