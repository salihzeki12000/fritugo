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
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,500,700' rel='stylesheet' type='text/css'>
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
					<h2 class="entry-title uppercase">Create Trip Plan</h2>
				</div>
				<ul class="breadcrumbs pull-right">
					<li class="uppercase"><a href="#">HOME</a></li>
					<li class="active uppercase">Create Trip Plan</li>
				</ul>
			</div>
		</div>
		<section id="content" class="gray-area">
			<div class="container">
				<div class="row">
					<div id="main" class="col-sms-6 col-sm-8 col-md-9">
						<div class="booking-section travelo-box">
							
							<form class="booking-form">
								<div class="person-information">
									<div class="form-group row">
										<div class="col-sm-6 col-md-6">
											<label>Start Date</label>
											<div class="datepicker-wrap" style="z-index:1000;">
												<input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
											</div>
										</div>
										<div class="col-sm-6 col-md-6">
											<label>End Date</label>
											<div class="datepicker-wrap" style="z-index:1000;">
												<input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-6 col-md-6">
											<label>Destination</label>
											<input type="text" class="input-text full-width" placeholder="Osaka, Japan" value="" id="destination" />
										</div>
										<div class="col-sm-6 col-md-6">
											<label>Budget</label>
											<div id="price-filter" class="">
												<div class="panel-content" style="padding-top:5px; padding-bottom:5px;">
													<div id="price-range" style="margin-bottom:5px;"></div>
													<span class="min-price-label pull-left"></span>
													<span class="max-price-label pull-right"></span>
													<div class="clearer"></div>
												</div><!-- end content -->
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-3 col-md-3 pull-right">
											<button type="submit" class="full-width btn-large uppercase next-right-button">Next</button>
										</div>
									</div>
								</div>
								<hr />
								<div class="travelo-box travel-ideas">
									<a href="#" class="button btn-mini pull-right">RESET ALL</a>
									<h2 class="idea-title box"><span class="index">1</span>Places</h2>
									<div class="suggested-places">
										<div class="overflow-hidden">
											<div class="row">
												<div class="col-sm-4">
													<ul class="check-square box">
														<li class="active">
															<a href="#">
																<h6 class="box-title">Hotels<small>55,785 places</small></h6>
															</a>
														</li>
														<li>
															<a href="#">
																<h6 class="box-title">Restaurants<small>466 places</small></h6>
															</a>
														</li>
														<li>
															<a href="#">
																<h6 class="box-title">Tourist Attractions<small>1041 places</small></h6>
															</a>
														</li>
														<li>
															<a href="#">
																<h6 class="box-title">Sports<small>307 places</small></h6>
															</a>
														</li>
														<li>
															<a href="#">
																<h6 class="box-title">Entertainments<small>3345 places</small></h6>
															</a>
														</li>
													</ul>
												</div>
												<div class="col-sm-4">
													<ul class="check-square box">
														<li>
															<a href="#">
																<h6 class="box-title">One Star<small>5,578 places</small></h6>
															</a>
														</li>
														<li>
															<a href="#">
																<h6 class="box-title">Two Stars<small>466 places</small></h6>
															</a>
														</li>
														<li>
															<a href="#">
																<h6 class="box-title">Three Stars<small>3345 places</small></h6>
															</a>
														</li>
														<li class="active">
															<a href="#">
																<h6 class="box-title">Four Stars<small>307 places</small></h6>
															</a>
														</li>
														<li>
															<a href="#">
																<h6 class="box-title">Five Stars<small>1041 places</small></h6>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<h2 class="idea-title"><span class="index">2</span>Attraction</h2>
									<div class="column-5 image-box suggestions">
										<div class="box">
											<a href="#" class="hover-effect style1">
												<img src="http://placehold.it/160x160" alt="" />
											</a>
											<h4 class="caption"><a href="#">Adventure</a></h4>
										</div>
										<div class="box">
											<a href="#" class="selected-effect">
												<img src="http://placehold.it/160x160" alt="" />
											</a>
											<h4 class="caption"><a href="#">Beaches &amp; Sun</a></h4>
										</div>
										<div class="box">
											<a href="#" class="hover-effect style1">
												<img src="http://placehold.it/160x160" alt="" />
											</a>
											<h4 class="caption"><a href="#">Casinos</a></h4>
										</div>
										<div class="box">
											<a href="#" class="hover-effect style1">
												<img src="http://placehold.it/160x160" alt="" />
											</a>
											<h4 class="caption"><a href="#">Family Fun</a></h4>
										</div>
										<div class="box">
											<a href="#" class="hover-effect style1">
												<img src="http://placehold.it/160x160" alt="" />
											</a>
											<h4 class="caption"><a href="#">History</a></h4>
										</div>
										<div class="box">
											<a href="#" class="hover-effect style1">
												<img src="http://placehold.it/160x160" alt="" />
											</a>
											<h4 class="caption"><a href="#">Culture</a></h4>
										</div>
										<div class="box">
											<a href="#" class="hover-effect style1">
												<img src="http://placehold.it/160x160" alt="" />
											</a>
											<h4 class="caption"><a href="#">Romance</a></h4>
										</div>
										<div class="box">
											<a href="#" class="selected-effect">
												<img src="http://placehold.it/160x160" alt="" />
											</a>
											<h4 class="caption"><a href="#">Shopping</a></h4>
										</div>
										<div class="box">
											<a href="#" class="hover-effect style1">
												<img src="http://placehold.it/160x160" alt="" />
											</a>
											<h4 class="caption"><a href="#">Skiing</a></h4>
										</div>
										<div class="box">
											<a href="#" class="hover-effect style1">
												<img src="http://placehold.it/160x160" alt="" />
											</a>
											<h4 class="caption"><a href="#">Clubs</a></h4>
										</div>
									</div>
									<a href="#" class="uppercase full-width button btn-large">more</a>
								</div>
							</form>
						</div>
					</div>
					<div class="sidebar col-sms-6 col-sm-4 col-md-3">
						<div class="booking-details travelo-box">
							<h4>TRIP DETAILS<a href="flight-detailed.html" class="button pull-right font-8">EDIT</a></h4>
							<article class="flight-booking-details">
								<figure class="clearfix">
									<a title="" href="flight-detailed.html" class="middle-block"><img class="middle-item" alt="" src="http://placehold.it/75x75"></a>
									<div class="travel-title">
										<h5 class="box-title">Kuta, Bali<small>Indonesia</small></h5>
									</div>
								</figure>
								<div class="details">
									<div class="constant-column-3 timing clearfix">
										<div class="check-in">
											<label>Start Date</label>
											<span>Sept 30, 2015</span>
										</div>
										<div class="duration text-center">
											<i class="soap-icon-clock"></i>
											<span>6d 5n</span>
										</div>
										<div class="check-out">
											<label>End Date</label>
											<span>Oct 5 2015</span>
										</div>
									</div>
								</div>
							</article>
							
							<h4>
								DAY 1
								<a href="flight-detailed.html" class="button next-right-button pull-right">DAY 2</a>
							</h4>
							<dl class="other-details">
								<dt class="feature font-9 bold">Hotel</dt>
									<dd class="value">&nbsp;</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Ayana Resort & Spa</a>
										<span class="pull-right">5.000.000</span><br/>
										<span>(Jimbaran)</span>
									</dd>
								<dt class="feature font-9 bold">Restaurant</dt>
									<dd class="value">&nbsp;</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Warong Legong</a>
										<span class="pull-right">29.000 <span class="lowercase">to</span> 74.000</span><br/>
										<span>(Gianyar)</span>
									</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Warung Kasa Kusu</a>
										<span class="pull-right">-</span><br/>
										<span>(Amed)</span>
									</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Secret Garden Restaurant</a>
										<span class="pull-right">-</span><br/>
										<span>(Lovina Beach)</span>
									</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Le Moulin</a>
										<span class="pull-right">29.000 <span class="lowercase">to</span> 87.000</span><br/>
										<span>(Ubud)</span>
									</dd>
								<dt class="feature font-9 bold">Tourist Attractions</dt>
									<dd class="value">&nbsp;</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Air Terjun Sekumpul</a>
										<span class="pull-right">-</span><br/>
										<span>(Singaraja)</span>
									</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Pulau Menjangan</a>
										<span class="pull-right">-</span><br/>
										<span>(Pemuteran)</span>
									</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Devil's Tears</a>
										<span class="pull-right">-</span><br/>
										<span>(Nusa Lembongan)</span>
									</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Taman Burung Bali</a>
										<span class="pull-right">-</span><br/>
										<span>(Menjangan)</span>
									</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Pantai Balangan</a>
										<span class="pull-right">-</span><br/>
										<span>(Kuta)</span>
									</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Gunung Batur</a>
										<span class="pull-right">-</span><br/>
										<span>(Kintamani)</span>
									</dd>
								<dt class="feature font-9 bold">Sports</dt>
									<dd class="value">&nbsp;</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Greenbike Cycling</a>
										<span class="pull-right">-</span><br/>
										<span>(Ubud)</span>
									</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Bali Wake Park</a>
										<span class="pull-right">-</span><br/>
										<span>(Denpasar)</span>
									</dd>
								<dt class="feature font-9 bold">Entertainments</dt>
									<dd class="value">&nbsp;</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Bar Yolo</a>
										<span class="pull-right">-</span><br/>
										<span>(Kuta)</span>
									</dd>
									<dd class="value text-left">
										<a href="#"><i class="fa fa-info-circle"></i></a>
										<a class="popup-map" href="#" data-box="48.856614, 2.352222">Ubud Stables</a>
										<span class="pull-right">-</span><br/>
										<span>(Tegalalang)</span>
									</dd>
								<dt class="total-price">Remaining Budget</dt>
									<dd class="total-price-value">9.746.000<br/>
										<span class="font-8">(Estimated)</span>
									</dd>
							</dl>
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
	
	<!-- Google Places Autocomplete API -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFq_BipqZO85dGFOpGXlEDG5Mci1uHiXA&libraries=places"></script>
	<script type="text/javascript">
		function initialize() {
			var input = document.getElementById('destination');
			var autocomplete = new google.maps.places.Autocomplete(input);
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
				max: 20000000,
				step: 250000,
				values: [ 1000000, 5000000 ],
				slide: function( event, ui ) {
					tjq(".min-price-label").html( "IDR " + addCommas(ui.values[ 0 ]));
					tjq(".max-price-label").html( "IDR " + addCommas(ui.values[ 1 ]));
				}
			});
			tjq(".min-price-label").html( "IDR " + addCommas(tjq("#price-range").slider( "values", 0 )));
			tjq(".max-price-label").html( "IDR " + addCommas(tjq("#price-range").slider( "values", 1 )));
		});
	</script>
</body>
</html>