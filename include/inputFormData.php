<?php    

    class InputFormData {
//        $result = $conn->query("SELECT * FROM `sheet` WHERE Date='"."{$date}"."'");
        function select($date) {
            require('db.php');
            $conn = new mysqli($servername, $username, $password, $dbname);
            $result = $conn->query("SELECT * FROM `sheet` WHERE Date='$date'");
            while($row = $result->fetch_assoc()) {
                $temp = "{$row['Zone']}" . "{$row['Time']}";
                $_POST[$temp] = $row['People'];
            }
            $result->close();
            $conn->close();
        }

        function insert($date) {
            require('db.php');
            require('inputFormHelper.php');
            $conn = new mysqli($servername, $username, $password, $dbname);
    //        if (isset($_POST['Signature8:30AM'])) {
    //            $sql = "INSERT INTO `sheet`(`Date`, `Zone`, `Time`, `People`) VALUES ('03/24/2015','HEY','7:30AM','5')";
    //            $conn->query($sql);
    //        }
    //    }
            foreach ($newArray as $titles) {
                foreach ($newTimes as $t) {
                    $temp = "{$titles}"."{$t}";
                    if (isset($_POST[$temp])) {
                        if ($_POST[$temp] != "") {
                            //"."{$date}"."','"."{$titles}"."','"."{$t}"."','"."{$_POST[$temp]}"."
                            $sqlCheck = "SELECT `Zone`, `Time` FROM `sheet` WHERE `Date`='$date' AND `Zone`='$titles' AND `Time`='$t'";
                            $tempRow = $conn->query($sqlCheck);
                            if ($tempRow->num_rows == 0) {
                                $sql = "INSERT INTO `sheet`(`Date`, `Zone`, `Time`, `People`, `InsertTime`) VALUES ('$date','$titles','$t','$_POST[$temp]', DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 4 HOUR),'%a, %d %b %Y %r'))";
                                $conn->query($sql);
                            } else {
                                $update = "UPDATE `sheet` SET `People`='$_POST[$temp]', `InsertTime`=DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 4 HOUR),'%a, %d %b %Y %r') WHERE `Date`='$date' AND `Zone`='$titles' AND `Time`='$t'";
                                $conn->query($update);
                            }
                        }
                    }
                }
            }
            $conn->close();
        }
        
        function insertTotalDatabase($date) {
            require('db.php');
            require('inputFormHelper.php');
            $conn = new mysqli($servername, $username, $password, $dbname);
            foreach ($newTimes as $time) {
                $temp = 'Time' . $time;
                if ($_POST[$temp] != 0) {
                    $sqlCheck = "SELECT `Zone`, `Time` FROM `sheet` WHERE `Date`='$date' AND `Zone`='Time' AND `Time`='$time'";
                    $tempRow = $conn->query($sqlCheck);
                    if ($tempRow->num_rows == 0) {
                        $sql = "INSERT INTO `sheet`(`Date`, `Zone`, `Time`, `People`, `InsertTime') VALUES ('$date','Time','$time','$_POST[$temp]',DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 4 HOUR),'%a, %d %b %Y %r'))";
                        $conn->query($sql);
                    } else {
                        $update = "UPDATE `sheet` SET `People`='$_POST[$temp]', `InsertTime`=DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 4 HOUR),'%a, %d %b %Y %r') WHERE `Date`='$date' AND `Zone`='Time' AND `Time`='$time'";
                        $conn->query($update);
                    }
                }
            }
            $conn->close();
            $tempRow->close();
        }
        
        
        function insertTotal ($date) {
            require('db.php');
            require('inputFormHelper.php');
            $conn = new mysqli($servername, $username, $password, $dbname);
            $counter = 0; 
            foreach ($newTimes as $t) {
                $totalNumber = null;
                $selectQuery = "SELECT `People` FROM `sheet` WHERE `Date`='$date' AND `Time`='$t' AND `Zone`!='Time'";
                $calculateRow = $conn->query($selectQuery);
                if ($calculateRow->num_rows != 0) {
                    while($row = $calculateRow->fetch_assoc()) {
                        $tempNumber = $row['People'];
                        $totalNumber = $totalNumber + $tempNumber;
                    }
                }
                if (isset($totalNumber)) {
                    $sqlCheck = "SELECT `Zone`, `Time` FROM `sheet` WHERE `Date`='$date' AND `Zone`='Time' AND `Time`='$newTimes[$counter]'";
                    $tempRow = $conn->query($sqlCheck);
                    if ($tempRow->num_rows == 0) {
                        $sql = "INSERT INTO `sheet`(`Date`, `Zone`, `Time`, `People`, `InsertTime`) VALUES ('$date','Time','$newTimes[$counter]','$totalNumber', DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 4 HOUR),'%a, %d %b %Y %r'))";
                        $conn->query($sql);
                    } else {
                        $update = "UPDATE `sheet` SET `People`='$totalNumber', `InsertTime`=DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 4 HOUR),'%a, %d %b %Y %r') WHERE `Date`='$date' AND `Zone`='Time' AND `Time`='$newTimes[$counter]'";
                        $conn->query($update);
                    }
                }
                $counter++;
            }
            $conn->close();
        }

            

        function delete($date) {
            require('db.php');
            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql = "DELETE FROM `sheet` WHERE `Date`='$date'";
            if ($conn->query($sql) === true) {
                $conn->close();
            }
        }
        
        
        function selectPrevious($date) {
            date_default_timezone_set("America/New_York");
            $date1 = strtotime("-1 day", strtotime($date));
            return date("m/d/Y", $date1);
        }
        
        function selectNext($date) {
            date_default_timezone_set("America/New_York");
            $date1 = strtotime("+1 day", strtotime($date));
            return date("m/d/Y", $date1);
        }
    }    
    
?>