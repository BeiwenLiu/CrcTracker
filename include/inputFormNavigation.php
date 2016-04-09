<?php 
if (isset($_POST['logout'])) {
    unset($_POST['logout']);
    session_destroy();
    session_unset();
    header('Location: loginpage.php'); 
}
?>