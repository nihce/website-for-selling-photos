function naloziMiha(){
    var xhttp;
    if(window.XMLHttpRequest){
        xhttp = new XMLHttpRequest(); // koda za novejse brskalnike
    }else{
        xhttp = new ActiveXObject("Microsoft.XMLHTTP"); // koda za stare brskalnike
    }
    xhttp.onreadystatechange=function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("menjaj").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "AJAX/kontaktMiha.txt", true);
    xhttp.send();
}
function naloziDanusa(){
    var xhttp;
    if(window.XMLHttpRequest){
        xhttp = new XMLHttpRequest(); // koda za novejse brskalnike
    }else{
        xhttp = new ActiveXObject("Microsoft.XMLHTTP"); // koda za stare brskalnike
    }
    xhttp.onreadystatechange=function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("menjaj").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "AJAX/kontaktDanusa.txt", true);
    xhttp.send();
}