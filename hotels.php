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
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.min.css">
    
    <!-- Current Page Styles -->
    <link rel="stylesheet" type="text/css" href="components/revolution_slider/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/revolution_slider/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/jquery.bxslider/jquery.bxslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/flexslider/flexslider.css" media="screen" />
    
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
                    <h2 class="entry-title uppercase">Hotel Search Results</h2>
                </div>
                <ul class="breadcrumbs pull-right uppercase">
                    <li><a href="#">Home</a></li>
                    <li class="active">Hotel Search Results</li>
                </ul>
            </div>
        </div>
        <section id="content">
            <div class="container">
                <div id="main">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="search-box-wrapper style2">
								<div class="search-box container">
									<div class="search-tab-content">
										<div class="tab-pane fade active in" id="hotels-tab">
											<form action="hotels.php" method="POST">
												<h4 class="title">Where do you want to go?</h4>
												<div class="row">
													<div class="form-group col-sm-6 col-md-3">
														<input type="text" class="input-text full-width" placeholder="Rome, Paris, New York..." />
													</div>
													<div class="form-group col-sm-6 col-md-4">
														<div class="row">
															<div class="col-xs-6">
																<div class="datepicker-wrap">
																	<input type="text" name="date_from" class="input-text full-width" placeholder="Check In" />
																</div>
															</div>
															<div class="col-xs-6">
																<div class="datepicker-wrap">
																	<input type="text" name="date_to" class="input-text full-width" placeholder="Check Out" />
																</div>
															</div>
														</div>
													</div>
													<div class="form-group col-md-5">
														<div class="row">
															<div class="col-xs-4">
																<div class="selector">
																	<select class="full-width">
																		<option value="1">1 Room</option>
																		<option value="2">2 Rooms</option>
																		<option value="3">3 Rooms</option>
																		<option value="4">4 Rooms</option>
																		<option value="5">5 Rooms</option>
																	</select>
																</div>
															</div>
															<div class="col-xs-4">
																<div class="selector">
																	<select class="full-width">
																		<option value="1">1 Guest</option>
																		<option value="2">2 Guests</option>
																		<option value="3">3 Guests</option>
																		<option value="4">4 Guests</option>
																		<option value="5">5 Guests</option>
																		<option value="6">6 Guests</option>
																		<option value="7">7 Guests</option>
																		<option value="8">8 Guests</option>
																		<option value="9">9 Guests</option>
																	</select>
																</div>
															</div>
															<div class="col-xs-4">
																<button type="submit" name="view_hotel" class="full-width">SEARCH NOW</button>
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php if(isset($_POST['view_hotel'])){ ?>
						<br/>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="sort-by-section clearfix">
									<h4 class="sort-by-title block-sm">Sort results by:</h4>
									<ul class="sort-bar clearfix block-sm">
										<li class="sort-by-name"><a class="sort-by-container" href="#"><span>name</span></a></li>
										<li class="sort-by-price"><a class="sort-by-container" href="#"><span>price</span></a></li>
										<li class="clearer visible-sms"></li>
										<li class="sort-by-rating active"><a class="sort-by-container" href="#"><span>rating</span></a></li>
										<li class="sort-by-popularity"><a class="sort-by-container" href="#"><span>popularity</span></a></li>
									</ul>
								</div>
								<div class="hotel-list listing-style3 hotel">
									<article class="box">
										<figure class="col-sm-5 col-md-4">
											<a title="" href="ajax/slideshow-popup.html" class="popup-gallery"><img width="270" height="160" alt="" src="http://placehold.it/270x160"></a>
										</figure>
										<div class="details col-sm-7 col-md-8">
											<div>
												<div>
													<h4 class="box-title">Hotel Hilton and Resorts<small><i class="soap-icon-departure yellow-color"></i> Bastille, Paris france</small></h4>
													<div class="amenities">
														<i class="soap-icon-wifi circle"></i>
														<i class="soap-icon-fitnessfacility circle"></i>
														<i class="soap-icon-fork circle"></i>
														<i class="soap-icon-television circle"></i>
													</div>
												</div>
												<div>
													<div class="five-stars-container">
														<span class="five-stars" style="width: 80%;"></span>
													</div>
													<span class="review">270 reviews</span>
												</div>
											</div>
											<div>
												<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
												<div>
													<span class="price"><small>AVG/NIGHT</small>$620</span>
													<a class="button btn-small full-width text-center" title="" href="hotel-detailed.html">SELECT</a>
												</div>
											</div>
										</div>
									</article>
									<article class="box">
										<figure class="col-sm-5 col-md-4">
											<a title="" href="ajax/slideshow-popup.html" class="popup-gallery"><img width="270" height="160" alt="" src="http://placehold.it/270x160"></a>
										</figure>
										<div class="details col-sm-7 col-md-8">
											<div>
												<div>
													<h4 class="box-title">Forte Do Vale<small><i class="soap-icon-departure yellow-color"></i> Albufeira</small></h4>
													<div class="amenities">
														<i class="soap-icon-wifi circle"></i>
														<i class="soap-icon-fitnessfacility circle"></i>
														<i class="soap-icon-fork circle"></i>
														<i class="soap-icon-television circle"></i>
													</div>
												</div>
												<div>
													<div class="five-stars-container">
														<span class="five-stars" style="width: 80%;"></span>
													</div>
													<span class="review">170 reviews</span>
												</div>
											</div>
											<div>
												<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
												<div>
													<span class="price"><small>AVG/NIGHT</small>$120</span>
													<a class="button btn-small full-width text-center" title="" href="hotel-detailed.html">SELECT</a>
												</div>
											</div>
										</div>
									</article>
									<article class="box">
										<figure class="col-sm-5 col-md-4">
											<a title="" href="ajax/slideshow-popup.html" class="popup-gallery"><img width="270" height="160" alt="" src="http://placehold.it/270x160"></a>
										</figure>
										<div class="details col-sm-7 col-md-8">
											<div>
												<div>
													<h4 class="box-title">Gran Canaria<small><i class="soap-icon-departure yellow-color"></i> Spain</small></h4>
													<div class="amenities">
														<i class="soap-icon-wifi circle"></i>
														<i class="soap-icon-fitnessfacility circle"></i>
														<i class="soap-icon-fork circle"></i>
														<i class="soap-icon-television circle"></i>
													</div>
												</div>
												<div>
													<div class="five-stars-container">
														<span class="five-stars" style="width: 80%;"></span>
													</div>
													<span class="review">485 reviews</span>
												</div>
											</div>
											<div>
												<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
												<div>
													<span class="price"><small>AVG/NIGHT</small>$322</span>
													<a class="button btn-small full-width text-center" title="" href="hotel-detailed.html">SELECT</a>
												</div>
											</div>
										</div>
									</article>
									<article class="box">
										<figure class="col-sm-5 col-md-4">
											<a title="" href="ajax/slideshow-popup.html" class="popup-gallery"><img width="270" height="160" alt="" src="http://placehold.it/270x160"></a>
										</figure>
										<div class="details col-sm-7 col-md-8">
											<div>
												<div>
													<h4 class="box-title">Gran Canaria<small><i class="soap-icon-departure yellow-color"></i> Spain</small></h4>
													<div class="amenities">
														<i class="soap-icon-wifi circle"></i>
														<i class="soap-icon-fitnessfacility circle"></i>
														<i class="soap-icon-fork circle"></i>
														<i class="soap-icon-television circle"></i>
													</div>
												</div>
												<div>
													<div class="five-stars-container">
														<span class="five-stars" style="width: 80%;"></span>
													</div>
													<span class="review">485 reviews</span>
												</div>
											</div>
											<div>
												<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
												<div>
													<span class="price"><small>AVG/NIGHT</small>$322</span>
													<a class="button btn-small full-width text-center" title="" href="hotel-detailed.html">SELECT</a>
												</div>
											</div>
										</div>
									</article>
									<article class="box">
										<figure class="col-sm-5 col-md-4">
											<a title="" href="ajax/slideshow-popup.html" class="popup-gallery"><img width="270" height="160" alt="" src="http://placehold.it/270x160"></a>
										</figure>
										<div class="details col-sm-7 col-md-8">
											<div>
												<div>
													<h4 class="box-title">Costa Brava<small><i class="soap-icon-departure yellow-color"></i> Spain</small></h4>
													<div class="amenities">
														<i class="soap-icon-wifi circle"></i>
														<i class="soap-icon-fitnessfacility circle"></i>
														<i class="soap-icon-fork circle"></i>
														<i class="soap-icon-television circle"></i>
													</div>
												</div>
												<div>
													<div class="five-stars-container">
														<span class="five-stars" style="width: 80%;"></span>
													</div>
													<span class="review">423 reviews</span>
												</div>
											</div>
											<div>
												<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
												<div>
													<span class="price"><small>AVG/NIGHT</small>$620</span>
													<a class="button btn-small full-width text-center" title="" href="hotel-detailed.html">SELECT</a>
												</div>
											</div>
										</div>
									</article>
									<article class="box">
										<figure class="col-sm-5 col-md-4">
											<a title="" href="ajax/slideshow-popup.html" class="popup-gallery"><img width="270" height="160" alt="" src="http://placehold.it/270x160"></a>
										</figure>
										<div class="details col-sm-7 col-md-8">
											<div>
												<div>
													<h4 class="box-title">Ruzzini Palace<small><i class="soap-icon-departure yellow-color"></i> Venice</small></h4>
													<div class="amenities">
														<i class="soap-icon-wifi circle"></i>
														<i class="soap-icon-fitnessfacility circle"></i>
														<i class="soap-icon-fork circle"></i>
														<i class="soap-icon-television circle"></i>
													</div>
												</div>
												<div>
													<div class="five-stars-container">
														<span class="five-stars" style="width: 80%;"></span>
													</div>
													<span class="review">99 reviews</span>
												</div>
											</div>
											<div>
												<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
												<div>
													<span class="price"><small>AVG/NIGHT</small>$322</span>
													<a class="button btn-small full-width text-center" title="" href="hotel-detailed.html">SELECT</a>
												</div>
											</div>
										</div>
									</article>
									<article class="box">
										<figure class="col-sm-5 col-md-4">
											<a title="" href="ajax/slideshow-popup.html" class="popup-gallery"><img width="270" height="160" alt="" src="http://placehold.it/270x160"></a>
										</figure>
										<div class="details col-sm-7 col-md-8">
											<div>
												<div>
													<h4 class="box-title">Plaza Tour Eiffel<small><i class="soap-icon-departure yellow-color"></i> paris</small></h4>
													<div class="amenities">
														<i class="soap-icon-wifi circle"></i>
														<i class="soap-icon-fitnessfacility circle"></i>
														<i class="soap-icon-fork circle"></i>
														<i class="soap-icon-television circle"></i>
													</div>
												</div>
												<div>
													<div class="five-stars-container">
														<span class="five-stars" style="width: 80%;"></span>
													</div>
													<span class="review">112 reviews</span>
												</div>
											</div>
											<div>
												<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
												<div>
													<span class="price"><small>AVG/NIGHT</small>$170</span>
													<a class="button btn-small full-width text-center" title="" href="hotel-detailed.html">SELECT</a>
												</div>
											</div>
										</div>
									</article>
									<article class="box">
										<figure class="col-sm-5 col-md-4">
											<a title="" href="ajax/slideshow-popup.html" class="popup-gallery"><img width="270" height="160" alt="" src="http://placehold.it/270x160"></a>
										</figure>
										<div class="details col-sm-7 col-md-8">
											<div>
												<div>
													<h4 class="box-title">Le Ville Del Lido<small><i class="soap-icon-departure yellow-color"></i> Venice Lido</small></h4>
													<div class="amenities">
														<i class="soap-icon-wifi circle"></i>
														<i class="soap-icon-fitnessfacility circle"></i>
														<i class="soap-icon-fork circle"></i>
														<i class="soap-icon-television circle"></i>
													</div>
												</div>
												<div>
													<div class="five-stars-container">
														<span class="five-stars" style="width: 80%;"></span>
													</div>
													<span class="review">269 reviews</span>
												</div>
											</div>
											<div>
												<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
												<div>
													<span class="price"><small>AVG/NIGHT</small>$620</span>
													<a class="button btn-small full-width text-center" title="" href="hotel-detailed.html">SELECT</a>
												</div>
											</div>
										</div>
									</article>
									<article class="box">
										<figure class="col-sm-5 col-md-4">
											<a title="" href="ajax/slideshow-popup.html" class="popup-gallery"><img width="270" height="160" alt="" src="http://placehold.it/270x160"></a>
										</figure>
										<div class="details col-sm-7 col-md-8">
											<div>
												<div>
													<h4 class="box-title">Park Central<small><i class="soap-icon-departure yellow-color"></i> New York</small></h4>
													<div class="amenities">
														<i class="soap-icon-wifi circle"></i>
														<i class="soap-icon-fitnessfacility circle"></i>
														<i class="soap-icon-fork circle"></i>
														<i class="soap-icon-television circle"></i>
													</div>
												</div>
												<div>
													<div class="five-stars-container">
														<span class="five-stars" style="width: 80%;"></span>
													</div>
													<span class="review">78 reviews</span>
												</div>
											</div>
											<div>
												<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
												<div>
													<span class="price"><small>AVG/NIGHT</small>$322</span>
													<a class="button btn-small full-width text-center" title="" href="hotel-detailed.html">SELECT</a>
												</div>
											</div>
										</div>
									</article>
									<article class="box">
										<figure class="col-sm-5 col-md-4">
											<a title="" href="ajax/slideshow-popup.html" class="popup-gallery"><img width="270" height="160" alt="" src="http://placehold.it/270x160"></a>
										</figure>
										<div class="details col-sm-7 col-md-8">
											<div>
												<div>
													<h4 class="box-title">Cleopatra Resort<small><i class="soap-icon-departure yellow-color"></i> England</small></h4>
													<div class="amenities">
														<i class="soap-icon-wifi circle"></i>
														<i class="soap-icon-fitnessfacility circle"></i>
														<i class="soap-icon-fork circle"></i>
														<i class="soap-icon-television circle"></i>
													</div>
												</div>
												<div>
													<div class="five-stars-container">
														<span class="five-stars" style="width: 80%;"></span>
													</div>
													<span class="review">585 reviews</span>
												</div>
											</div>
											<div>
												<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
												<div>
													<span class="price"><small>AVG/NIGHT</small>$170</span>
													<a class="button btn-small full-width text-center" title="" href="hotel-detailed.html">SELECT</a>
												</div>
											</div>
										</div>
									</article>
								</div>
								<a href="#" class="uppercase full-width button btn-large">load more listing</a>
							</div>
						</div>
					<?php } ?>
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
    
    <!-- load revolution slider scripts -->
    <script type="text/javascript" src="components/revolution_slider/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- load BXSlider scripts -->
    <script type="text/javascript" src="components/jquery.bxslider/jquery.bxslider.min.js"></script>
    
    <!-- load FlexSlider scripts -->
    <script type="text/javascript" src="components/flexslider/jquery.flexslider-min.js"></script>
    
    <!-- Google Map Api -->
    <script type='text/javascript' src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script type="text/javascript" src="js/gmap3.min.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="js/theme-scripts.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    
    <script type="text/javascript">
        tjq(document).ready(function() {
            tjq("#price-range").slider({
                range: true,
                min: 0,
                max: 1000,
                values: [ 100, 800 ],
                slide: function( event, ui ) {
                    tjq(".min-price-label").html( "$" + ui.values[ 0 ]);
                    tjq(".max-price-label").html( "$" + ui.values[ 1 ]);
                }
            });
            tjq(".min-price-label").html( "$" + tjq("#price-range").slider( "values", 0 ));
            tjq(".max-price-label").html( "$" + tjq("#price-range").slider( "values", 1 ));
            
            tjq("#rating").slider({
                range: "min",
                value: 40,
                min: 0,
                max: 50,
                slide: function( event, ui ) {
                    
                }
            });
        });
    </script>
</body>
</html>

