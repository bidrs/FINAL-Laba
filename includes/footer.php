<section class="subscription">
    <div class="subscription-overlay">
       <div class="container">
       <div class="row">
          <div class="subscription-wrapper">
             <div class="col-md-6 col-xs-12">
                <h3 class="subscription-title">Sign Up for News and Offers</h3>
                <p class="subscription-subtitle">Subscribe for the latest news and great deals we offer</p>
             </div>

            <div class="col-md-5 col-xs-12 col-md-offset-1">
              <!-- <div class="col-md-9 col-md-offset-3"> -->
                <div class="subscription-form">
                  <form action="" class="">
                    <div class="input-group">
                      <input type="email" class="form-control c-form-control" placeholder="Your Email">
                      <div class="input-group-btn">
                        <button class="common-btn c-btn" type="submit">
                          Subscribe
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <section class="footer1">
   <div class="container">
      <div class="row">
         <div class="footer1-inner">
          
            <div class="col-md-3 col-sm-12 col-xs-12">
              <div class="footer-item">
               <div class="footer-title">
                  <h6 class="title-h6">Featured Courses</h6>
               </div>
               <div class="footer-content-list">
                  <ul>
                     <li><a href="#">Programming</a></li>
                     <li><a href="#">Software Development</a></li>
                     <li><a href="#">Network Administration</a></li>
                     <li><a href="#">Database Administration and Development</a></li>
                     <li><a href="#">Virtualization</a></li>
                     <li><a href="#">Information Systems and Security Management</a></li>
                     <li><a href="#">IT Service and Project Managemant</a></li>
                     <li><a href="#">Security</a></li>
                     <li><a href="#">View All</a></li>

                  </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
              <div class="footer-item move-footer">
               <div class="footer-title">
                  <h6 class="title-h6">Certification</h6>
               </div>
                <div class="footer-content-list">
                  <ul>
                     <li><a href="#">Microsoft</a></li>
                     <li><a href="#">CISCO</a></li>
                     <li><a href="#">EC-Council</a></li>
                     <li><a href="#">ITIL</a></li>
                      <li><a href="#">PRINCE2</a></li>
                     <li><a href="#">Oracle</a></li>
                     <li><a href="#">Prometric</a></li>
                     <li><a href="#">Element K</a></li>
                     <li><a href="#">View All</a></li>
                  </ul>
               </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
              <div class="footer-item move-footer">
               <div class="footer-title">
                  <h6 class="title-h6">Featured Courses</h6>
               </div>
                <div class="footer-content-list">
                  <ul>
                     <li><a href="#">Programming</a></li>
                     <li><a href="#">Programming</a></li>
                     <li><a href="#">Programming</a></li>
                     <li><a href="#">Programming</a></li>
                      <li><a href="#">Programming</a></li>
                     <li><a href="#">Programming</a></li>
                     <li><a href="#">Programming</a></li>
                     <li><a href="#">Programming</a></li>
                     <li><a href="#">View All</a></li>
                  </ul>
               </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
               <div class="footer-item move-footer">
                  <div class="footer-title">
                    <h6 class="title-h6">Company</h6>
                  </div>
                  <div class="footer-content-list">
                    <ul>
                      <li><a href="#">About</a></li>
                       <li><a href="#">Events</a></li>
                       <li><a href="#">Courses</a></li>
                       <li><a href="#">Contact</a></li>
                        <li><a href="#">Feedback</a></li>
                       <li><a href="#">Help</a></li>
                    </ul>
                  </div>
              </div>
            </div>
         </div>
      </div>
      </div>
   </div>
</section>
<section class="footer2">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="accredit">
               <span>PMP® & CAPM® are registered marks of PMI.</span>
               <span>ITIL® & PRINCE2® is registered trademark of AXELOS Limited.</span>
               <span>The Swirl logoTM is a trade mark of AXELOS Limited.</span>
            </div>
         </div>
      </div>
      <div class="row">
        <div class="foot-last">

          <div class="col-md-6 col-xs-12">
            <ul>
               <li>© 2011–2018 LabaNepal Pvt Ltd.</li>
               <li><a href="">Legal & Privacy</a> </li>
               <li><a href="">Term and Conditon</a> </li>
               <li></li>
            </ul>
          </div>
          <div class="col-md-6 col-xs-8 col-xs-offset-1 footer2-icons">
            <ul>
               <li>Follow us at:</li>
               <li><a href="#"><i class="fab fa-facebook-f"></i> </a></li>
               <li><a href="#"><i class="fab fa-twitter"></i>  </a></li>
               <li><a href="#"><i class="fab fa-linkedin-in"></i>  </a></li>
               <li><a href="#"><i class="fab fa-google-plus-g"></i>  </a></li>
            </ul>
          </div>
        </div>
      </div>
      </div>
   </div>
