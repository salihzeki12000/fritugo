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
<body class="single single-pos">
    <div id="page-wrapper">
        <?php include "include/nav.php"; ?>

        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title uppercase">Blog Title</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li class="uppercase"><a href="#">HOME</a></li>
                    <li class="active uppercase">Blog Title</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-sm-8 col-md-9">
                        <div class="post">
                            <figure class="image-container">
                                <a href="#"><img src="http://placehold.it/870x342" alt="" /></a>
                            </figure>
                            <div class="details">
                                <h1 class="entry-title">Standard single image post</h1>
                                <div class="post-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nis type specimen book. It has survived not only five centuries.Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla. Curabitur eleifend  tempor magna, in scelerisque urna placerat vel. Phasellus eget sem id justo consequat egestas quis facilisis metus.Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla. Curabitur eleifend tempor magna, in scelerisque urna placerat vel. Phasellus eget sem id justo consequat egestas quis facilisis metus.</p>
                                    <div class="border-box">
                                        <blockquote class="style2"><p>Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit Massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet egeat. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit sodales volutpat sapien varius vel. </p></blockquote>
                                    </div>
                                    <p>Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit. Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit.</p>
                                    <p>Massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit.</p>
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
                            <div class="single-navigation block">
                                <div class="row">
                                    <div class="col-xs-6"><a rel="prev" href="" class="button btn-large prev full-width"><i class="soap-icon-longarrow-left"></i><span>Previous Post</span></a></div>
                                    <div class="col-xs-6"><a rel="next" href="" class="button btn-large next full-width"><span>Next Post</span><i class="soap-icon-longarrow-right"></i></a></div>
                                </div>
                            </div>
                            <div class="about-author block">
                                <h2>About Author</h2>
                                <div class="about-author-container">
                                    <div class="about-author-content">
                                        <div class="avatar">
                                            <img src="http://placehold.it/270x270" width="96" height="96" alt="">
                                        </div>
                                        <div class="description">
                                            <h4><a href="#">Jessica Brown</a></h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                        </div>
                                    </div>
                                    <div class="about-author-meta clearfix">
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="soap-icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="soap-icon-googleplus"></i></a></li>
                                            <li><a href="#"><i class="soap-icon-facebook"></i></a></li>
                                            <li><a href="#"><i class="soap-icon-linkedin"></i></a></li>
                                        </ul>
                                        <a href="#" class="wrote-posts-count"><i class="soap-icon-slider"></i><span><b>30</b> Posts</span></a>
                                    </div>
                                </div>
                            </div>
							<!--
                            <h2>You Might Also Like This</h2>
                            <div class="travelo-box">
                                <div class="suggestions image-carousel style2" data-animation="slide" data-item-width="150" data-item-margin="22">
                                    <ul class="slides">
                                        <li>
                                            <a href="#" class="hover-effect">
                                                <img src="http://placehold.it/170x170" alt="" class="middle-item" />
                                            </a>
                                            <h5 class="caption">Adventure</h5>
                                        </li>
                                        <li>
                                            <a href="#" class="hover-effect">
                                                <img src="http://placehold.it/170x170" alt="" class="middle-item" />
                                            </a>
                                            <h5 class="caption">Beaches &amp; Sun</h5>
                                        </li>
                                        <li>
                                            <a href="#" class="hover-effect">
                                                <img src="http://placehold.it/170x170" alt="" class="middle-item" />
                                            </a>
                                            <h5 class="caption">Casinos</h5>
                                        </li>
                                        <li>
                                            <a href="#" class="hover-effect">
                                                <img src="http://placehold.it/170x170" alt="" class="middle-item" />
                                            </a>
                                            <h5 class="caption">Family Fun</h5>
                                        </li>
                                        <li>
                                            <a href="#" class="hover-effect">
                                                <img src="http://placehold.it/170x170" alt="" class="middle-item" />
                                            </a>
                                            <h5 class="caption">History</h5>
                                        </li>
                                        <li>
                                            <a href="#" class="hover-effect">
                                                <img src="http://placehold.it/170x170" alt="" class="middle-item" />
                                            </a>
                                            <h5 class="caption">Adventure</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
							-->
                            <div class="comments-container block">
                                <h2>3 Comments</h2>
                                <ul class="comment-list travelo-box">
                                    <li class="comment depth-1">
                                        <div class="the-comment">
                                            <div class="avatar">
                                                <img src="http://placehold.it/270x263" width="72" height="72" alt="">
                                            </div>
                                            <div class="comment-box">
                                                <div class="comment-author">
                                                    <a href="#" class="button btn-mini pull-right">REPLY</a>
                                                    <h4 class="box-title"><a href="#">David Jhon</a><small>Nov, 12, 2013</small></h4>
                                                </div>
                                                <div class="comment-text">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="comment depth-2">
                                                <div class="the-comment">
                                                    <div class="avatar">
                                                        <img src="http://placehold.it/270x263" width="72" height="72" alt="">
                                                    </div>
                                                    <div class="comment-box">
                                                        <div class="comment-author">
                                                            <a href="#" class="button btn-mini pull-right">REPLY</a>
                                                            <h4 class="box-title"><a href="#">David Jhon</a><small>Nov, 12, 2013</small></h4>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="comment depth-1">
                                        <div class="the-comment">
                                            <div class="avatar">
                                                <img src="http://placehold.it/270x263" width="72" height="72" alt="">
                                            </div>
                                            <div class="comment-box">
                                                <div class="comment-author">
                                                    <a href="#" class="button btn-mini pull-right">REPLY</a>
                                                    <h4 class="box-title"><a href="#">Kyle Martin</a><small>Nov, 12, 2013</small></h4>
                                                </div>
                                                <div class="comment-text">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-comment block">
                                <h2 class="reply-title">Post a Comment</h2>
                                <div class="travelo-box">
                                    <form class="comment-form">
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Your Name</label>
                                                <input type="text" class="input-text full-width">
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Your Email</label>
                                                <input type="text" class="input-text full-width">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea rows="6" class="input-text full-width" placeholder="write message here"></textarea>
                                        </div>
                                        
                                        <button type="submit" class="btn-large full-width">SEND COMMENT</button>
                                    </form>
                                </div>
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

