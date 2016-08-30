<?php

function retrieveLatestTime($date) {
    require('include/db.php');
    require('include/inputFormHelper.php');
    $conn = new mysqli($servername, $username, $password, $dbname);
    $select = "SELECT `People`, `Time`, `InsertTime` FROM `sheet` WHERE `Date`='$date' AND `Zone`='Time'";
    $row = $conn->query($select);
    
    $newTimesReversed = array_reverse($newTimes);
    $key = count($newTimesReversed);
    $answer = null;
    $timeUpdate = null;
    while($rows = $row->fetch_assoc()) {
        $temp = array_search($rows['Time'],$newTimesReversed);
        if ($temp < $key) {
            $key = $temp;
            $answer = $rows['People'];
            $timeUpdate = $rows['InsertTime'];
        }
    }
    if ($answer == null) {
        $newDate = date("m/d/Y", strtotime(' -1 day'));
        $newSelect = "SELECT `People`, `Time`, `InsertTime` FROM `sheet` WHERE `Date`='$newDate' AND `Zone`='Time'";
        $newRow = $conn->query($newSelect);
        $newKey = count($newTimesReversed);
        while($newRows = $newRow->fetch_assoc()) {
            $newTemp = array_search($newRows['Time'],$newTimesReversed);
            if ($newTemp < $newKey) {
                $newKey = $newTemp;
                $answer = $newRows['People'];
                $timeUpdate = $newRows['InsertTime'];
            }
        }
    }
    $timeAnswer = $newTimesReversed[$temp];
    if ($answer == null) {
        $answer = "Not Available";
        $timeUpdate = "Not Available";
        $timeAnswer = null;
    }
    $answerArray = array($answer, $timeUpdate, $timeAnswer);
    return $answerArray;
}

function retrieveNumbers($date, $time) {
    require('include/db.php');
    require('include/inputFormHelper.php');
    $tempArray = $newArray;
    $returnArray = $displayTitles;
    $conn = new mysqli($servername, $username, $password, $dbname);
    $select = "SELECT `People`, `Zone` FROM `sheet` WHERE `Date`='$date' AND `Time` = '6:30AM' AND `Zone` != 'Time'";
    $row = $conn->query($select);
    while($rows = $row->fetch_assoc()) {
        $temp = array_search($rows['Zone'],$tempArray);
        $people = $rows['People'];
        $timeUpdate = $rows['Zone'];
        $returnArray[$temp] = $timeUpdate . " : " . $people;
    }

    return $returnArray;
}
?>


