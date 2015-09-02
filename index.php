<!doctype>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="SRI: The System of Rice Intensification">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./images/icon.png" sizes="128x128">

    <title>The System of Rice Intensification</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" media="screen">
    <link rel="stylesheet" type="text/css" href="./css/resonsiveslides.css" media="screen">
    <link rel="stylesheet" type="text/css" href="./css/styles.css" media="screen">
    
    <!-- Javascript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/scroll.js"></script>

    <!-- Slider Javascript -->
    <script src="./js/responsiveslides.min.js"></script>
    <script>
      // Cover slider function
      $(function () {
        $(".rslides").responsiveSlides({
          auto: true,
          timeout: 4000,  
          pager: true,
          speed: 800,
        });
      });
    </script>
    
</head>
<body>

	<?php include './includes/navigation.html' ?>

	<!-- Slider -->
	<div class="cover">
		<ul class="rslides" id="slider2">
			<li>
				<img src="img/rice.jpg">
				<div class="caption">Random dummy image</div>
			</li>
			<li>
				<img src="img/rice2.jpg">
				<div class="caption">Other default image</div>
			</li>
		</ul>
	</div>
	
	<div class="container">

		<div class="section">
			<h1>About SRI</h1>

			<br><br>
		</div>

		<div class="section">
			<h1>Global Impact</h1>

			<br><br>
		</div>

		<div class="section">
			<h1>About Us</h1>

			<br><br>
		</div>

		<div class="section">
			<h1>Projects</h1>

			<br><br>
		</div>
	</div>

</body>
</html>