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
    <link rel="stylesheet" type="text/css" href="./css/unslider.css" media="screen">
    <link rel="stylesheet" type="text/css" href="./css/styles.css" media="screen">

    <!-- No background for nav bar on front page -->
    <style>
    	.nav-background{
    		display: none;
    	}
    </style>
    
    <!-- Javascript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/scroll.js"></script>
	<script src="./js/unslider.min.js"></script>
    
</head>
<body>

	<?php include './includes/navigation.html' ?>

	<!-- Slider -->

	<div class="banner">
    <ul>
        <li>
        	<img src="img/rice.jpg">
        	<div class="caption">This is a slide.</div>
        </li>
        <li>
        	<img src="img/rice2.jpg">
        	<div class="caption">This is a slide.</div>
        </li>
    </ul>

    <!-- The HTML -->
	<a href="#" class="unslider-arrow prev">Previous slide</a>
	<a href="#" class="unslider-arrow next">Next slide</a>

	<script>
	    var unslider = $('.banner').unslider({
			speed: 500,               //  The speed to animate each slide (in milliseconds)
			delay: 3000,              //  The delay between slide animations (in milliseconds)
			keys: true,               //  Enable keyboard (left, right) arrow shortcuts
			dots: true,               //  Display dot navigation
			fluid: false              //  Support responsive design. May break non-responsive designs
		});
	    
	    $('.unslider-arrow').click(function() {
	        var fn = this.className.split(' ')[1];
	        
	        //  Either do unslider.data('unslider').next() or .prev() depending on the className
	        unslider.data('unslider')[fn]();
	    });
	</script>
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

			<div class="row">
				<div class="col-sm-3">
					<div class="people_wrap">
						<div class="people_img"><img src="./img/people_erika.png"></div>
						<div class="people_name">Erika Styger</div>
						<div class="people_description">Director of Programs for SRI-Rice. She has a PhD in Crop and Soil Sciences from Cornell University and has over 20 years experience with research and development programs in Africa. </div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="people_wrap">
						<div class="people_img"><img src="./img/people_lucy.png"></div>
						<div class="people_name">Lucy Fisher</div>
						<div class="people_description">is Director of Communications at SRI-Rice. She oversees knowledge management initiatives and liaison with SRI networks around the world. She developed and maintains the SRI website (http://sririce.org) and social networking sites.</div>
					</div>
				</div>

				

				<div class="col-sm-3">
					<div class="people_wrap">
						<div class="people_img"><img src="./img/people_devon.png"></div>
						<div class="people_name">Devon Jenkins</div>
						<div class="people_description">Technical specialist with SRI-Rice assigned to the World Bank-sponsored project on "Improving and Scaling Up SRI in West Africa</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="people_wrap">
						<div class="people_img"><img src="./img/people_norman.png"></div>
						<div class="people_name">Norman Uphoff </div>
						<div class="people_description">Senior Advisor for SRI-Rice. He is carrying on the networking, research and writing that he has been doing on behalf of SRI since 2000, helping to build up the International SRI Network and strengthen the knowledge base for SRI and its extension to other crops.</div>
					</div>
				</div>
			</div>

			<br><br>
		</div>

		<div class="section">
			<h1>Projects</h1>

			<br><br>
		</div>
	</div>

</body>
</html>