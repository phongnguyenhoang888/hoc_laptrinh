<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Demo php</title>

	<!-- font google -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="home-phone.css"> -->
	
	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/home.js" ></script>

</head>
<body>


    @include("layout_band.header_band")

    @yield("content_band")

    @include("layout_band.footer_band")


</body>
</html>
