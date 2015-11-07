<?php
	session_start();
	include "library/connect.php";
	include "library/function.lib.php";
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
	<head>
		<title>Fritugo | Your Perfect Plan for Your Perfect Trip</title>
		
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Travelo | Responsive HTML5 Travel Template">
		<meta name="author" content="SoapTheme">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Theme Styles -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/animate.min.css">
		
		<!-- Main Style -->
		<link id="main-style" rel="stylesheet" href="css/style.css">
		
		<!-- Custom Styles -->
		<link rel="stylesheet" href="css/custom.css">
		
		<!-- Updated Styles -->
		<link rel="stylesheet" href="css/updates.css">
		
		<!-- Responsive Styles -->
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		
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
			
			<section id="content" class="tour">
				<div id="slideshow" class="slideshow-bg full-screen">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slidebg" style="background-image: url(images/slider/slider1.jpg);"></div>
							</li>
							<li>
								<div class="slidebg" style="background-image: url(images/slider/slider2.jpg);"></div>
							</li>
							<li>
								<div class="slidebg" style="background-image: url(images/slider/slider3.jpg);"></div>
							</li>
							<li>
								<div class="slidebg" style="background-image: url(images/slider/slider4.jpg);"></div>
							</li>
						</ul>
					</div>
					<div id="map"></div>
					<div class="container">
						<div class="table-wrapper full-width">
							<div class="table-cell">
								<div class="heading box">
									<h1 class="title">Plan Your Perfect Adventure</h1>
									<h3 class="sub-title">Create a Fully Cuztomised Trip Plan For Free</h3>
								</div>
								<div class="search-box">
									<form method="POST" action="function/actionLogic.php?mod=plan&act=create">
										<div class="row">
											<div class="col-sm-6 form-group">
												<div class="row">
													<div class="col-xs-12 col-sm-6">
														<div class="form-group">
															<label>Start Date</label>
															<div class="datepicker-wrap" style="z-index:1000;">
																<input type="text" name="start_date" class="input-text full-width" placeholder="dd/mm/yy" id="start_date" />
															</div>
														</div>
													</div>
													<div class="col-xs-12 col-sm-6">
														<div class="form-group">
															<label>End Date</label>
															<div class="datepicker-wrap" style="z-index:1000;">
																<input type="text" name="end_date" class="input-text full-width" placeholder="dd/mm/yy" id="end_date" />
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12 col-sm-6">
														<div class="form-group">
															<label>Destination</label>
															<input type="text" class="input-text full-width" placeholder="Osaka, Japan" value="" name="destination" id="destination" />
															<div id="display"></div>
														</div>
													</div>
													<div class="col-xs-12 col-sm-6">
														<div class="form-group">
															<label>Budget</label>
															<div id="price-filter" class="">
																<div class="panel-content" style="padding-top:5px; padding-bottom:5px;">
																	<div id="price-range" style="margin-bottom:5px;"></div>
																	<span class="max-price-label pull-right" id="budget" name="budget"></span>
																	<div class="clearer"></div>
																</div><!-- end content -->
															</div>
														</div>
													</div>
												</div>
												<div class="row choose_province" id="province_box" style="display:none;">
													<div class="col-xs-12 col-sm-12" id="province_container">
														
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12 form-group">
														<button class="button btn-medium full-width uppercase sky-blue1">Create Trip</button>
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
				<div class="section white-bg no-padding-bottom">
					<div class="container">
						<div class="text-center description block">
							<h1 class="popular-trip-title"><span class="border-popular-trip-title">Popular <span class="font-normal">Trips</span></span></h1>
							<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed pulvinar massa idend porta nequetiam</p>
						</div>
					</div>
				</div>
				<div class="section">
					<div class="container">
						<div class="row image-box hotel listing-style1">
							<div class="col-sm-6 col-md-3">
								<article class="box">
									<figure class="bg-f5f5f5">
										<a href="#" class="trip-thumb-zoom-in img-trips-thumb">
											<img width="270" height="160" alt="" src="images/trips/thumb/bali-thumb.jpg">
										</a>
									</figure>
									<div class="budget-trip-thumb col-sm-12">
										<i class="fa fa-heart"></i> 1740
										&nbsp; | &nbsp;
										<i class="fa fa-eye"></i> 2340
									</div>
									<div class="details">
										<span class="price">3 Days</span>
										<a href="#"><h4 class="box-title">Bali<small>Indonesia</small></h4></a>
										<div class="clear"></div>
										<div class="feedback">
											<div class="trip-owner">
												<div class="row">
													<div class="col-xs-4 col-md-4"><img src="images/user/ashley.jpg" class="img-circle img-responsive"></div>
													<div class="col-xs-8 col-md-8 border-left-trip-thumb">
														<a href="#" class="user-name-thumb">Ashley Jones</a><br/>
														<span class="user-info-trip-thumb">
															<i class="fa fa-group"></i> 1740<br/>
															<button class="button btn-mini sky-blue1 follow-button-trip-thumb">Follow</button>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
							<div class="col-sm-6 col-md-3">
								<article class="box">
									<figure class="bg-f5f5f5">
										<a href="#" class="trip-thumb-zoom-in img-trips-thumb">
											<img width="270" height="160" alt="" src="images/trips/thumb/osaka-thumb.jpg">
										</a>
									</figure>
									<div class="budget-trip-thumb col-sm-12">
										<i class="fa fa-heart-o"></i> 1740
										&nbsp; | &nbsp;
										<i class="fa fa-eye"></i> 2340
									</div>
									<div class="details">
										<span class="price">3 Days</span>
										<a href="#"><h4 class="box-title">Osaka<small>Japan</small></h4></a>
										<div class="clear"></div>
										<div class="feedback">
											<div class="trip-owner">
												<div class="row">
													<div class="col-xs-4 col-md-4"><img src="images/user/thumb/user-default-thumb.jpg" class="img-circle"></div>
													<div class="col-xs-8 col-md-8 border-left-trip-thumb">
														<a href="#" class="user-name-thumb">Mark Twain</a><br/>
														<span class="user-info-trip-thumb">
															<i class="fa fa-group"></i> 1740<br/>
															<button class="button btn-mini sky-blue1 follow-button-trip-thumb">Follow</button>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
							<div class="col-sm-6 col-md-3">
								<article class="box">
									<figure class="bg-f5f5f5">
										<a href="#" class="trip-thumb-zoom-in img-trips-thumb">
											<img width="270" height="160" alt="" src="images/trips/thumb/raja-ampat-thumb.jpg">
										</a>
									</figure>
									<div class="budget-trip-thumb col-sm-12">
										<i class="fa fa-heart"></i> 1740
										&nbsp; | &nbsp;
										<i class="fa fa-eye"></i> 2340
									</div>
									<div class="details">
										<span class="price">3 Days</span>
										<a href="#"><h4 class="box-title">Raja Ampat<small>Indonesia</small></h4></a>
										<div class="clear"></div>
										<div class="feedback">
											<div class="trip-owner">
												<div class="row">
													<div class="col-xs-4 col-sm-4"><img src="images/user/thumb/women-thumb.jpg" class="img-circle"></div>
													<div class="col-xs-8 col-sm-8 border-left-trip-thumb">
														<a href="#" class="user-name-thumb">Kate Johnson</a><br/>
														<span class="user-info-trip-thumb">
															<i class="fa fa-group"></i> 1740<br/>
															<button class="button btn-mini sky-blue1 follow-button-trip-thumb">Follow</button>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
							<div class="col-sm-6 col-md-3">
								<article class="box">
									<figure class="bg-f5f5f5">
										<a href="#" class="trip-thumb-zoom-in img-trips-thumb">
											<img width="270" height="160" alt="" src="images/trips/thumb/Singapore-thumb.jpg">
										</a>
									</figure>
									<div class="budget-trip-thumb col-sm-12">
										<i class="fa fa-heart"></i> 1740
										&nbsp; | &nbsp;
										<i class="fa fa-eye"></i> 2340
									</div>
									<div class="details">
										<span class="price">3 Days</span>
										<a href="#"><h4 class="box-title">Singapore<small>Singapore</small></h4></a>
										<div class="clear"></div>
										<div class="feedback">
											<div class="trip-owner">
												<div class="row">
													<div class="col-xs-4 col-sm-4"><img src="images/user/thumb/user-default-thumb.jpg" class="img-circle"></div>
													<div class="col-xs-8 col-sm-8 border-left-trip-thumb">
														<a href="#" class="user-name-thumb">Jonah Bros</a><br/>
														<span class="user-info-trip-thumb">
															<i class="fa fa-group"></i> 1740<br/>
															<button class="button btn-mini light-orange follow-button-trip-thumb">Unfollow</button>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
				<div class="section white-bg mobile-hide">
					<div class="container description text-center">
						<h1 class="uppercase">How Fritugo Works?</h1>
						<br>
						<div class="travelo-process">
							<img src="images/travelo_process.png" alt="" class="img-responsive">
							<div class="process first icon-box style12">
								<div class="details animated" data-animation-type="fadeInUp" data-animation-delay="1">
									<h4>Explore Destinations</h4>
									<p class="hidden-xs">Find the destination you want to go to.</p>
								</div>
								<div class="icon-wrapper animated" data-animation-type="slideInLeft" data-animation-delay="0">
									<i class="soap-icon-beach circle"></i>
								</div>
							</div>
							<div class="process second icon-box style12">
								<div class="icon-wrapper animated" data-animation-type="slideInRight" data-animation-delay="1.5">
									<i class="soap-icon-availability circle"></i>
								</div>
								<div class="details animated" data-animation-type="fadeInUp" data-animation-delay="2.5">
									<h4>Add Attractions</h4>
									<p class="hidden-xs">Add multiple tourist attractions you'd like to visit. We tailored the best tourist attraction based on your budget.</p>
								</div>
							</div>
							<div class="process third icon-box style12">
								<div class="icon-wrapper animated" data-animation-type="slideInRight" data-animation-delay="2">
									<i class="soap-icon-stories circle"></i>
								</div>
								<div class="details animated" data-animation-type="fadeInUp" data-animation-delay="3">
									<h4>Book Online</h4>
									<p class="hidden-xs">Book your hotels in advance to ensure your pleasurable trip and peace on mind.</p>
								</div>
							</div>
							<div class="process forth icon-box style12">
								<div class="details animated" data-animation-type="fadeInUp" data-animation-delay="4.5">
									<h4>Share Your Trip or Keep It Private</h4>
									<p class="hidden-xs">Share your trip to others and aim for the most popular itinerary. Or keep it private just for yourself. The choice is yours.</p>
								</div>
								<div class="icon-wrapper animated" data-animation-type="slideInLeft" data-animation-delay="3.5">
									<i class="soap-icon-plane-left takeoff-effect1 circle"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section">
					<div class="container">
						<a href="travel_tips.php"><h1 class="uppercase">Travel Guide and Tips</h1></a>
						<div class="tour-guide image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30" data-animation-type="fadeInUp">
							<ul class="slides image-box">
								<?php
									$tips = fetch_db('frtg_tips_category','ORDER BY views DESC');
									foreach($tips as $tip){
										echo '
										<li>
										<article class="box">
										<figure>
										<img src="'.$tip['image'].'" alt="'.$tip['name'].'">
										</figure>
										<div class="details guide-tips">
										<h4 class="white uppercase tips-title">'.$tip['name'].'</h4>
										</div>
										</article>
										</li>
										';
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<div id="map"></div>
			
			<?php include "include/footer.php"; ?>
			
		</div>
		
		
		<!-- Javascript -->
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.noconflict.js"></script>
		<script type="text/javascript" src="js/modernizr.2.7.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.placeholder.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<!-- Twitter Bootstrap -->
		<script type="text/javascript" src="js/bootstrap.js"></script>
		
		<!-- Flex Slider -->
		<script type="text/javascript" src="components/flexslider/jquery.flexslider-min.js"></script>
		
		<!-- parallax -->
		<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
		
		<!-- waypoint -->
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		
		<!-- load page Javascript -->
		<script type="text/javascript" src="js/theme-scripts.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		
		<script type="text/javascript">
			tjq("#slideshow .flexslider").flexslider({
				animation: "fade",
				controlNav: false,
				animationLoop: true,
				directionNav: false,
				slideshow: true,
				slideshowSpeed: 5000
			});
		</script>
		<script type="text/javascript">
			function addCommas(nStr){
				nStr += '';
				x = nStr.split('.');
				x1 = x[0];
				x2 = x.length > 1 ? '.' + x[1] : '';
				var rgx = /(\d+)(\d{3})/;
				while (rgx.test(x1)) {
					x1 = x1.replace(rgx, '$1' + ',' + '$2');
				}
				return x1 + x2;
			}
			
			tjq(document).ready(function() {
				// BUDGET SLIDER
				tjq("#price-range").slider({
					range: "min",
					min: 250000,
					max: 25000000,
					step: 250000,
					value: 5000000,
					slide: function( event, ui ) {
						tjq(".max-price-label").html( "IDR " + addCommas(ui.value));
						tjq( "#price-range" ).val( ui.value );
					}
				});
				tjq(".max-price-label").html( "IDR " + addCommas(tjq("#price-range").slider( "value" )));
				
				// AUTOCOMPLETE
				tjq("#destination").keyup(function() {
					tjq( "#destination" ).autocomplete({
						source: function( request, response ) {
							tjq.ajax({
								url: "ajax/ajax.php",
								type:"POST",
								dataType: "json",
								data: {
									mod:"autocomplete",
									searchdata: request.term
								},
								success: function( data ) {
									response(data);
								}
							});
						},
						minLength: 0,
						select: function( event, ui ) {
							tjq('#destination').val(ui.item.abbrev);
							
							// CHECK DESTINATION IS IT CITY / PROVINCE / COUNTRY
							String.prototype.count=function(s1) { 
								return (this.length - this.replace(new RegExp(s1,"g"), '').length) / s1.length;
							}
							var commas = ui.item.value.count(',');
							if(commas == 0){
								tjq("#province_box").fadeIn(1500);
								
								tjq.ajax({
									url:"ajax/ajax.php",
									type:"POST",
									dataType:"JSON",
									data:{
										mod:"get_province",
										country:ui.item.abbrev,
									},
									success: function(data){
										tjq("#province_container").html(data.data);
									},
								});
							}
							else{
								tjq("#province_container").html();
								tjq("#province_box").fadeOut(1000);
							}
						},
						open: function() {
							tjq( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
						},
						close: function() {
							tjq( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
						}
					});
				});
			});
			
			<?php
				include "include/login_register_warning_checker.php";
			?>
		</script>
	</body>
</html>