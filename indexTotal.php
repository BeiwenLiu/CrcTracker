<?php

function retrieveLatestTime($date) {
    $found = false;
    $answer = null;
    $counter = 0;
    require('include/db.php');
    require('include/inputFormHelper.php');
    $conn = new mysqli($servername, $username, $password, $dbname);
    $select = "SELECT `People`, `Time` FROM `sheet` WHERE `Date`='$date' AND `Zone`='Time'";
    $row = $conn->query($select);
    $newTimesReversed = array_reverse($newTimes);
    while($rows = $row->fetch_assoc()) {
        echo $rows['Time'];
       while (!$found) {
           if ($rows['Time'] == $newTimesReversed[$counter]) {
               $answer = $rows['People'];
               $found = true;
           } else {
               $counter++;
           }
       }
    }
    return $answer;
}
?>


