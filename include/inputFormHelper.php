<?php
$titles=array("Time", "Signature", "L. Dumbbell", "SYNRGY/ABS", "Racquetball", "Stretch Mats", "Bikes", "Steppers", "Treadmills", "Elipticals", "Smith/DAP", "Squat", "H. Dumbbell", "Plate Loaded", "MTS");

$times = array("6:30 AM","7:30 AM","8:30 AM","9:30 AM","10:30 AM","11:30 AM","12:30 PM","1:30 PM","2:30 PM","3:30 PM","4:30  PM","5:30 PM","7:30 PM","8:30 PM","9:30 PM","10:30 PM","11:30 PM");



$total = array();

$newTimes = array();

foreach ($times as $index) {
    array_push($newTimes, str_replace(' ', '', $index));
}

foreach ($newTimes as $something) {
    array_push($total, 'Time' . $something);
}

$newArray = array("Signature","LDumbbell","ABS","Racquetball","Stretch","Bikes","Steppers","Treadmills","Elipticals","Smith","Squat","HDumbbell","Plate","MTS");
$combinedArray = array();

foreach ($newArray as $columns) {
    foreach ($newTimes as $columns1) {
        array_push($combinedArray, "{$columns}" . "{$columns1}");
    }
}

?>
