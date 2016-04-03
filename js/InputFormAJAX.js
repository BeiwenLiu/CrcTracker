function changeDate() {
        var temp = returnLeft();
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("testing").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "../include/inputFormTime.php?", true);
        xmlhttp.send();
}

function setDate() {
//    var xmlhttp = new XMLHttpRequest();
//        xmlhttp.onreadystatechange = function() {
//            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//                document.getElementById("testing").innerHTML = xmlhttp.responseText;
//            }
//        };
//        xmlhttp.open("GET", "inputFormTime.php?", true);
//        xmlhttp.send();
//        document.getElementById("testing").innerHTML = "hey";
    document.getElementById("testing").innerHTML = "hey";
}

window.onload = function() {
  setDate();
};