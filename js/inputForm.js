function updateClock() {
    var now = new Date(), // current date
    months = ['January', 'February', '...']; // you get the idea
    var seconds = now.getSeconds();
    var minutes = now.getMinutes();
    var hours = now.getHours();
    var zone = null;
    if (hours > 12) {
        hours = hours % 12;
        zone = 'PM';
    } else {
        if (hours == 0) {
            hours = 12;
        }
        zone = 'AM';
    }
    if (seconds < 10) {
        seconds = '0' + seconds;
    }
    if (minutes < 10) {
        minutes = '0' + minutes;
    }
    time = hours + ':' + minutes + ':' + seconds + " " + zone;


    // set the content of the element with the ID time to the formatted string
    document.getElementById('timeid').innerHTML = time;
                    
    // call this function again in 1000ms
};

function setDate() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!

    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 
    var today = mm+'/'+dd+'/'+yyyy;
    document.getElementById("labelid").innerHTML = today;
};

//This function goes through each 'input' element within the table container 'tableStyle' and checks if their values exist.
function changeType() {
    var container, inputs, index;
    container = document.getElementById('tableStyle');
    inputs = container.getElementsByClassName('columns');
    for (index = 0; index < inputs.length; ++index) {
        if (inputs[index].value != "") {
            inputs[index].disabled = true;
            inputs[index].style.backgroundColor = "#0066FF";
            inputs[index].style.color = "white";
            inputs[index].style.opacity = "0.8";
        }
    }
}

window.onload = function() {
  changeType();
};

function typeToEdit() {
    var container, inputs, index;
    container = document.getElementById('tableStyle');
    inputs = container.getElementsByClassName('columns');
    for (index = 0; index < inputs.length; ++index) {
        if (inputs[index].value != "") {
            inputs[index].disabled = false;
            inputs[index].style.backgroundColor = "black";
            inputs[index].style.color = "white";
        }
    }
}