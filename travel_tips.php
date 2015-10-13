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
                    <h2 class="entry-title uppercase">Travel Tips</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li class="uppercase"><a href="#">Home</a></li>
                    <li class="active uppercase">Travel Tips</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-sm-8 col-md-9">
                        <div class="page">
                            <div class="post-content">
                                <div class="blog-infinite">
									<?php
										$tips = "SELECT t.id AS id,t.created AS created,t.tags AS tags,t.title AS title,t.content AS content,t.likes AS likes,t.views AS views,t.post_type AS post_type,tc.name AS category,u.username AS author,up.picture AS picture FROM frtg_tips t LEFT JOIN frtg_tips_category tc ON tc.id = t.category_id LEFT JOIN frtg_user u ON u.id = t.user_id LEFT JOIN frtg_user_profile up ON up.user_id = u.id WHERE t.flag = 2 ORDER BY t.created DESC LIMIT 5";
										$result = $mysqli->query($tips);
										while($tip = $result->fetch_array(MYSQLI_ASSOC)){
											if($tip['post_type'] == 1){
												$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
												foreach($timages as $timage){
													$post_image = $timage['images'];
													$alt = $timage['alt'];
													$title = $timage['title'];
												}
												$short_description = explode('</p>',$tip['content']);
												echo '
													<div class="post">
														<div class="post-content-wrapper">
															<figure class="image-container">
																<a href="travel_tips_read.php"><img src="'.$post_image.'" alt="'.$title.'" title="'.$alt.'" /></a>
															</figure>
															<div class="details">
																<h2 class="entry-title"><a href="travel_tips_read.php">'.$tip['title'].'</a></h2>
																<div class="excerpt-container">
																	'.$short_description[0].'
																</div>
																<div class="post-meta">
																	<div class="entry-date">
																		<label class="date">'.date('d',$tip['created']).'</label>
																		<label class="month">'.date('M',$tip['created']).'</label>
																		<label class="year">'.date('Y',$tip['created']).'</label>
																	</div>
																	<div class="entry-author fn">
																		Author:<br/>
																		<img src="'.$tip['picture'].'" class="tips_profile_picture_thumb img-responsive">
																		<a href="#" class="author">'.$tip['author'].'</a>
																	</div>
																	<div class="entry-action">
																		<a href="#" class="button entry-comment btn-small"><i class="soap-icon-comment"></i><span>30 Comments</span></a>
																		<a href="#" class="button btn-small"><i class="soap-icon-binoculars"></i><span>'.$tip['views'].' Views</span></a>
																		<a href="#" class="button btn-small"><i class="soap-icon-wishlist"></i><span>'.$tip['likes'].' Likes</span></a>
																		<span class="entry-tags"><i class="soap-icon-features"></i><span><a href="#">'.$tip['category'].'</a></span></span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												';
											}
											else if($tip['post_type'] == 2){
												$short_description = explode('</p>',$tip['content']);
												echo '
													<div class="post">
														<div class="post-content-wrapper">
															<div class="flexslider photo-gallery style3">
																<ul class="slides">
												';
												$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
												foreach($timages as $timage){
													echo '
														<li><a href="travel_tips_read.php"><img src="'.$timage['images'].'" alt="'.$timage['alt'].'" title="'.$timage['title'].'"></a></li>
													';
												}
												echo '
																</ul>
															</div>
															<div class="details">
																<h2 class="entry-title"><a href="travel_tips_read.php">'.$tip['title'].'</a></h2>
																<div class="excerpt-container">
																	'.$short_description[0].'
																</div>
																<div class="post-meta">
																	<div class="entry-date">
																		<label class="date">'.date('d',$tip['created']).'</label>
																		<label class="month">'.date('M',$tip['created']).'</label>
																		<label class="year">'.date('Y',$tip['created']).'</label>
																	</div>
																	<div class="entry-author fn">
																		Author:<br/>
																		<img src="'.$tip['picture'].'" class="tips_profile_picture_thumb img-responsive">
																		<a href="#" class="author">'.$tip['author'].'</a>
																	</div>
																	<div class="entry-action">
																		<a href="#" class="button entry-comment btn-small"><i class="soap-icon-comment"></i><span>30 Comments</span></a>
																		<a href="#" class="button btn-small"><i class="soap-icon-binoculars"></i><span>'.$tip['views'].' Views</span></a>
																		<a href="#" class="button btn-small"><i class="soap-icon-wishlist"></i><span>'.$tip['likes'].' Likes</span></a>
																		<span class="entry-tags"><i class="soap-icon-features"></i><span><a href="#">'.$tip['category'].'</a></span></span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												';
											}
											else if($tip['post_type'] == 3){
												$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
												foreach($timages as $timage){
													$post_image = $timage['images'];
												}
												$short_description = explode('</p>',$tip['content']);
												echo '
													<div class="post">
														<div class="post-content-wrapper">
															<div class="video-container">
																<div class="full-video">
																	'.$timage['images'].'
																</div>
															</div>
															<div class="details">
																<h2 class="entry-title"><a href="travel_tips_read.php">'.$tip['title'].'</a></h2>
																<div class="excerpt-container">
																	'.$short_description[0].'
																</div>
																<div class="post-meta">
																	<div class="entry-date">
																		<label class="date">'.date('d',$tip['created']).'</label>
																		<label class="month">'.date('M',$tip['created']).'</label>
																		<label class="year">'.date('Y',$tip['created']).'</label>
																	</div>
																	<div class="entry-author fn">
																		Author:<br/>
																		<img src="'.$tip['picture'].'" class="tips_profile_picture_thumb img-responsive">
																		<a href="#" class="author">'.$tip['author'].'</a>
																	</div>
																	<div class="entry-action">
																		<a href="#" class="button entry-comment btn-small"><i class="soap-icon-comment"></i><span>30 Comments</span></a>
																		<a href="#" class="button btn-small"><i class="soap-icon-binoculars"></i><span>'.$tip['views'].' Views</span></a>
																		<a href="#" class="button btn-small"><i class="soap-icon-wishlist"></i><span>'.$tip['likes'].' Likes</span></a>
																		<span class="entry-tags"><i class="soap-icon-features"></i><span><a href="#">'.$tip['category'].'</a></span></span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												';
											}
											else if($tip['post_type'] == 4){
												$short_description = explode('</p>',$tip['content']);
												echo '
													<div class="post">
														<div class="post-content-wrapper">
															<div class="flexslider photo-gallery style1" id="post-slideshow1" data-sync="#post-carousel1">
																<ul class="slides">
												';
												$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
												foreach($timages as $timage){
													echo '
														<li><a href="travel_tips_read.php"><img src="'.$timage['images'].'" alt="'.$timage['alt'].'" title="'.$timage['title'].'"></a></li>
													';
												}
												echo '
																</ul>
															</div>
															<div class="flexslider image-carousel style1" id="post-carousel1"  data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#post-slideshow1">
																<ul class="slides">
												';
												$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
												foreach($timages as $timage){
													echo '
														<li><img src="'.autoThumb($timage['images'],'_70x70').'" alt="'.$timage['alt'].'" title="'.$timage['title'].'"/></li>
													';
												}
												echo '
																</ul>
															</div>
															<div class="details">
																<h2 class="entry-title"><a href="travel_tips_read.php">'.$tip['title'].'</a></h2>
																<div class="excerpt-container">
																	'.$short_description[0].'
																</div>
																<div class="post-meta">
																	<div class="entry-date">
																		<label class="date">'.date('d',$tip['created']).'</label>
																		<label class="month">'.date('M',$tip['created']).'</label>
																		<label class="year">'.date('Y',$tip['created']).'</label>
																	</div>
																	<div class="entry-author fn">
																		Author:<br/>
																		<img src="'.$tip['picture'].'" class="tips_profile_picture_thumb img-responsive">
																		<a href="#" class="author">'.$tip['author'].'</a>
																	</div>
																	<div class="entry-action">
																		<a href="#" class="button entry-comment btn-small"><i class="soap-icon-comment"></i><span>30 Comments</span></a>
																		<a href="#" class="button btn-small"><i class="soap-icon-binoculars"></i><span>'.$tip['views'].' Views</span></a>
																		<a href="#" class="button btn-small"><i class="soap-icon-wishlist"></i><span>'.$tip['likes'].' Likes</span></a>
																		<span class="entry-tags"><i class="soap-icon-features"></i><span><a href="#">'.$tip['category'].'</a></span></span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												';
											}
											else if($tip['post_type'] == 5){
												$short_description = explode('</p>',$tip['content']);
												echo '
													<div class="post without-featured-item">
														<div class="post-content-wrapper">
															<div class="details">
																<br/><br/><br/>
																<h2 class="entry-title"><a href="travel_tips_read.php">'.$tip['title'].'</a></h2>
																<div class="excerpt-container">
																	'.$short_description[0].'
																</div>
																<div class="post-meta">
																	<div class="entry-date">
																		<label class="date">'.date('d',$tip['created']).'</label>
																		<label class="month">'.date('M',$tip['created']).'</label>
																		<label class="year">'.date('Y',$tip['created']).'</label>
																	</div>
																	<div class="entry-author fn">
																		Author:<br/>
																		<img src="'.$tip['picture'].'" class="tips_profile_picture_thumb img-responsive">
																		<a href="#" class="author">'.$tip['author'].'</a>
																	</div>
																	<div class="entry-action">
																		<a href="#" class="button entry-comment btn-small"><i class="soap-icon-comment"></i><span>30 Comments</span></a>
																		<a href="#" class="button btn-small"><i class="soap-icon-binoculars"></i><span>'.$tip['views'].' Views</span></a>
																		<a href="#" class="button btn-small"><i class="soap-icon-wishlist"></i><span>'.$tip['likes'].' Likes</span></a>
																		<span class="entry-tags"><i class="soap-icon-features"></i><span><a href="#">'.$tip['category'].'</a></span></span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												';
											}
											else if($tip['post_type'] == 6){
												$short_description = explode('</p>',$tip['content']);
												echo '
													<div class="post">
														<div class="post-content-wrapper">
															<div class="flexslider photo-gallery style4">
																<ul class="slides">
												';
												$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
												foreach($timages as $timage){
													echo '
														<li><a href="travel_tips_read.php"><img src="'.$timage['images'].'" alt="'.$timage['alt'].'" title="'.$timage['title'].'"></a></li>
													';
												}
												echo '
																</ul>
															</div>
															<div class="details">
																<h2 class="entry-title"><a href="travel_tips_read.php">'.$tip['title'].'</a></h2>
																<div class="excerpt-container">
																	'.$short_description[0].'
																</div>
																<div class="post-meta">
																	<div class="entry-date">
																		<label class="date">'.date('d',$tip['created']).'</label>
																		<label class="month">'.date('M',$tip['created']).'</label>
																		<label class="year">'.date('Y',$tip['created']).'</label>
																	</div>
																	<div class="entry-author fn">
																		Author:<br/>
																		<img src="'.$tip['picture'].'" class="tips_profile_picture_thumb img-responsive">
																		<a href="#" class="author">'.$tip['author'].'</a>
																	</div>
																	<div class="entry-action">
																		<a href="#" class="button entry-comment btn-small"><i class="soap-icon-comment"></i><span>30 Comments</span></a>
																		<a href="#" class="button btn-small"><i class="soap-icon-binoculars"></i><span>'.$tip['views'].' Views</span></a>
																		<a href="#" class="button btn-small"><i class="soap-icon-wishlist"></i><span>'.$tip['likes'].' Likes</span></a>
																		<span class="entry-tags"><i class="soap-icon-features"></i><span><a href="#">'.$tip['category'].'</a></span></span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												';
											}
											$tips_id = $tip['id'];
										}
									?>
                                </div>
                                <a class="button btn-large full-width uppercase more_tips" id="<?php echo $tips_id; ?>">More Tips</a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar col-sm-4 col-md-3">
                        <div class="travelo-box">
                            <h5 class="box-title">Search Tips</h5>
                            <div class="with-icon full-width">
                                <input type="text" class="input-text full-width" placeholder="story name or category">
                                <button class="icon green-bg white-color"><i class="soap-icon-search"></i></button>
                            </div>
                        </div>
                        <div class="tab-container box">
                            <ul class="tabs full-width">
								<li><a data-toggle="tab" href="#new-posts">New</a></li>
								<li class="active"><a data-toggle="tab" href="#popular-posts">Popular</a></li>
								<li><a data-toggle="tab" href="#recent-posts">Commented</a></li>
							</ul>
                            <div class="tab-content">
                                <div id="recent-posts" class="tab-pane fade">
                                    
                                </div>
                                <div id="popular-posts" class="tab-pane fade in active">
                                    <div class="image-box style14">
                                        <article class="box">
                                            <figure><a href="#" title=""><img width="63" height="59" src="http://placehold.it/63x59" alt=""></a></figure>
                                            <div class="details">
                                                <h5 class="box-title"><a href="#">Half-Day Island Tour</a></h5>
                                                <label class="price-wrapper"><span class="price-per-unit">$35</span>Family Package</label>
                                            </div>
                                        </article>
                                        <article class="box">
                                            <figure><a href="#" title=""><img width="63" height="59" src="http://placehold.it/63x59" alt=""></a></figure>
                                            <div class="details">
                                                <h5 class="box-title"><a href="#">Ocean Park Tour</a></h5>
                                                <label class="price-wrapper"><span class="price-per-unit">$26</span>Per Person</label>
                                            </div>
                                        </article>
                                        <article class="box">
                                            <figure><a href="#" title=""><img width="63" height="59" src="http://placehold.it/63x59" alt=""></a></figure>
                                            <div class="details">
                                                <h5 class="box-title"><a href="#">Dream World Trip</a></h5>
                                                <label class="price-wrapper"><span class="price-per-unit">$11</span>holiday offer</label>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div id="new-posts" class="tab-pane fade">
                                    
                                </div>
                            </div>
                        </div>
						<div class="travelo-box filters-container">
                            <h4 class="box-title">Categories</h4>
                            <ul class="check-square categories-filter filters-option">
								<?php
									$categories = fetch_db('frtg_tips_category','ORDER BY name ASC');
									foreach($categories as $category){
										$post_count = count_rows('frtg_tips','WHERE category_id = '.$category['id']);
										echo '
											<li id="'.$category['id'].'"><a href="">'.$category['name'].'<small>('.$post_count.')</small></a></li>
										';
									}
								?>
                            </ul>
                            <a class="button btn-small uppercase">Search</a>
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
    
    <!-- Flex Slider -->
    <script type="text/javascript" src="components/flexslider/jquery.flexslider-min.js"></script>

    <!-- Fit Video -->
    <script type="text/javascript" src="js/jquery.fitvids.min.js"></script>

    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="js/theme-scripts.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
	
	<!-- LOAD MORE SCRIPT -->
	<script type="text/javascript">
		jQuery(function() {
			// Load More Button
			jQuery('a.more_tips').live("click",function() 
			{
				var ID = jQuery(this).attr("id");
				
				jQuery("#"+ID).html('<img src="images/moreajax.gif" />');
				
				jQuery.ajax({
					url: "ajax/ajax.php",
					type: "POST",
					data: {
						mod: "travel_tips",
						last_id: ID,
					},
					dataType: "JSON",
					cache: false,
					success: function(data){
						if(data.status == "success"){
							jQuery("div.blog-infinite").append(data.data);
							jQuery("a.more_tips").html(data.button);
						}
						else{
							jQuery("a.more_tips").replaceWith(data.button);
						}
					}
				});
				
				return false;
			});
			
			// Multiple Category Selection
			jQuery("ul.check-square > li").live("click",function(){
				jQuery.getScript("js/scripts.js");
				var category = "";
				jQuery("ul.check-square > li.active").each(function(){
					category += jQuery(this).attr('id')+",";
				});
				jQuery.ajax({
					url: "ajax/ajax.php",
					type: "POST",
					data: {
						mod: "multiple_category_selection",
						category: category,
					},
					dataType: "JSON",
					cache: false,
					success: function(data){
						if(data.status == "success"){
							jQuery("div.blog-infinite").html(data.data);
							jQuery("a.more_tips").replaceWith(data.button);
						}
						else{
							jQuery("div.blog-infinite").html(data.data);
							jQuery("a.more_tips").replaceWith(data.button);
						}
					}
				});
			});
		});
		
	</script>
</body>
</html>

