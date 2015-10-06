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
							<form class="booking-form" action="plan-view.php" method="POST">
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
											<input type="text" class="input-text full-width" placeholder="Osaka, Japan" value="" />
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
											<button type="submit" name="view_plan" class="full-width btn-large uppercase">View</button>
										</div>
									</div>
								</div>
							</form>
							<?php if(isset($_POST['view_plan'])){ ?>
								<hr />
								<div class="travelo-box travel-ideas">
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
							<?php } ?>
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