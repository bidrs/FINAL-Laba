  <?php include 'includes/header.php'; ?>
  <link rel="stylesheet" type="text/css" href="css/plugins/perspectiveRules.css">

	<link rel="stylesheet" type="text/css" href="css/pages/eventslist.css">
	<link rel="stylesheet" type="text/css" href="css/pages/innerevent.css">
	<link rel="stylesheet" type="text/css" href="css/responsive/event-responsive.css">

	<title>Events List</title>

</head>
<body>
<!-- .........................
		Navigation file named menu.php
		........................... -->
<?php include 'includes/menu.php';  ?>
<section class="event">
	<div class="event-overlay">
		<div id="demo1">
		    <div id="particle-target" ></div>
		</div>
		<div class="event-text col-md-12">
			<div id="example1" data-countdown="10/01/2018 05:06:59"></div>
			<div class="event-title"><p>Microsoft Workshop & Training</p></div>
			<div class="event-location">
				<i class="fas fa-map-marker-alt"></i><span><p>Anamnagar, Kathmandu</p></span>
			</div>
			<div class="event-date">
				<i class="far fa-calendar-alt"></i><span><p>23-27 Dec 2018</p></span>
			</div>
			<div class="event-button">
				<a href="innerevent.php" class="btn btn-primary">Register</a>
			</div>
		</div>
	</div>
</section>
<section class="other-events">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="title-h2 col-md-offset-1">Other Upcoming Events</p>
				<div class="other-events-dropdown col-md-offset-1">
					<div class="btn-group dropdown " >
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span>Filter</span><i class="fas fa-caret-down"></i>
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<a class="dropdown-item" href="#">Separated link</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="other-events-list">
					<div class="other-events-list-unit">
					<div class="col-md-3 col-sm-3 col-xs-4 other-event-list-border-left">
						<div class="other-events-position other-events-list-unit-left">
							<div class="other-events-list-unit-image">
								<img src="images/2.jpg">
							</div>
							<div class="other-events-list-unit-date">
								<p>
									<span class="other-events-list-unit-date-number">07</span>
									<br>
									<span class="other-events-list-unit-date-month">DEC</span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8 ">
						<div class="other-events-position other-events-list-unit-detail">
							<div class="other-events-list-unit-detail-title">
							<a href="innerevent.php">
								<p>Event List 1</p>
							</a>	
							</div>
							<div class="other-events-list-unit-detail-description">
								<span>
									<i class="far fa-clock"></i>
									<p class="other-events-list-unit-detail-description-duration"> Time:</p>
									<p class="other-events-list-unit-detail-description-hours" > 10:00 am</p>
								</span>
								<span>
									<i class="fas fa-location-arrow"></i>
									<p class="other-events-list-unit-detail-description-level">Location:</p>
									<p class="other-events-list-unit-detail-description-type"> Kathmandu</p>
								</span>
							</div>
							<div class="other-events-list-unit-detail-description-subtitle">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do jhauroi hjau Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do jhauroi hjau...</p>
							</div>
						</div>
					</div>
				</div>
				<div class="other-events-list-unit">
					<div class="col-md-3 col-sm-3 col-xs-4 other-event-list-border-left">
						<div class="other-events-position other-events-list-unit-left">
							<div class="other-events-list-unit-image">
								<img src="images/2.jpg">
							</div>
							<div class="other-events-list-unit-date">
								<p>
									<span class="other-events-list-unit-date-number">19</span>
									<br>
									<span class="other-events-list-unit-date-month">DEC</span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="other-events-position other-events-list-unit-detail">
							<div class="other-events-list-unit-detail-title">
								<p>Event List 2</p>
							</div>
							<div class="other-events-list-unit-detail-description">
								<span>
									<i class="far fa-clock"></i>
									<p class="other-events-list-unit-detail-description-duration"> Time:</p>
									<p class="other-events-list-unit-detail-description-hours" > 10:00 am</p>
								</span>
								<span>
									<i class="fas fa-location-arrow"></i>
									<p class="other-events-list-unit-detail-description-level">Location:</p>
									<p class="other-events-list-unit-detail-description-type"> Banepa</p>
								</span>
							</div>
							<div class="other-events-list-unit-detail-description-subtitle">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do jhauroi hjau Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do jhauroi hjau...</p>
							</div>
						</div>
					</div>
				</div>
				<div class="other-events-list-unit">
					<div class="col-md-3 col-sm-3 col-xs-4 other-event-list-border-left">
						<div class="other-events-position other-events-list-unit-left">
							<div class="other-events-list-unit-image">
								<img src="images/4.jpg">
							</div>
							<div class="other-events-list-unit-date">
								<p>
									<span class="other-events-list-unit-date-number">23</span>
									<br>
									<span class="other-events-list-unit-date-month">DEC</span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="other-events-position other-events-list-unit-detail">
							<div class="other-events-list-unit-detail-title">
								<p>Event List 3</p>
							</div>
							<div class="other-events-list-unit-detail-description">
								<span>
									<i class="far fa-clock"></i>
									<p class="other-events-list-unit-detail-description-duration"> Time:</p>
									<p class="other-events-list-unit-detail-description-hours" > 10:00 am</p>
								</span>
								<span>
									<i class="fas fa-location-arrow"></i>
									<p class="other-events-list-unit-detail-description-level">Location:</p>
									<p class="other-events-list-unit-detail-description-type"> Baneshwor</p>
								</span>
							</div>
							<div class="other-events-list-unit-detail-description-subtitle">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do jhauroi hjau Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do jhauroi hjau...</p>
							</div>
						</div>
					</div>
				</div>
				</div>
				

			</div>
			<!-- <div class="col-md-4">
				<div id='calendar'></div>
			</div> -->
		</div>
	</div>
</section>
    			  <!-- Footer --->
                  <?php include 'includes/footer.php'; ?>
					<script src="js/plugins/jquery.particleground.min.js"></script>
					<script>
						/*...........................................
						particles for eventlist and inner event pages
						............................................*/
						var particles = {
						    dotColor: '#fff',
						    lineColor: '#fff',
						    density: 15000,
						    parallax: false
						};
						var particleDensity;
						var options = {
						        effectWeight: 4,
						        outerBuffer: 1.05,
						        elementDepth: 200,
						        perspectiveMulti: 1.5,
						        enableSmoothing: true,
						        onInit: function() {
						          $('#particle-target').particleground(particles);
						        }
						    };

						$('#min-max-tag').click(function(){
						  if ($('#demo-menu').hasClass('closed')) {
						    $('#demo-menu').removeClass('closed').addClass('open');
						  } else {
						    $('#demo-menu').removeClass('open').addClass('closed');
						  }
						});

						
					</script>
					<script type="text/javascript" src="js/plugins/jquery.logosDistort.min.js"></script>
					<script>
						$(document).ready(function() {

						  $('#demo1').logosDistort(options);

						});
					</script>
					<script type="text/javascript" src="js/plugins/jquery.countdown.min.js"></script>
					<script>
						/*.................................................
						Count Down for both event list and innerevent pages
						..................................................*/
						$(function() {
						$('[data-countdown]').each(function() {
						var $this = $(this),
						  finalDate = $(this).data('countdown');
						$this.countdown(finalDate, function(event) {
						  $this.html(event.strftime('<span>%D</span> <p>days</p> <span>%H</span> <p>hours</p> <span>%M</span> <p>minutes</p> <span>%S</span> <p>seconds</p>'));
						});
						});
						});

					</script>
</html>