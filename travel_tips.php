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
                                    <div class="post">
                                        <div class="post-content-wrapper">
                                            <figure class="image-container">
                                                <a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt="" /></a>
                                            </figure>
                                            <div class="details">
                                                <h2 class="entry-title"><a href="travel_tips_read.php">Standard single image post</a></h2>
                                                <div class="excerpt-container">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nis type specimen book. It has survived not only five centuries.</p>
                                                </div>
                                                <div class="post-meta">
                                                    <div class="entry-date">
                                                        <label class="date">29</label>
                                                        <label class="month">Aug</label>
                                                    </div>
                                                    <div class="entry-author fn">
                                                        <i class="icon soap-icon-user"></i> Posted By:
                                                        <a href="#" class="author">Jessica Browen</a>
                                                    </div>
                                                    <div class="entry-action">
                                                        <a href="#" class="button entry-comment btn-small"><i class="soap-icon-comment"></i><span>30 Comments</span></a>
                                                        <a href="#" class="button btn-small"><i class="soap-icon-wishlist"></i><span>22 Likes</span></a>
                                                        <span class="entry-tags"><i class="soap-icon-features"></i><span><a href="#">Adventure</a>, <a href="#">Romance</a></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="post-content-wrapper">
                                            <div class="flexslider photo-gallery style3">
                                                <ul class="slides">
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                </ul>
                                            </div>
                                            <div class="details">
                                                <h2 class="entry-title"><a href="travel_tips_read.php">Slideshow post with slider</a></h2>
                                                <div class="excerpt-container">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nis type specimen book. It has survived not only five centuries.</p>
                                                </div>
                                                <div class="post-meta">
                                                    <div class="entry-date">
                                                        <label class="date">29</label>
                                                        <label class="month">Aug</label>
                                                    </div>
                                                    <div class="entry-author fn">
                                                        <i class="icon soap-icon-user"></i> Posted By:
                                                        <a href="#" class="author">Jessica Browen</a>
                                                    </div>
                                                    <div class="entry-action">
                                                        <a href="#" class="button entry-comment btn-small"><i class="soap-icon-comment"></i><span>30 Comments</span></a>
                                                        <a href="#" class="button btn-small"><i class="soap-icon-wishlist"></i><span>22 Likes</span></a>
                                                        <span class="entry-tags"><i class="soap-icon-features"></i><span><a href="#">Adventure</a>, <a href="#">Romance</a></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="post-content-wrapper">
                                            <div class="video-container">
                                                <div class="full-video">
                                                    <iframe src="http://www.youtube.com/embed/mcixldqDIEQ?wmode=transparent" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <h2 class="entry-title"><a href="travel_tips_read.php">Travelo 1 minute video post</a></h2>
                                                <div class="excerpt-container">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nis type specimen book. It has survived not only five centuries.</p>
                                                </div>
                                                <div class="post-meta">
                                                    <div class="entry-date">
                                                        <label class="date">29</label>
                                                        <label class="month">Aug</label>
                                                    </div>
                                                    <div class="entry-author fn">
                                                        <i class="icon soap-icon-user"></i> Posted By:
                                                        <a href="#" class="author">Jessica Browen</a>
                                                    </div>
                                                    <div class="entry-action">
                                                        <a href="#" class="button entry-comment btn-small"><i class="soap-icon-comment"></i><span>30 Comments</span></a>
                                                        <a href="#" class="button btn-small"><i class="soap-icon-wishlist"></i><span>22 Likes</span></a>
                                                        <span class="entry-tags"><i class="soap-icon-features"></i><span><a href="#">Adventure</a>, <a href="#">Romance</a></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="post-content-wrapper">
                                            <div class="flexslider photo-gallery style1" id="post-slideshow1" data-sync="#post-carousel1">
                                                <ul class="slides">
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                </ul>
                                            </div>
                                            <div class="flexslider image-carousel style1" id="post-carousel1"  data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#post-slideshow1">
                                                <ul class="slides">
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                                </ul>
                                            </div>
                                            <div class="details">
                                                <h2 class="entry-title"><a href="travel_tips_read.php">Gallery post with slider</a></h2>
                                                <div class="excerpt-container">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nis type specimen book. It has survived not only five centuries.</p>
                                                </div>
                                                <div class="post-meta">
                                                    <div class="entry-date">
                                                        <label class="date">29</label>
                                                        <label class="month">Aug</label>
                                                    </div>
                                                    <div class="entry-author fn">
                                                        <i class="icon soap-icon-user"></i> Posted By:
                                                        <a href="#" class="author">Jessica Browen</a>
                                                    </div>
                                                    <div class="entry-action">
                                                        <a href="#" class="button entry-comment btn-small"><i class="soap-icon-comment"></i><span>30 Comments</span></a>
                                                        <a href="#" class="button btn-small"><i class="soap-icon-wishlist"></i><span>22 Likes</span></a>
                                                        <span class="entry-tags"><i class="soap-icon-features"></i><span><a href="#">Adventure</a>, <a href="#">Romance</a></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post without-featured-item">
                                        <div class="post-content-wrapper">
                                            <div class="details">
                                                <h2 class="entry-title"><a href="travel_tips_read.php">Post without a featured image</a></h2>
                                                <div class="excerpt-container">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nis type specimen book. It has survived not only five centuries.</p>
                                                </div>
                                                <div class="post-meta">
                                                    <div class="entry-date">
                                                        <label class="date">29</label>
                                                        <label class="month">Aug</label>
                                                    </div>
                                                    <div class="entry-author fn">
                                                        <i class="icon soap-icon-user"></i> Posted By:
                                                        <a href="#" class="author">Jessica Browen</a>
                                                    </div>
                                                    <div class="entry-action">
                                                        <a href="#" class="button entry-comment btn-small"><i class="soap-icon-comment"></i><span>30 Comments</span></a>
                                                        <a href="#" class="button btn-small"><i class="soap-icon-wishlist"></i><span>22 Likes</span></a>
                                                        <span class="entry-tags"><i class="soap-icon-features"></i><span><a href="#">Adventure</a>, <a href="#">Romance</a></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="post-content-wrapper">
                                            <div class="flexslider photo-gallery style4">
                                                <ul class="slides">
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                    <li><a href="travel_tips_read.php"><img src="http://placehold.it/870x342" alt=""></a></li>
                                                </ul>
                                            </div>
                                            <div class="details">
                                                <h2 class="entry-title"><a href="travel_tips_read.php">Slideshow post without slider</a></h2>
                                                <div class="excerpt-container">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nis type specimen book. It has survived not only five centuries.</p>
                                                </div>
                                                <div class="post-meta">
                                                    <div class="entry-date">
                                                        <label class="date">29</label>
                                                        <label class="month">Aug</label>
                                                    </div>
                                                    <div class="entry-author fn">
                                                        <i class="icon soap-icon-user"></i> Posted By:
                                                        <a href="#" class="author">Jessica Browen</a>
                                                    </div>
                                                    <div class="entry-action">
                                                        <a href="#" class="button entry-comment btn-small"><i class="soap-icon-comment"></i><span>30 Comments</span></a>
                                                        <a href="#" class="button btn-small"><i class="soap-icon-wishlist"></i><span>22 Likes</span></a>
                                                        <span class="entry-tags"><i class="soap-icon-features"></i><span><a href="#">Adventure</a>, <a href="#">Romance</a></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="button btn-large full-width uppercase">More Tips</a>
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
                                <li><a href="#">All</a></li>
								<?php
									$categories = fetch_db('frtg_tips_category','ORDER BY name ASC');
									foreach($categories as $category){
										$post_count = count_rows('frtg_tips','WHERE category_id = '.$category['id']);
										echo '
											<li><a href="">'.$category['name'].'<small>('.$post_count.')</small></a></li>
										';
									}
								?>
                            </ul>
                            <a class="button btn-mini uppercase">Search</a>
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
    
</body>
</html>

