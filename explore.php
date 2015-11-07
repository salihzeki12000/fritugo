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
						<h2 class="entry-title uppercase">Explore</h2>
					</div>
					<ul class="breadcrumbs pull-right">
						<li class="uppercase"><a href="#">Home</a></li>
						<li class="active uppercase">Explore</li>
					</ul>
				</div>
			</div>
			<section id="content" class="gray-area">
				<div class="container shortcode">
					<div class="block">
						<div class="row">
							<div class="col-xs-12 col-md-12">
								<div class="flexslider photo-gallery style4">
									<ul class="slides">
										<li><img src="images/explore/1140x150.png" alt=""></li>
										<li><img src="images/explore/1140x150.png" alt=""></li>
										<li><img src="images/explore/1140x150.png" alt=""></li>
									</ul>
								</div>
								<div class="tab-container trans-style box">
									<ul class="tabs full-width">
										<li style="background:none;">
											<a href="#search" style="background:none;">
												<form method="post" class="">
													<div class="with-icon" style="width:100%;">
														<input type="text" class="input-text explore-search-box" value="" name="q" placeholder="SEARCH"/>
														<button class="icon" type="submit"><i class="soap-icon-search"></i></button>
													</div>
												</form>
											</a>
										</li>
										<li class="active"><a href="#trips" data-toggle="tab"><i class="fa fa-suitcase"></i>Trips</a></li>
										<li><a href="#people" data-toggle="tab"><i class="fa fa-users"></i>People</a></li>
										<li><a href="#tags" data-toggle="tab"><i class="fa fa-tags"></i>Tags</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane fade in active" id="trips">
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
										<div class="tab-pane fade" id="people">
											<h4>People Tab</h4>
											<p>
												This is people tab
											</p>
										</div>
										<div class="tab-pane fade" id="tags">
											<h4>Tags Tab</h4>
											<p>
												This is tags tab
											</p>
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
		<script type="text/javascript" src="js/jquery-ui.1.10.4.min.js"></script>
		<script type="text/javascript" src="js/jquery.placeholder.js"></script>
		
		<!-- Twitter Bootstrap -->
		<script type="text/javascript" src="js/bootstrap.js"></script>
		
		<!-- Flex Slider -->
		<script type="text/javascript" src="components/flexslider/jquery.flexslider-min.js"></script>
		
		<!-- load BXSlider scripts -->
		<script type="text/javascript" src="components/jquery.bxslider/jquery.bxslider.min.js"></script>
		
		<!-- parallax -->
		<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
		
		<!-- waypoint -->
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		
		<!-- load page Javascript -->
		<script type="text/javascript" src="js/theme-scripts.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		
		<script type="text/javascript">
			<?php include "include/login_register_warning_checker.php"; ?>
		</script>
		
	</body>
</html>