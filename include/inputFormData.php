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
                                $sql = "INSERT INTO `sheet`(`Date`, `Zone`, `Time`, `People`) VALUES ('$date','$titles','$t','$_POST[$temp]')";
                                $conn->query($sql);
                            } else {
                                $update = "UPDATE `sheet` SET `People`='$_POST[$temp]' WHERE `Date`='$date' AND `Zone`='$titles' AND `Time`='$t'";
                                $conn->query($update);
                            }
                        }
                    }
                }
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