//document.getElementById("buttonLeft").addEventListener("mouseover", changeSize);
var counter = 0;

document.getElementById("buttonLeft").addEventListener("click", changeLeft);
document.getElementById("buttonRight").addEventListener("click", changeRight);
//document.getElementById("buttonleft").addEventListener("mouseout",changeSize);
function changeLeft() {
    counter--;
    var display = null;
    if (counter < 0) {
        var temp = Math.abs(counter);
        display = (temp).days().ago().toString('MM/dd/yyyy');
    } else {
        display = (counter).day().fromNow().toString('MM/dd/yyyy');
    }
    document.getElementById("labelid").innerHTML = display;
};

function changeRight() {
    counter++;
    var display = null;
    var temp = null;
    if (counter < 0) {
        temp = Math.abs(counter);
        display = (temp).days().ago().toString('MM/dd/yyyy');
    } else {
        display = (counter).day().fromNow().toString('MM/dd/yyyy');
    }
    document.getElementById("labelid").innerHTML = display;
}

function returnLeft() {
    counter--;
    var display = null;
    if (counter < 0) {
        var temp = Math.abs(counter);
        display = (temp).days().ago().toString('MM/dd/yyyy');
    } else {
        display = (counter).day().fromNow().toString('MM/dd/yyyy');
    }
    return counter;
}

function returnRight() {
    counter++;
    var display = null;
    var temp = null;
    if (counter < 0) {
        temp = Math.abs(counter);
        display = (temp).days().ago().toString('MM/dd/yyyy');
    } else {
        display = (counter).day().fromNow().toString('MM/dd/yyyy');
    }
}