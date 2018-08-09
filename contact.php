<?php include 'includes/header.php'; ?>
<title>Laba Nepal</title>
</head>
<body>
<?php include 'includes/menu.php';  ?>
<section class="contact">
	<div class="container">
		<div class="row">
			<h2 class="title-h2 text-light  header-color text-center">Our Details</h2>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div >
					<div class="contact-information">
					<h3 class="title-h3 text-light">Contact Info</h3>
					<p>Welcome to our Website. We are glad to have you around.</p>

					<div class="row">
						<div class="contact-information-list">
							<div class=" col-md-6 col-sm-6 col-xs-6">
								<div class="contact-information-unit">
									<div class="contact-info-unit-icon">
										<i class="fas fa-map-marker-alt"></i>
									</div>

									<div class="contact-info-unit-text">
										<h4 class="title-h4 text-bold">Address</h4>
										<p>Anamnagar - 32 Kathmandu, Nepal</p>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="contact-information-unit">
									<div class="contact-info-unit-icon">
										<i class="fas fa-envelope"></i>
									</div>

									<div class="contact-info-unit-text">
										<h4 class="title-h4 text-bold">Email</h4>
										<p>info@labanepal.com</p>
									</div>
								</div>
							</div>

							<div class="clearfix"></div>
						    <div class="contact-info-list-top"><span class="line"></span></div>

							<div class=" col-md-6 col-sm-6 col-xs-6">
								<div class="contact-information-unit">
									<div class="contact-info-unit-icon">
										<i class="fas fa-phone"></i>
									</div>

									<div class="contact-info-unit-text">
										<h4 class="title-h4 text-bold">Phone</h4>
										<p>+977-1-4102721, 4102722, 4244804</p>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="contact-information-unit">
									<div class="contact-info-unit-icon">
										<i class="fas fa-clock"></i>
									</div>

									<div class="contact-info-unit-text">
										<h4 class="title-h4 text-bold">Opening Hours</h4>
										<p>10 AM - 5 PM</p>
									</div>
								</div>
							</div>

							<div class="clearfix"></div>
						    <div class="contact-info-list-top"><span class="line"></span></div>
							
							
							
							<div class="col-md-12 col-sm-12 col-xs-7 col-xs-offset-3">
								<div class="contact-share-box">
									<h4 class="title-h4 text-light">Follow Us</h4>
									<ul>
										<li><a href="" class="fb-media"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="" class="t-media"><i class="fab fa-twitter"></i></a></li>
										<li><a href="" class="link-media"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="" class="gp-media"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				
			</div>


			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="form-container">
					<div>
						<h3 class="title-h3 text-light">Send a Message</h3>
						<p>Your email address will not be published. Required fields are marked.</p>
					</div>
					
					<!-- <form action="#" class="contact-form"> -->
					<div class="contact-form">
						<form action="">
		                	<div class="form-group">
		                    	<input class="form-control c-form-control" placeholder="Name*" type="text">
		                    </div>
		                    <div class="form-group">
		                    	<input class="form-control c-form-control" placeholder="Email*" type="text">
		                  	</div>
		                  	<div class="form-group">
		                    	<input class="form-control c-form-control" placeholder="Mobile No*" type="text">
		                  	</div>
		                  	<div class="form-group">
		                  		<textarea class="form-control c-form-control" name="content" id="" cols="30" rows="6" placeholder="Message"></textarea>
		                  	</div>
		                    	<input class="common-btn c-btn c-bg-blue" value="Submit" disabled="" type="submit">
		                </form>
	                </div>
                </div>
				<!-- </form> -->
			
			
			</div>
			

			
				
		</div>
	</div>
</section>


<section class="map">
	<div class="contact-map">
		<div id="map">
		</div>
	</div>
</section>
<?php include 'includes/footer.php'; ?>

		<script>
						/*.......................................
			map for event location in innerevent page
			........................................*/
			function myMap() {
			var myCenter = new google.maps.LatLng(27.697272,85.328487);
			  var mapCanvas = document.getElementById("map");
			  var mapOptions = {center: myCenter, zoom: 20, mapTypeId: 'roadmap'};
			  var map = new google.maps.Map(mapCanvas, mapOptions);
			  var marker = new google.maps.Marker({
			  position:myCenter,
			  animation:google.maps.Animation.BOUNCE
			  });
			  marker.setMap(map);}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoBC6HMhvJOvkFiSAL1bvM3KDDRxtIvfU&callback=myMap">
	
</script>
</html>