<?php
	session_start();
	include "library/connect.php";
	include "library/function.lib.php";
	
	if(isset($_GET['start_date']) && !empty($_GET['start_date'])){
		$start_date = trim($mysqli->real_escape_string($_GET['start_date']));
	}
	if(isset($_GET['end_date']) && !empty($_GET['end_date'])){
		$end_date = trim($mysqli->real_escape_string($_GET['end_date']));
	}
	if(isset($_GET['destination']) && !empty($_GET['destination'])){
		$destination = trim($mysqli->real_escape_string($_GET['destination']));
	}
	if(isset($_GET['budget']) && !empty($_GET['budget'])){
		$budget = trim($mysqli->real_escape_string($_GET['budget']));
		if($budget == 250000){
			$min_budget = $budget;
		}
		else if($budget >= 5000000){
			$min_budget = $budget - 1000000;
		}
		else{
			$min_budget = $budget - 500000;
		}
	}
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
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,500,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.min.css">
	
	<!-- Current Page Styles -->
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
					<h2 class="entry-title uppercase">View Trip Plan</h2>
				</div>
				<ul class="breadcrumbs pull-right">
					<li class="uppercase"><a href="#">HOME</a></li>
					<li class="active uppercase">View Trip Plan</li>
				</ul>
			</div>
		</div>
		<section id="content" class="gray-area">
			<div class="container">
				<div class="row">
					<div id="main" class="col-sms-12 col-sm-12 col-md-12">
						<div class="booking-section travelo-box">
							<div class="person-information">
								<div class="form-group row">
									<div class="col-sm-6 col-md-6">
										<label>Duration</label>
										<div class="input-group">
											<input type="text" name="duration" class="input-text full-width" placeholder="How many days?" id="duration"/>
											<div class="input-group-addon no-border">Days</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<label>Destination</label>
										<input type="text" class="input-text full-width" placeholder="Osaka, Japan" id="destination" />
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-6 col-md-6">
										<label>Budget</label>
										<div id="price-filter" class="">
											<div class="panel-content" style="padding-top:5px; padding-bottom:5px;">
												<div id="price-range" style="margin-bottom:5px;"></div>
												<span class="min-price-label pull-left" id="min_budget"></span>
												<span class="max-price-label pull-right" id="max_budget"></span>
												<div class="clearer"></div>
											</div><!-- end content -->
										</div>
									</div>
									<div class="col-sm-3 col-md-3">
										<label>&nbsp;</label>
										<button type="submit" name="view_plan" class="full-width btn-medium uppercase" id="view_plan_button">View</button>
									</div>
								</div>
							</div>

							<div class="travelo-box travel-ideas" style="display:block;" id="trip-plan-container">
								<hr/>
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
	
	<!-- load revolution slider scripts -->
	<script type="text/javascript" src="components/revolution_slider/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>
	
	<!-- load BXSlider scripts -->
	<script type="text/javascript" src="components/jquery.bxslider/jquery.bxslider.min.js"></script>
	
	<!-- load FlexSlider scripts -->
	<script type="text/javascript" src="components/flexslider/jquery.flexslider-min.js"></script>
	
	<!-- Google Places Autocomplete API -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFq_BipqZO85dGFOpGXlEDG5Mci1uHiXA&libraries=places"></script>
	<script type="text/javascript">
		function initialize() {
			var input = document.getElementById('destination');
			var options = {
				language: 'ind-id',
				types:["(regions)"],
				componentRestrictions: {country:"id"}
			};
			autocomplete = new google.maps.places.Autocomplete(input, options);
			console.log(autocomplete);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	
	<script type="text/javascript" src="js/calendar.js"></script>
	
	<!-- parallax -->
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	
	<!-- waypoint -->
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	
	<!-- load page Javascript -->
	<script type="text/javascript" src="js/theme-scripts.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	
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
			tjq("#price-range").slider({
				range: true,
				min: 250000,
				max: 25000000,
				step: 250000,
				values: [ 1000000, 5000000 ],
				slide: function( event, ui ) {
					tjq(".min-price-label").html( "IDR " + addCommas(ui.values[ 0 ]));
					tjq(".max-price-label").html( "IDR " + addCommas(ui.values[ 1 ]));
				}
			});
			tjq(".min-price-label").html( "IDR " + addCommas(tjq("#price-range").slider( "values", 0 )));
			tjq(".max-price-label").html( "IDR " + addCommas(tjq("#price-range").slider( "values", 1 )));
			
			// AJAX call for plan view
			tjq("#view_plan_button").live("click",function(){
				var min_budget = tjq("#min_budget").text();
				var max_budget = tjq("#max_budget").text();
				
				// Cut the string value of min_budget and max_budget.
				var min_budget = min_budget.substring(4);
				var max_budget = max_budget.substring(4);
				
				// Remove comma
				var min_budget = min_budget.replace(/,/g,"");
				var max_budget = max_budget.replace(/,/g,"");
				
				tjq.ajax({
					url: "ajax/ajax.php",
					type: "POST",
					data:{
						mod: "view_plan",
						duration: tjq("#duration").val(),
						destination: tjq("#destination").val(),
						min_budget: min_budget,
						max_budget: max_budget,
					},
					dataType: "JSON",
					cache: false,
					success: function(data){
						
					},
					error: function(data){
						alert("We are experiencing network error. Refresh the page to experience something better.");
					},
				});
			});
		});
	</script>
	<script type="text/javascript">
		<?php include "include/login_register_warning_checker.php"; ?>
	</script>
</body>
</html>