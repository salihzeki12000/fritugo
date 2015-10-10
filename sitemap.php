<?php
	session_start();
	include "library/connect.php";
	include "library/function.lib.php";
?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Travelo | Responsive HTML5 Travel Template</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Travelo | Responsive HTML5 Travel Template">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.min.css">
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="css/style.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="css/updates.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
<body>
    <div id="page-wrapper">
        <?php include "include/nav.php"; ?>

        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title uppercase">Site Map</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li class="uppercase"><a href="#">HOME</a></li>
                    <li class="active uppercase">Site Map</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main" class="sitemap">
                    <div class="row add-clearfix">
                        <div class="col-xs-6 col-sm-4 col-md-2">
                            <div class="column">
                                <h6 class="title">Home</h6>
                                <ul class="circle">
                                    <li><a href="index.html">Home Layout 1</a></li>
                                    <li><a href="homepage2.html">Home Layout 2</a></li>
                                    <li><a href="homepage3.html">Home Layout 3</a></li>
                                    <li><a href="homepage4.html">Home Layout 4</a></li>
                                    <li><a href="homepage5.html">Home Layout 5</a></li>
                                    <li><a href="homepage6.html">Home Layout 6</a></li>
                                    <li><a href="homepage7.html">Home Layout 7</a></li>
                                    <li><a href="homepage8.html">Home Layout 8</a></li>
                                    <li><a href="homepage9.html">Home Layout 9</a></li>
                                    <li><a href="homepage10.html">Home Layout 10</a></li>
                                    <li><a href="homepage11.html">Home Layout 11</a></li>
                                    <li><a href="homepage12.html">Home Layout 12</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2">
                            <div class="column">
                                <h6 class="title">Sliders</h6>
                                <ul class="circle">
                                    <li><a href="slider1.html">Slider - Travelo</a></li>
                                    <li><a href="slider2.html">Slider - Concept</a></li>
                                    <li><a href="slider3.html">Slider - Promotion</a></li>
                                    <li><a href="slider4.html">Slider - Snapshots</a></li>
                                    <li><a href="slider5.html">Slider - Holidays</a></li>
                                    <li><a href="slider6.html">Slider - Couples</a></li>
                                    <li><a href="slider7.html">Slider - Family</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2">
                            <div class="column">
                                <h6 class="title">Hotels</h6>
                                <ul class="circle">
                                    <li><a href="hotel-index.html">Home Hotels</a></li>
                                    <li><a href="hotel-list-view.html">List View</a></li>
                                    <li><a href="hotel-grid-view.html">Grid View</a></li>
                                    <li><a href="hotel-block-view.html">Block View</a></li>
                                    <li><a href="hotel-detailed.html">Detailed</a></li>
                                    <li><a href="hotel-booking.html">Booking</a></li>
                                    <li><a href="hotel-thankyou.html">Thank You</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2">
                            <div class="column">
                                <h6 class="title">Flights</h6>
                                <ul class="circle">
                                    <li><a href="flight-index.html">Home Flights</a></li>
                                    <li><a href="flight-list-view.html">List View</a></li>
                                    <li><a href="flight-grid-view.html">Grid View</a></li>
                                    <li><a href="flight-block-view.html">Block View</a></li>
                                    <li><a href="flight-detailed.html">Detailed</a></li>
                                    <li><a href="flight-booking.html">Booking</a></li>
                                    <li><a href="flight-thankyou.html">Thank You</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2">
                            <div class="column">
                                <h6 class="title">Cars</h6>
                                <ul class="circle">
                                    <li><a href="car-index.html">Home Cars</a></li>
                                    <li><a href="car-list-view.html">List View</a></li>
                                    <li><a href="car-grid-view.html">Grid View</a></li>
                                    <li><a href="car-block-view.html">Block View</a></li>
                                    <li><a href="car-detailed.html">Detailed</a></li>
                                    <li><a href="car-booking.html">Booking</a></li>
                                    <li><a href="car-thankyou.html">Thank You</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2">
                            <div class="column">
                                <h6 class="title">Cruises</h6>
                                <ul class="circle">
                                    <li><a href="cruise-index.html">Home Cruises</a></li>
                                    <li><a href="cruise-list-view.html">List View</a></li>
                                    <li><a href="cruise-grid-view.html">Grid View</a></li>
                                    <li><a href="cruise-block-view.html">Block View</a></li>
                                    <li><a href="cruise-detailed.html">Detailed</a></li>
                                    <li><a href="cruise-booking.html">Booking</a></li>
                                    <li><a href="cruise-thankyou.html">Thank You</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-md-4">
                            <div class="column sitemap-columns-2 clearfix">
                                <h6 class="title">Standard Pages</h6>
                                <ul>
                                    <li class="parent">
                                        <span>About Pages</span>
                                        <ul class="circle">
                                            <li><a href="pages-aboutus1.html">About Us 1</a></li>
                                            <li><a href="pages-aboutus2.html">About Us 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <span>Services Pages</span>
                                        <ul class="circle">
                                            <li><a href="pages-services1.html">Services 1</a></li>
                                            <li><a href="pages-services2.html">Services 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <span>Gallery Pages</span>
                                        <ul class="circle">
                                            <li><a href="pages-photogallery-4column.html">4 Column</a></li>
                                            <li><a href="pages-photogallery-3column.html">3 Column</a></li>
                                            <li><a href="pages-photogallery-2column.html">2 Column</a></li>
                                            <li><a href="pages-photogallery-fullview.html">Gallery Read</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <span>Blog Pages</span>
                                        <ul class="circle">
                                            <li><a href="pages-blog-rightsidebar.html">Right Sidebar</a></li>
                                            <li><a href="pages-blog-leftsidebar.html">Left Sidebar</a></li>
                                            <li><a href="pages-blog-fullwidth.html">Full Width</a></li>
                                            <li><a href="pages-blog-read.html">Blog Read</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <span>Faq Pages</span>
                                        <ul class="circle">
                                            <li><a href="pages-faq1.html">Faq 1</a></li>
                                            <li><a href="pages-faq2.html">Faq 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="parent">
                                        <span>Page Layouts</span>
                                        <ul class="circle">
                                            <li><a href="pages-layouts-leftsidebar.html">Left Sidebar</a></li>
                                            <li><a href="pages-layouts-rightsidebar.html">Right Sidebar</a></li>
                                            <li><a href="pages-layouts-twosidebar.html">Two Sidebar</a></li>
                                            <li><a href="pages-layouts-fullwidth.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <span>Contact Pages</span>
                                        <ul class="circle">
                                            <li><a href="pages-contactus1.html">Contact Us 1</a></li>
                                            <li><a href="pages-contactus2.html">Contact Us 2</a></li>
                                            <li><a href="pages-contactus3.html">Contact Us 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <span>Mobile Pages</span>
                                        <ul class="circle">
                                            <li><a href="#">Mobile Page</a></li>
                                            <li><a href="#">Mobile Drop Down</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Tablet Page</a></li>
                                    <li><a href="pages-travelo-policies.html">Travelo Policies</a></li>
                                    <li><a href="pages-sitemap.html">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2">
                            <div class="column">
                                <h6 class="title">extra Pages</h6>
                                <ul class="circle">
                                    <li><a href="extra-pages-holidays.html">Holidays</a></li>
                                    <li><a href="extra-pages-hotdeals.html">Hot Deals</a></li>
                                    <li><a href="extra-pages-before-you-fly.html">Before You Fly</a></li>
                                    <li><a href="extra-pages-inflight-experience.html">Inflight Experience</a></li>
                                    <li><a href="extra-pages-things-todo1.html">Things To Do 1</a></li>
                                    <li><a href="extra-pages-things-todo2.html">Things To Do 2</a></li>
                                    <li><a href="extra-pages-travel-essentials.html">Travel Essentials</a></li>
                                    <li><a href="extra-pages-travel-stories.html">Travel Stories</a></li>
                                    <li><a href="extra-pages-travel-guide.html">Travel Guide</a></li>
                                    <li><a href="extra-pages-travel-insurance.html">Travel Insurance</a></li>
                                    <li><a href="extra-pages-group-booking.html">Group Bookings</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix visible-sm visible-sms"></div>
                        <div class="col-xs-6 col-sm-4 col-md-2">
                            <div class="column">
                                <h6 class="title">special Pages</h6>
                                <ul>
                                    <li>
                                        <span>404 Pages</span>
                                        <ul class="circle">
                                            <li><a href="pages-404-1.html">404 Page 1</a></li>
                                            <li><a href="pages-404-2.html">404 Page 2</a></li>
                                            <li><a href="pages-404-3.html">404 Page 3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>Coming Soon</span>
                                        <ul class="circle">
                                            <li><a href="pages-coming-soon1.html">Coming Soon 1</a></li>
                                            <li><a href="pages-coming-soon2.html">Coming Soon 2</a></li>
                                            <li><a href="pages-coming-soon3.html">Coming Soon 3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>Loading Pages</span>
                                        <ul class="circle">
                                            <li><a href="pages-loading1.html">Loading Page 1</a></li>
                                            <li><a href="pages-loading2.html">Loading Page 2</a></li>
                                            <li><a href="pages-loading3.html">Loading Page 3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>Login Pages</span>
                                        <ul class="circle">
                                            <li><a href="pages-login1.html">Login Page 1</a></li>
                                            <li><a href="pages-login2.html">Login Page 2</a></li>
                                            <li><a href="pages-login3.html">Login Page 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2">
                            <div class="column">
                                <h6 class="title">shortcode Pages</h6>
                                <ul class="circle">
                                    <li><a href="shortcode-accordions-toggles.html">Accordions &amp; Toggles</a></li>
                                    <li><a href="shortcode-tabs.html">Tabs</a></li>
                                    <li><a href="shortcode-buttons.html">Buttons</a></li>
                                    <li><a href="shortcode-icon-boxes.html">Icon Boxes</a></li>
                                    <li><a href="shortcode-gallery-styles.html">Image &amp; Gallery Styles</a></li>
                                    <li><a href="shortcode-image-box-styles.html">Image Box Styles</a></li>
                                    <li><a href="shortcode-listing-style1.html">Listing 1</a></li>
                                    <li><a href="shortcode-listing-style2.html">Listing 2</a></li>
                                    <li><a href="shortcode-listing-style3.html">Listing 3</a></li>
                                    <li><a href="shortcode-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="shortcode-pricing-tables.html">Pricing Tables</a></li>
                                    <li><a href="shortcode-testimonials.html">Testimonials</a></li>
                                    <li><a href="shortcode-our-team.html">Our Team</a></li>
                                    <li><a href="shortcode-gallery-popup.html">Gallery Popup</a></li>
                                    <li><a href="shortcode-map-popup.html">Map Popup</a></li>
                                    <li><a href="shortcode-style-changer.html">Style Changer</a></li>
                                    <li><a href="shortcode-typography.html">Typography</a></li>
                                    <li><a href="shortcode-animations.html">Animations</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2">
                            <div class="column">
                                <h6 class="title">Bonus Pages</h6>
                                <ul class="circle">
                                    <li><a href="dashboard1.html">Dashboard 1</a></li>
                                    <li><a href="dashboard2.html">Dashboard 2</a></li>
                                    <li><a href="dashboard3.html">Dashboard 3</a></li>
                                    <li><a href="#">7 Footer Styles</a></li>
                                    <li><a href="#">8 Header Styles</a></li>
                                    <li><a href="#">7 Inner Start Styles</a></li>
                                    <li><a href="#">3 Search Styles</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php include "include/footer.php"; ?>
    </div>


    <!-- Javascript -->
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.noconflict.js"></script>
    <script type="text/javascript" src="js/modernizr.2.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="js/jquery-ui.1.10.4.min.js"></script>
    
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="js/theme-scripts.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    
</body>
</html>

