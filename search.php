<?php include 'includes/header.php'; ?>
		<link rel="stylesheet" type="text/css" href="css/pages/search.css">
		<title>Course List</title>

	</head>
	<body>
		<!-- .........................
		Navigation file named menu.php
		........................... -->
<?php include 'includes/menu.php';  ?>

<section class="filter">
	<div>
		<div class=" filter-text text-center p-t-9 p-b-1">
			<p>1234 result for abcder</p>
		</div>
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h4>Filter</h4>
				<div class="courses-tab-filter text-left">
                              <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Level
                                  <span class="fas fa-angle-down"></span>
                                </button>
                                <ul class="dropdown-menu">
                                  <li class="active"><a href="#">All</a></li>
                                  <li><a href="#">Beginner</a></li>
                                  <li><a href="#">Intermediate</a></li>
                                  <li><a href="#">Expert</a></li>
                                </ul>
                              </div>
                          </div>	
                          <div >
    <div class="row">
        <div class="col-md-12">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">
                                Software Development
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                           <ul>
                           	<li><a href="#">Ajax</a></li>
                           	<li><a href="#">Web Development with HTML 5, CSS 3 and jQuery</a></li>
                           	<li><a href="#">HTML % for Mobile Application Development</a></li>
                           	<li><a href="#">PHP Web Programming</a></li>
                           	<li><a href="#">JAVA / Advance JAVA</a></li>
                           	<li><a href="#">Building J2EE Web Application</a></li>
                           	<li><a href="#">Mastering the Spring 3.0 Framework</a></li>
                           	<li><a href="#">Advance XML and XSL</a></li>
                           </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Section 2
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <ul>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Section 3
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <ul>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           	<li><a href="#"> Android Development</a></li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>			
			</div>
			<div class="col-md-9 course-list p-t-1">
				<div class="course-unit">
					<div class="course-inner col-md-2 col-sm-3 col-xs-4">
						<div class="course-unit-image">
							<img src="images/4.jpg">
						</div>
					</div>
					<div class="course-inner col-md-10 col-sm-9 col-xs-8">
						<h3 class="course-unit-title title-h4"><a href="#"> Dedicated to Perfection in ICT</a>
						</h3>
						<div class="course-unit-detail">
							<span>
								<i class="far fa-clock"></i>
								<p class="course-unit-detail-duration"> Duration:</p>
								<p class="course-unit-detail-hours"> 10:00 hrs</p>
							</span>
							<span>
								<i class="fas fa-chess"></i>
								<p class="course-unit-detail-level">Level:</p>
								<p class="course-unit-detail-type"> Beginner</p>
							</span>
							<span class="course-unit-rating">
								<i class="fas fa-star"></i>
								<p class="course-unit-detail-rating">Rating:</p>
								<div class="small-active-star">
                              		<div class="small-star star-five">
                              	
                              		</div>
                           		</div>
                           	</span>
						</div>
						<div class="course-unit-subtitle">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						</div>
						<div class="course-unit-button">
							<a href="courseinner.php" class="btn c-btn c-bg-blue">View Detail</a>
						</div>
					</div>
				</div>
				<div class="course-unit">
					<div class="course-inner col-md-2 col-sm-3 col-xs-4">
						<div class="course-unit-image">
							<img src="images/4.jpg">
						</div>
					</div>
					<div class="course-inner col-md-10 col-sm-9 col-xs-8">
						<h3 class="course-unit-title title-h4"><a href="#"> Dedicated to Perfection in ICT</a>
						</h3>
						<div class="course-unit-detail">
							<span>
								<i class="far fa-clock"></i>
								<p class="course-unit-detail-duration"> Duration:</p>
								<p class="course-unit-detail-hours"> 10:00 hrs</p>
							</span>
							<span>
								<i class="fas fa-chess"></i>
								<p class="course-unit-detail-level">Level:</p>
								<p class="course-unit-detail-type"> Beginner</p>
							</span>
							<span class="course-unit-rating">
								<i class="fas fa-star"></i>
								<p class="course-unit-detail-rating">Rating:</p>
								<div class="small-active-star">
                              		<div class="small-star star-one">
                              	
                              		</div>
                           		</div>
                           	</span>
						</div>
						<div class="course-unit-subtitle">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						</div>
						<div class="course-unit-button">
							<a href="courseinner.php" class="btn c-btn c-bg-blue">View Detail</a>
						</div>
					</div>
				</div>
				<div class="course-unit">
					<div class="course-inner col-md-2 col-sm-3 col-xs-4">
						<div class="course-unit-image">
							<img src="images/4.jpg">
						</div>
					</div>
					<div class="course-inner col-md-10 col-sm-9 col-xs-8">
						<h3 class="course-unit-title title-h4"><a href="#"> Dedicated to Perfection in ICT</a>
						</h3>
						<div class="course-unit-detail">
							<span>
								<i class="far fa-clock"></i>
								<p class="course-unit-detail-duration"> Duration:</p>
								<p class="course-unit-detail-hours"> 10:00 hrs</p>
							</span>
							<span>
								<i class="fas fa-chess"></i>
								<p class="course-unit-detail-level">Level:</p>
								<p class="course-unit-detail-type"> Beginner</p>
							</span>
							<span class="course-unit-rating">
								<i class="fas fa-star"></i>
								<p class="course-unit-detail-rating">Rating:</p>
								<div class="small-active-star">
                              		<div class="small-star star-five">
                              	
                              		</div>
                           		</div>
                           	</span>
						</div>
						<div class="course-unit-subtitle">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						</div>
						<div class="course-unit-button">
							<a href="courseinner.php" class="btn c-btn c-bg-blue">View Detail</a>
						</div>
					</div>
				</div>
				<div class="course-unit">
					<div class="course-inner col-md-2 col-sm-3 col-xs-4">
						<div class="course-unit-image">
							<img src="images/4.jpg">
						</div>
					</div>
					<div class="course-inner col-md-10 col-sm-9 col-xs-8">
						<h3 class="course-unit-title title-h4"><a href="#"> Dedicated to Perfection in ICT</a>
						</h3>
						<div class="course-unit-detail">
							<span>
								<i class="far fa-clock"></i>
								<p class="course-unit-detail-duration"> Duration:</p>
								<p class="course-unit-detail-hours"> 10:00 hrs</p>
							</span>
							<span>
								<i class="fas fa-chess"></i>
								<p class="course-unit-detail-level">Level:</p>
								<p class="course-unit-detail-type"> Beginner</p>
							</span>
							<span class="course-unit-rating">
								<i class="fas fa-star"></i>
								<p class="course-unit-detail-rating">Rating:</p>
								<div class="small-active-star">
                              		<div class="small-star star-five">
                              	
                              		</div>
                           		</div>
                           	</span>
						</div>
						<div class="course-unit-subtitle">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						</div>
						<div class="course-unit-button">
							<a href="courseinner.php" class="btn c-btn c-bg-blue">View Detail</a>
						</div>
					</div>
				</div>
				<div class="course-unit">
					<div class="course-inner col-md-2 col-sm-3 col-xs-4">
						<div class="course-unit-image">
							<img src="images/4.jpg">
						</div>
					</div>
					<div class="course-inner col-md-10 col-sm-9 col-xs-8">
						<h3 class="course-unit-title title-h4"><a href="#"> Dedicated to Perfection in ICT</a>
						</h3>
						<div class="course-unit-detail">
							<span>
								<i class="far fa-clock"></i>
								<p class="course-unit-detail-duration"> Duration:</p>
								<p class="course-unit-detail-hours"> 10:00 hrs</p>
							</span>
							<span>
								<i class="fas fa-chess"></i>
								<p class="course-unit-detail-level">Level:</p>
								<p class="course-unit-detail-type"> Beginner</p>
							</span>
							<span class="course-unit-rating">
								<i class="fas fa-star"></i>
								<p class="course-unit-detail-rating">Rating:</p>
								<div class="small-active-star">
                              		<div class="small-star star-five">
                              	
                              		</div>
                           		</div>
                           	</span>
						</div>
						<div class="course-unit-subtitle">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						</div>
						<div class="course-unit-button">
							<a href="courseinner.php" class="btn c-btn c-bg-blue">View Detail</a>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
</section>
	 <?php include 'includes/footer.php'; ?>
	
</html>