</section>





<a href="#" id="scroll" style="display: none;"><span></span></a>
               </body>
               <!-- jQuery library -->
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                              <!-- MENU JS-->

               <script>
                 (function($) {
                    $.fn.menumaker = function(options) {
                        var mainnav = $(this),
                            settings = $.extend({
                                format: "dropdown",
                                sticky: false
                            }, options);
                        return this.each(function() {
                            $(this).find(".button").on('click', function() {
                                $(this).toggleClass('menu-opened');
                                var mainmenu = $(this).next('ul');
                                if (mainmenu.hasClass('open')) {
                                    mainmenu.slideToggle().removeClass('open');
                                } else {
                                    mainmenu.slideToggle().addClass('open');
                                    if (settings.format === "dropdown") {
                                        mainmenu.find('ul').show();
                                    }
                                }
                            });
                            mainnav.find('li ul').parent().addClass('has-sub');
                            multiTg = function() {
                                mainnav.find(".has-sub").prepend('<span class="submenu-button"></span>');
                                mainnav.find('.submenu-button').on('click', function() {
                                    $(this).toggleClass('submenu-opened');
                                    if ($(this).siblings('ul').hasClass('open')) {
                                        $(this).siblings('ul').removeClass('open').slideToggle();
                                    } else {
                                        $(this).siblings('ul').addClass('open').slideToggle();
                                    }
                                });
                            };
                            if (settings.format === 'multitoggle') multiTg();
                            else mainnav.addClass('dropdown');
                            if (settings.sticky === true) mainnav.css('position', 'fixed');
                            resizeFix = function() {
                                var mediasize = 1000;
                                if ($(window).width() > mediasize) {
                                    cssmenu.find('ul').show();
                                }
                                if ($(window).width() <= mediasize) {
                                    mainnav.find('ul').hide().removeClass('open');
                                }
                            };
                            resizeFix();
                            return $(window).on('resize', resizeFix);
                        });
                    };
                })(jQuery);

                (function($) {
                    $(document).ready(function() {
                        $(".main-nav").menumaker({
                            format: "multitoggle"
                        });
                    });
                })(jQuery);
               </script>
               <!-- Latest compiled JavaScript -->
               <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

               <!-- STICKY NAVIGATION -->
               <script src="js/plugins/float-panel.js"></script>


               <!-- SLICK JS -->
               <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
                <script>
                  /*...........................
                    ...Slick Logo Slider.........
                    .............................*/
                    $(document).ready(function(){
                        $('.customer-logos').slick({
                            slidesToShow: 6,
                            slidesToScroll: 1,
                            autoplay: true,
                            autoplaySpeed: 2000,
                            arrows: false,
                            dots: false,
                            pauseOnHover: false,
                            responsive: [{
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 4
                                }
                            }, {
                                breakpoint: 520,
                                settings: {
                                    slidesToShow: 3
                                }
                            }]
                        });
                    });
                </script>

                <!-- Flickity -->
                <script type="text/javascript" src="js/plugins/flickity.pkgd.min.js"></script>
               <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.2/flickity.pkgd.min.js'></script> -->
                <script>


                  $('.tab-pane').flickity({
                    imagesLoaded: false, 
                    groupCells: "100%", 
                    dragThreshold : 3,
                    adaptiveHeight: true,
                    groupCells: false, 
                    cellAlign: "left",
                    wrapAround: true,
                    prevNextButtons: true,
                    percentPosition: true,
                    pageDots: false, 
                    rightToLeft: false, 
                    autoPlay : false
                  });

                  $('.nav-tabs').on( 'shown.bs.tab', 'a', function( event ) {
                    // get tab pane
                    var selector = event.target.getAttribute('href');
                    // trigger resize on tab pane
                    $( selector ).flickity('resize');
                  });

                  $('.all-course-main-carousel').flickity({
                    // options
                    draggable: true,
                   
                   fullscreen: true,
                    wrapAround: true,
                    selectedAttraction: 0.01,
                  friction: 0.15
                  });

                   $('.teachers-main-carousel').flickity({
                    // options
                    draggable: true,
                   
                   fullscreen: true,
                    wrapAround: true,
                    selectedAttraction: 0.01,
                  friction: 0.15,
                   pageDots: false
                  });

                  $('.main-carousel').flickity({
  
                    freeScroll: true,
                  wrapAround: true,
                  pageDots: false

                  });

                  $('.course-comment-inner').flickity({
                    imagesLoaded: false, 
                    groupCells: "100%", 
                    dragThreshold : 3,
                    adaptiveHeight: true,
                    groupCells: false, 
                    cellAlign: "left",
                    wrapAround: true,
                    prevNextButtons: true,
                    percentPosition: true,
                    pageDots: false, 
                    rightToLeft: false, 
                    autoPlay : false
                  });
                </script>
               

               <script type="text/javascript" src="js/aos.js"></script>

               <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
               <script>
                  $(document).ready(function(){
                      $("#testimonial-slider").owlCarousel({
                          items:2,
                          itemsDesktop:[1000,2],
                          itemsDesktopSmall:[990,1],
                          itemsTablet:[768,1],
                          pagination:true,
                          navigation:false,
                          navigationText:["",""],
                          slideSpeed:1000,
                          autoPlay:true
                      });
                  });
               </script>
               <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
               <script type="text/javascript" src="js/plugins/jquery.scrollbox.min.js"></script>
               <script type="text/javascript">
               $(function () {
               $('#demo').scrollbox({
               
               step: 1,
               speed: 100
               
               });
               $('#demo-backward').click(function () {
               $('#demo').trigger('backward');
               });
               $('#demo-forward').click(function () {
               $('#demo').trigger('forward');
               });
               });
               </script>
               <script type="text/javascript" src="js/plugins/jquery.countup.js"></script>
               <script>
                 $('.counter').countUp();
               </script>


               <script type="text/javascript" src="js/plugins/wow.min.js"></script>
               <script>
                 wow = new WOW(
                 {
                 boxClass:     'wow',      // default
                 animateClass: 'animated', // default
                 offset:       0,          // default
                 mobile:       true,       // default
                 live:         true        // default
                 }
                 )
                 wow.init();
               </script>
              
              <!-- gallery fancybiox -->
               
              <script  src="js/plugins/jquery.fancybox.js"></script>
              <script  src="js/plugins/jquery.fancybox.pack.js"></script>
              <script  src="js/plugins/jquery.fancybox-buttons.js"></script>
             
         
              <script type="text/javascript">
                jQuery(function ($) {
                   // fancybox
                   $(".fancybox").fancybox({
                       modal: true, // disable regular nav and close buttons
                       // add buttons helper (requires buttons helper js and css files)
                       helpers: {
                           buttons: {}
                         
                       }
                   });
                   // filter selector
                   $(".filter").on("click", function () {
                       var $this = $(this);
                       // if we click the active tab, do nothing
                       if ( !$this.hasClass("active") ) {
                           $(".filter").removeClass("active");
                           $this.addClass("active"); // set the active tab
                           // get the data-rel value from selected tab and set as filter
                           var $filter = $this.data("rel");
                           // if we select view all, return to initial settings and show all
                           $filter == 'all' ?
                               $(".fancybox")
                               .attr("data-fancybox-group", "gallery")
                               .not(":visible")
                               .fadeIn()
                           : // otherwise
                               $(".fancybox")
                               .fadeOut(0)
                               .filter(function () {
                                   // set data-filter value as the data-rel value of selected tab
                                   return $(this).data("filter") == $filter;
                               })
                               // set data-fancybox-group and show filtered elements
                               .attr("data-fancybox-group", $filter)
                               .fadeIn(1000);
                       } // if
                   }); // on
                }); // ready
              </script>

               
            