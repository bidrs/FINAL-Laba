<?php include 'includes/header.php'; ?>
<title>Laba Nepal</title>
</head>
<body>
<?php include 'includes/menu.php';  ?>
<section class="contact">
	<div class="container">
		<div class="row">
			<h2 class="text-center">Contact Us</h2>
			<div class=" col-md-6">
				<div>
					
					<h3 class="title-h2 text-light text-center">Send a Message</h3>
				</div>
				
				<form action="#" class="contact-form">
				  <div class="form-group ">
				  <div >
				    <input class="form-control c-form-control no-box-shadow no-focus" type="text" placeholder="Your Name">
				  </div>
				  <div >
				    <input class="form-control c-form-control no-box-shadow  no-focus"  type="email" placeholder="Your Email">
				  </div>
				  <div >
				  	 <input class="form-control c-form-control no-box-shadow no-focus"  type="text" placeholder="Your Number">
				  </div>
				  <div >
				  	 <textarea rows="4" cols="50"  class="form-control c-form-control no-box-shadow no-focus"  type="text" placeholder="Your Message"></textarea>
				  </div>
				  <div class="col-md- text-center">
				  	<button class="btn c-btn c-bg-blue common-btn  text-center" >
				  		Submit
				  	</button>
				  </div>
				</div>
				</form>
			
			
			</div>
			<div class="col-md-6">
				<div >
					<div class="contact-information">
					<h3 class="title-h2 text-light text-center">Contact Info</h3>
					<div class="contact-information-list col-md-12">
						<div class=" col-md-6">
							<div class="contact-information-unit">
								<i class="fas fa-location-arrow"></i>
								<h4 >Address</h4>
								<p>Anamnagar - 32 Kathmandu, Nepal</p>
							</div>
						</div>
						<div class=" col-md-6">
							<div class="contact-information-unit">
								<i class="far fa-envelope"></i>
								<h4 >Email</h4>
								<p>info@labanepal.com</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="contact-information-unit">
								<i class="fas fa-phone"></i>
								<h4 >Phone</h4>
								<p>+977-1-4102721, 4102722, 4244804</p>
							</div>
						</div>
						<div class="contact-information-unit col-md-6">
							<div class="contact-information-unit">
								<i class="fas fa-clock"></i>
								<h4 >Opening Hours</h4>
								<p>10 AM - 5 PM</p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="contact-information-unit contact-information-social">
								<a href="#"><i class="fab fa-facebook-f"></i> </a>
								<a href="#"><i class="fab fa-twitter"></i>  </a>
								<a href="#"><i class="fab fa-linkedin-in"></i>  </a>
								<a href="#"><i class="fab fa-google-plus-g"></i>  </a>
							</div>
						</div>
					</div>
				</div>
				</div>
				
			</div>
			<div class="col-md-12">
				<div class="contact-map">
					<h3 class="title-h2 text-light text-center">Location on Map</h3>
					<div id="map" >
					</div>
				</div>
				
			</div>
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