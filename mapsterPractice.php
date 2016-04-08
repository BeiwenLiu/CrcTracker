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
	<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script language="javascript" src="js/jquery.imagemapster.js"></script>
</head>
<body>


<img src="images/CrcFloorPlanAlt.png" id="shape1" width="1927" height="1501" alt="Insert Alt" usemap="#shape1" border="0">

<map name="shape1" id="image_map">
    <area shape="poly" coords=" 558,1424" href="http://image-mapper.com" alt="red hotspot"/>
    <area shape="poly" coords=" 700,1150, 811,1180, 1085,1161, 1092,1167, 1204,1164, 1204,934, 1205,932, 699,940, 701,1147" href="http://image-mapper.com" alt="green hotspot"/>
    <area shape="poly" coords=" 649,1150, 695,1149, 694,746, 694,744, 600,753, 600,846, 429,848, 429,882, 628,882, 628,1043, 647,1043, 648,1149" href="http://image-mapper.com" alt="purple hotspot"/>
    <area shape="poly" coords=" 430,844, 430,736, 473,733, 476,728, 548,728, 552,734, 559,734, 563,733, 568,739, 575,739, 580,738, 583,736, 594,752, 596,755, 595,841, 433,843" href="http://image-mapper.com" alt="yellow hotspot"/>
    <area shape="poly" coords=" 476,723, 475,304, 584,303, 584,434, 689,435, 693,738, 599,749, 588,733, 587,731, 588,723, 584,717, 578,712, 570,712, 564,717, 562,719, 558,717, 553,719, 549,721, 547,722, 479,723" href="http://image-mapper.com" alt="olive hotspot"/>
    <area shape="poly" coords=" 589,431, 589,302, 592,279, 633,278, 718,278, 772,277, 813,276, 920,278, 1003,278, 1076,278, 1112,278, 1155,277, 1270,277, 1340,278, 1379,277, 1484,277, 1485,422, 1345,430, 1167,430, 1095,431, 993,432, 821,431, 660,430, 592,430" href="http://image-mapper.com" alt="teal hotspot"/>
    <area shape="poly" coords=" 860,437, 862,534, 1226,533, 1223,435, 863,437" href="http://image-mapper.com" alt="brown hotspot"/>
    <area shape="poly" coords=" 698,640, 695,436, 855,437, 857,539, 1229,537, 1381,541, 1383,635, 701,639" href="http://image-mapper.com" alt="blue hotspot"/>
    <area shape="poly" coords=" 1231,533, 1228,435, 1379,433, 1382,536, 1234,533" href="http://image-mapper.com" alt="magenta hotspot"/>
    <area shape="poly" coords=" 1385,433, 1481,428, 1483,472, 1528,474, 1528,552, 1568,565, 1558,675, 1493,669, 1491,670, 1477,767, 1466,767, 1438,753, 1437,731, 1437,727, 1389,641, 1384,435" href="http://image-mapper.com" alt="gold hotspot"/>
    <area shape="poly" coords=" 698,646, 698,710, 1418,706, 1383,642, 699,645" href="http://image-mapper.com" alt="violet hotspot"/>
    <area shape="poly" coords=" 1495,677, 1483,772, 1463,873, 1461,1054, 1534,1054, 1537,865, 1555,682, 1498,676" href="http://image-mapper.com" alt="gray hotspot"/>
    <area shape="poly" coords=" 699,717, 699,935, 1205,926, 1206,875, 1458,870, 1475,775, 1433,760, 1432,730, 1420,713, 1420,712, 701,716" href="http://image-mapper.com" alt="lime hotspot"/>
    <area shape="poly" coords=" 1211,881, 1209,1055, 1456,1056, 1457,876, 1458,875, 1213,880" href="http://image-mapper.com" alt="silver hotspot"/>
    <area shape="poly" coords=" 632,273, 629,62, 1462,63, 1465,76, 1458,91, 1456,270, 1328,272, 1285,272, 1157,271, 1113,272, 986,272, 942,273, 813,272, 775,272, 635,273" href="http://image-mapper.com" alt="plum hotspot"/>
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
</body>
