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


<img src="images/CrcFloorPlan.png" id="shape1" width="1927" height="1501" alt="Insert Alt" usemap="#shape1" border="0">

<map name="shape1" id="image_map">
	<area date-key="TX" shape="poly" coords=" 740,807, 1103,823, 1110,1172, 722,1181, 737,809" href="#" alt="red hotspot"/>
	<area date-key="X" shape="poly" coords=" 437,265, 714,286, 701,592, 449,601, 420,273, 441,264" href="#" alt="green hotspot"/>
	<area date-key="Y" shape="poly" coords=" 1391,763, 943,741, 1006,463, 1419,526, 1402,765" href="#" alt="purple hotspot"/>
	<area date-key="Z" shape="poly" coords=" 411,743, 454,741, 492,741, 494,738, 497,734, 501,731, 506,732, 510,732, 514,728, 519,727, 525,728, 530,730, 533,737, 534,744, 532,748, 528,752, 522,755, 514,755, 510,750, 508,748, 504,749, 498,749, 495,747, 492,745" href="#" alt="yellow hotspot"/>
</map>


<script language="javascript">
$(document).ready(function() {
	$('#shape1').mapster({
		mapKey: 'date-key',
		stroke: true,
        render_highlight: {
            strokeWidth: 2
        }
        // areas: [{
        //     key: 'TX',
        //     stroke: false,
        //     render_select: { 
        //         fillOpacity: 1 
        //     }
        // },
        // { 
        //     key: 'X',
        //     fill: false
        // }]
});
});
</script>
</body>
