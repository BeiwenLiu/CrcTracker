<?php
require_once('include/session.php');
require_once('include/inputFormHelper.php');
require_once('include/inputFormData.php');
require_once('include/inputFormNavigation.php');


if (!isset($_SESSION['username'])) {
    header("Location: /loginpage.php");
}

if(!isset($_SESSION['function_ran'])){ 
    date_default_timezone_set("America/New_York");
    $_SESSION['Date'] = date("m/d/Y");
    $_SESSION['function_ran'] = true;
}

$form = new InputFormData;

    if (isset($_POST['Submit'])) {
        $form->insert($_SESSION['Date']);
        $form->insertTotal($_SESSION['Date']);
        unset($_POST['Submit']);
    }

    if (isset($_POST['Delete'])) {
        $form->delete($_SESSION['Date']);
        unset($_POST['Delete']);
    }

    if (isset($_POST['previous'])) {
        $_SESSION['Date'] = $form->selectPrevious($_SESSION['Date']);
        unset($_POST['previous']);
    }

    if (isset($_POST['next'])) {
        $_SESSION['Date'] = $form->selectNext($_SESSION['Date']);
        unset($_POST['next']);
    }

    if (isset($_POST['Search'])) {
        if (isset($_POST['searchBar'])) {
            $temp = $_POST['searchBar'];
            $_SESSION['Date'] = $temp;
        } else {
            $errorMessage = "Error";
        }
        unset($_POST['Search']);
    }

    if (isset($_POST['Export'])) {
        header("Location: /exportPage.php");
        unset($_POST['Export']);
    }


    $form->select($_SESSION['Date']);

?>
<html lang="en">
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CRC</title>
        
        
<!--    <script src="js/inputFormAJAX.js"></script>    -->
    <script src="js/jquery.js"></script>
<!--    <script type="text/javascript" src="js/inputFormJQuery.js"></script>-->
    <!--inputForm Page CSS -->
    <link href="css/inputForm.css" rel="stylesheet">
      <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- inputForm JavaScript -->
    <script src="js/inputForm.js"></script>
    <script src="js/date.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        
    

</head>

    <body>

   <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                 <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="index.php">
                    <i class="fa fa-play-circle"></i>  <span class="light">Back To</span> CRC
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                         <form name="hidden-form" method="POST">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a><button class="navigationButton" name="logout">Logout</button></a>
                    </li>
                    <li>
                        <a><button class="navigationButton" href="exportPage.php">Display</button></a>
                    </li>
                    <li>
                        <a><button class="navigationButton">Something</button></a>
                    </li>
                </ul>
                        </form>
            </div>
        </div>
        </div>
        </div>
        </nav>
        <header id="intro3">
        <div id="boxForm1"> 
            <div id="boxFormChild1">
                <form name="hidden-form" method="POST"> 
                    <?php if (isset($errorMessage)) {?>
                        <label <?php echo $errorMessage?>></label>
                <?php } ?>
                    <input class="SearchBar" name="searchBar" placeholder=<?php echo $_SESSION['Date']?>> 
                    <input class="SearchBar" type="Submit" name="Search" value="Search">
                    </br>
                <button id="buttonLeft" class="buttonDisplay" type="Submit" name="previous"><font size="3px">previous</font></br><font id="leftArrow" size="60px">&larr;</font></button>
            <label id="labelid"><?php echo $_SESSION['Date']; ?></label>  
<!--
                <script type="text/javascript">
                        setDate();
                </script>
-->   
            <button id="buttonRight" class="buttonDisplay" type="Submit" name="next"><font size="3px">next</font></br><font size="60px">&rarr;</font></button>
                </br>
                
                
                <label id="timeid">
                </label>
                    <script type="text/javascript">
                        setInterval(updateClock, 1000);
                </script>
            <table id="tableStyle">
                <?php $counter = 0; ?>
                <?php foreach ($titles as $something) {?>
                <tr>
                    <td><?php echo $something?></td>
                    <?php foreach ($times as $columns) {?>
                    <?php if ($something == "Time") {?>
                        <td><?php echo $columns;?></td>
                    <?php } else {?>
                        <td><input type="number" name="<?php echo $combinedArray[$counter];?>" value="<?php echo $_POST[$combinedArray[$counter]];?>" class="columns" style="display:table-cell ; width:100%"></td>
                    <?php $counter++; ?>
                    <?php } ?>
                <?php }?>
                    </tr>
                <?php }?>
                <tr>
                    <td>Total</td>
                <?php $counter = 0; foreach ($newTimes as $t) {?>
                        <?php $totalNumber = 0; ?>
                    <?php foreach ($newArray as $t1) { ?>
                        <?php $temp = "{$t1}" . "{$t}"; ?>
                        <?php if (isset($_POST[$temp])) { ?>
                            <?php if ($_POST[$temp] != "") { ?>
                                <?php $totalNumber = $totalNumber + $_POST[$temp]; ?>
                            <?php } } ?>
                    <?php } ?>
                    <?php if (isset($totalNumber)) { ?>
                        <td><input id="inputColumn" class="total" name="<?php echo $total[$counter];?>" style="display:table-cell ; width:100%" value="<?php echo $totalNumber; ?>"></td>
                            <?php } ?> 
                    <?php $counter++; ?>
                    <?php } ?>
                </tr>
            
                
        </table>
                <input id="inputSubmit" type="Submit" style="width:100px" value="Submit" name="Submit">
                <input id="inputEdit" type="button" style="width:100px" value="Edit" name="Edit" onclick="typeToEdit()">
                </br>
                <input id="export" type="Submit" style="width:100px" value="Export Table" name="Export">
                <input id="inputDelete" type="Submit" style="width:100px" value="Delete Table" name="Delete">
                </form>
            </div>
            </div>
        </header>
    </body>

<!--    <script src="js/inputForm2.js"></script>-->
<!-- jQuery -->
    
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

    

</html>