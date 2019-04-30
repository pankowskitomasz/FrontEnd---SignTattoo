function updateFrm(){
    $(".contact-form").attr("action","nachricht.php");
}
setTimeout(updateFrm,11000);

function setCookie(paramA, valueA, durationA) {
  var now = new Date();
  now.setTime(now.getTime() + (durationA*24*60*60*1000));
  var expires = "expires="+ now.toUTCString();
  document.cookie = paramA + "=" + valueA + ";" + expires + ";path=/";
}

function getCookie(paramA) {
    var param = paramA + "=";
    var decodedStr = decodeURIComponent(document.cookie);
    var cookieArray = decodedStr.split(';');
    var i;
    for(i=0; i<cookieArray.length; i++) {
        if (cookieArray[i].indexOf(paramA)>=0) {
            return cookieArray[i].split("=")[1];
        }
    }
}

if(getCookie("rodoAccept")!=="1"){
    var gpdrMsg = "GDPR declaration - this is website demo, so it doesn't store any data.\n";
    gpdrMsg += "All data entered by You in forms on this website are processed only in order\n";
    gpdrMsg += "to present operation of website mechanisms and then are removed.\n";
    gpdrMsg += "Click OK if you accept presented rules of data use and processing";
    var gpdrAccept = confirm(gpdrMsg);
    if(gpdrAccept===true){
        setCookie("rodoAccept","1",1);
    }
}