<?php

function retrieveLatestTime($date) {
    $counter = 0;
    require('include/db.php');
    require('include/inputFormHelper.php');
    $conn = new mysqli($servername, $username, $password, $dbname);
    $select = "SELECT `People`, `Time` FROM `sheet` WHERE `Date`='$date' AND `Zone`='Time'";
    $row = $conn->query($select);
    
    $newTimesReversed = array_reverse($newTimes);
    $key = count($newTimesReversed);
    $answer = null;
    while($rows = $row->fetch_assoc()) {
        $temp = array_search($rows['Time'],$newTimesReversed);
        if ($temp < $key) {
            $key = $temp;
            $answer = $rows['People'];
        }
//        echo $rows['Time'];
//       while (!$found) {
//           if ($rows['Time'] == $newTimesReversed[$counter]) {
//               $answer = $rows['People'];
//               $found = true;
//           } else {
//               $counter++;
//           }
//       }
    }
    return $answer;
}
?>


