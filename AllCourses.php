<?php include 'includes/header.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/pages/allcourses.css">
    <title>All Courses</title>
    </head>

    <body>
        <!-- .........................
		Navigation file named menu.php
........................... -->
        <?php include 'includes/menu.php';  ?>
            <section class="vendors">
                <div class="container">
                    <div class="row">
                        <p class="title-h2 all-courses-title">Explore Topics And Skills</p>
                        <div class="all-course-main-carousel">
                            <div class="carousel-cell carousel-cell-shadow">
                                <a href="#">
                                    <div class="grid-item top-grid-item">
                                        <div class="grid-item-content">
                                            <div class="grid-item-picture">
                                                <img src="images/2.jpg" />
                                            </div>
                                            <div class="grid-item-overlay" style="background-color: #8d6cab;">
                                                <p>Microsoft</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="grid-item bottom-grid-item">
                                        <div class="grid-item-content">
                                            <div class="grid-item-picture">
                                                <img src="images/about1.jpg" />
                                            </div>
                                            <div class="grid-item-overlay" style="background-color: #dd5143;">
                                                <p>CISCO</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-cell carousel-cell-shadow">
                                <a href="#">
                                    <div class="grid-item top-grid-item">
                                        <div class="grid-item-content">
                                            <div class="grid-item-picture">
                                                <img src="images/about2.jpg" />
                                            </div>
                                            <div class="grid-item-overlay" style="background-color: #00a0dc;">
                                                <p>IT Security</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="grid-item bottom-grid-item">
                                    <div class="grid-item-content">
                                        <div class="grid-item-picture">
                                            <img src="images/about-pic.jpg" />
                                        </div>
                                        <div class="grid-item-overlay" style="background-color: #e68523;">
                                            <p>Network Administration</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-cell carousel-cell-shadow">
                                <a href="#">
                                    <div class="grid-item top-grid-item">
                                        <div class="grid-item-content">
                                            <div class="grid-item-picture">
                                                <img src="images/img-machine-learning.png" />
                                            </div>
                                            <div class="grid-item-overlay" style="background-color: #8d6cab;">
                                                <p>Data Analysis Solution</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="grid-item bottom-grid-item ">
                                        <div class="grid-item-content">
                                            <div class="grid-item-picture">
                                                <img src="images/development.jpg" />
                                            </div>
                                            <div class="grid-item-overlay" style="background-color: #dd5143;">
                                                <p>System Administration</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-cell carousel-cell-shadow">
                                <a href="">
                                    <div class="grid-item top-grid-item">
                                        <div class="grid-item-content">
                                            <div class="grid-item-picture">
                                                <img src="images/technology.jpg" />
                                            </div>
                                            <div class="grid-item-overlay" style="background-color: #e68523;">
                                                <p>Database</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="grid-item bottom-grid-item">
                                        <div class="grid-item-content">
                                            <div class="grid-item-picture">
                                                <img src="images/training.jpg" />
                                            </div>
                                            <div class="grid-item-overlay" style="background-color: #00a0dc;">
                                                <p>Big Data Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-cell carousel-cell-shadow">
                                <!-- this div is always in last -->
                                <div>
                                    <a href="#">
                                        <div class="grid-item first-grid-item">
                                            <div class="grid-item-content">
                                                <div class="grid-item-picture">
                                                    <img src="images/1.jpg" />
                                                </div>
                                                <div class="grid-item-overlay" style="background-color: #0077b5;">
                                                    <p>Programming Languages</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="courses-tabs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-10">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#all-courses" aria-controls="all-courses" role="tab" data-toggle="tab">All Courses</a></li>
                                        <li role="presentation"><a href="#top-courses" aria-controls="top-courses" role="tab" data-toggle="tab">Top Courses</a></li>
                                        <li role="presentation"><a href="#popular-courses" aria-controls="popular-courses" role="tab" data-toggle="tab">Popular Courses</a></li>
                                        <li role="presentation"><a href="#new-courses" aria-controls="new-courses" role="tab" data-toggle="tab">New Courses</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <div class="courses-tab-filter filter-select">
                                        <div class="btn-group dropdown">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span>Filter</span><i class="fas fa-filter"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Level</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="tab-content">
                            <div id="all-courses" class="courses-tab-pane fade in active">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="top-courses" class="courses-tab-pane fade ">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="popular-courses" class="courses-tab-pane fade">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="new-courses" class="courses-tab-pane fade">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-tab-content">
                                        <div class="courses-tab-content-image">
                                            <img class="courses-tab-content-image" src="images/1.jpg">
                                        </div>
                                        <div class="courses-tab-content-detail">
                                            <h6 class="title-h6 text-center text-black">Microsoft Trainning</h6>
                                            <div class="carousel-cell-content-rating courses-tab-content-rating">
                                                <div class="small-active-star star-no-float">
                                                    <div class="small-star star-five"></div>
                                                </div>
                                                <div class="star-percentage">15</div>
                                            </div>
                                            <br>
                                            <div class="courses-tab-content-duration">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-clock"></i>
									 Duration: 20hrs
									</h6>
                                            </div>
                                            <div class="courses-tab-content-level">
                                                <h6 class="title-h6 text-normal text-center">
										<i class="fas fa-chess"></i>
									 Level: Beginner
									</h6>
                                            </div>
                                            <div class="courses-tab-content-button">
                                                <a href="#" class="btn c-btn c-bg-blue no-box-shadow text-center">
										Read More
									</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="tab-pagination text-center">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <?php include 'includes/footer.php'; ?>

                </html>