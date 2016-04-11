<?php

function retrieveLatestTime($date) {
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
    }
    if ($answer == null) {
        $newDate = date("m/d/Y", strtotime(' -1 day'));
        $newSelect = "SELECT `People`, `Time` FROM `sheet` WHERE `Date`='$newDate' AND `Zone`='Time'";
        $newRow = $conn->query($newSelect);
        $newKey = count($newTimesReversed);
        while($newRows = $newRow->fetch_assoc()) {
            $newTemp = array_search($newRows['Time'],$newTimesReversed);
            if ($newTemp < $newKey) {
                $newKey = $newTemp;
                $answer = $newRows['People'];
            }
        }
    }
    if ($answer == null) {
        $answer = "Not Available";
    }
    return $answer;
}
?>


