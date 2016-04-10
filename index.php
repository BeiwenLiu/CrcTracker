<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CRC</title>

    <link href="css/index.css" rel="stylesheet">
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script language="javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script language="javascript" src="js/inputForm.js"></script>
    
    <script language="javascript" src="js/jquery.imagemapster.js"></script>
    
    <script language="javascript" src="js/imageResize.js"></script>
    <script language="javascript" src="toggle.js"></script>

    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button id="toggle" type="button" class="navbar-toggle" >
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Start</span> CRC
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="toggleDiv" class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="loginpage.php">Admin Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#map1">Map</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">CRC</h1>
                        <p class="intro-text">A web app, dedicated to providing you the most up to date number of people at the gym!</p>
                        <a href="#map1" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Download Section -->
    
<!--
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Download Grayscale</h2>
                    <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
                </div>
            </div>
        </div>
    </section>
-->
    
    
    <section id="map1">
        
    <div class="line"></div>
        <label class="title" id="labelid"></label>
        <script type="text/javascript">
                        setDate();
                </script>
        <label id="timeid" class="title">
        </label>
         <script type="text/javascript">
                        setInterval(updateClock, 1000);
                </script>
        <label class="title" id="number">Number of people</label>
<img src="images/CrcFloorPlanAlt.png" class="imageResize" id="shape1"  alt="Insert Alt" usemap="#shape1" border="0">

<map name="shape1" id="image_map">
    <area shape="poly" coords=" 558,1424" href="#" alt="red hotspot"/>
    <area shape="poly" coords=" 700,1150, 811,1180, 1085,1161, 1092,1167, 1204,1164, 1204,934, 1205,932, 699,940, 701,1147" href="#" alt="green hotspot"/>
    <area shape="poly" coords=" 649,1150, 695,1149, 694,746, 694,744, 600,753, 600,846, 429,848, 429,882, 628,882, 628,1043, 647,1043, 648,1149" href="#" alt="purple hotspot"/>
    <area shape="poly" coords=" 430,844, 430,736, 473,733, 476,728, 548,728, 552,734, 559,734, 563,733, 568,739, 575,739, 580,738, 583,736, 594,752, 596,755, 595,841, 433,843" href="#" alt="yellow hotspot"/>
    <area shape="poly" coords=" 476,723, 475,304, 584,303, 584,434, 689,435, 693,738, 599,749, 588,733, 587,731, 588,723, 584,717, 578,712, 570,712, 564,717, 562,719, 558,717, 553,719, 549,721, 547,722, 479,723" href="#" alt="olive hotspot"/>
    <area shape="poly" coords=" 589,431, 589,302, 592,279, 633,278, 718,278, 772,277, 813,276, 920,278, 1003,278, 1076,278, 1112,278, 1155,277, 1270,277, 1340,278, 1379,277, 1484,277, 1485,422, 1345,430, 1167,430, 1095,431, 993,432, 821,431, 660,430, 592,430" href="#" alt="teal hotspot"/>
    <area shape="poly" coords=" 860,437, 862,534, 1226,533, 1223,435, 863,437" href="#" alt="brown hotspot"/>
    <area shape="poly" coords=" 698,640, 695,436, 855,437, 857,539, 1229,537, 1381,541, 1383,635, 701,639" href="#" alt="blue hotspot"/>
    <area shape="poly" coords=" 1231,533, 1228,435, 1379,433, 1382,536, 1234,533" href="http://image-mapper.com" alt="magenta hotspot"/>
    <area shape="poly" coords=" 1385,433, 1481,428, 1483,472, 1528,474, 1528,552, 1568,565, 1558,675, 1493,669, 1491,670, 1477,767, 1466,767, 1438,753, 1437,731, 1437,727, 1389,641, 1384,435" href="#" alt="gold hotspot"/>
    <area shape="poly" coords=" 698,646, 698,710, 1418,706, 1383,642, 699,645" href="#" alt="violet hotspot"/>
    <area shape="poly" coords=" 1495,677, 1483,772, 1463,873, 1461,1054, 1534,1054, 1537,865, 1555,682, 1498,676" href="http://image-mapper.com" alt="gray hotspot"/>
    <area shape="poly" coords=" 699,717, 699,935, 1205,926, 1206,875, 1458,870, 1475,775, 1433,760, 1432,730, 1420,713, 1420,712, 701,716" href="#" alt="lime hotspot"/>
    <area shape="poly" coords=" 1211,881, 1209,1055, 1456,1056, 1457,876, 1458,875, 1213,880" href="#" alt="silver hotspot"/>
    <area shape="poly" coords=" 632,273, 629,62, 1462,63, 1465,76, 1458,91, 1456,270, 1328,272, 1285,272, 1157,271, 1113,272, 986,272, 942,273, 813,272, 775,272, 635,273" href="#" alt="plum hotspot"/>
</map>


<script language="javascript">
$(document).ready(function() {
    $('#shape1').mapster({
        fillOpacity: .7
        // mapKey: 'date-key',
        // stroke: true,
  //       render_highlight: {
  //           strokeWidth: 2,
  //           fillOpacity: .4
  //       },
  //       areas: [{
  //           key: 'TX',
  //           toolTip: "HEY",
  //           stroke: false,
  //           render_select: { 
  //               fillOpacity: .6
  //           }
  //       },
  //       { 
  //           key: 'X',
  //           fill: false
  //       }]
});
});
</script>
        
        <div class="line"></div>

    <!-- <div class="fb-connect"></div> -->
    </section>

    <!-- Contact Section -->
    <!-- <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Beiwen Liu</h2>

                <p>Feel free to provide me feedback or any issues relating to this app!</p>

                <p><a href="mailto:beiwenl@gmail.com.com">beiwenl@gmail.com</a>
                </p>
            </div>
        </div>
    </section> -->

    

    <!-- Footer -->
    

</body>

<footer>
        <div class="content-section text-center">
            <p>Copyright &copy; CRC 2016</p>
        </div>
    </footer>

    <!-- // <script src="js/jquery.js"></script> -->
    <!-- jQuery -->
     <!-- 
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
     
    <script src="js/jquery.easing.min.js"></script>
   
    
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
</html>
