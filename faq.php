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
                    <h2 class="entry-title uppercase">Faq</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li class="uppercase"><a href="#">HOME</a></li>
                    <li class="active uppercase">Faq</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main" class="faqs">
                    <div class="row">
						<!--
                        <div class="col-sm-4 col-md-3">
                            <div class="travelo-box search-questions">
                                <h5 class="box-title">Search Questions</h5>
                                <form>
                                    <div class="with-icon full-width">
                                        <input type="text" class="input-text full-width" placeholder="type question here">
                                        <button class="icon green-bg white-color"><i class="soap-icon-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="travelo-box filters-container faq-topics">
                                <h4 class="box-title">FAQ Topics</h4>
                                <ul class="check-square filters-option">
                                    <li><a href="#">All</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Sliders</a></li>
                                    <li class="active"><a href="#">Manage Listings</a></li>
                                    <li><a href="#">Address &amp; Map</a></li>
                                    <li><a href="#">Reservation Requests</a></li>
                                    <li><a href="#">Your Reservations</a></li>
                                    <li><a href="#">Search Results</a></li>
                                    <li><a href="#">Color Schemes</a></li>
                                    <li><a href="#">Responsiveness</a></li>
                                    <li><a href="#">Page Builder</a></li>
                                    <li><a href="#">Travelo Support</a></li>
                                    <li><a href="#">Footer &amp; headers</a></li>
                                    <li><a href="#">Other Questions</a></li>
                                </ul>
                            </div>
                        </div>
						-->
                        <div class="col-sm-12 col-md-12">
							<h2>Frequently Asked Questions</h2>
                            <div class="toggle-container question-list">
                                <div class="panel style1">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#tgg1" class="collapsed">How do I edit my listing?</a>
                                    </h4>
                                    <div id="tgg1" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            <p>Integer enim odio, condimentum et mollis sit amet, consectetur eu dolor. Pellentesque egestas molestie urna vel luct. Phasellus non libero in lorem tincidunt semper. Sed risus enim, fringilla id consectetur sed, lacinia nec odio. Curabitur eget risus arcu usce consectetur tellus id lorem luctus id eleifend magna lobortis. Aliquam facilisis magna ac nisi porta porta. In hac habitasse platea dictumst ellentesque egestas molestie urna vel luct. Phasellus non libero in lorem tincidunt semper. <i class="skin-color">Sed risus enim</i>, fringilla id consectetur sed, lacinia nec odio urabitur eget risus arcu fusce consectetur tellus id lorem luctus id eleifend magna lobortis. Aliquam facilisis magna ac nisi porta porta. In hac habitasse platea dictumst ellentesque egestas molestie urna vel luct.</p>
                                            <p>Phasellus non <strong class="dark-blue-color">libero in lorem tincidunt semper</strong>. Sed risus enim, fringilla id consectetur sed, lacinia nec odio. Curabitur eget risus arcu.Fusce consectetur tellus id lorem luctus id eleifend magna lobortis. Aliquam facilisis magna ac nisi porta porta. In hac habitasse platea dictumst. </p>
                                        </div>
										<div class="faq-comment-container">
                                            <div class="faq-comment-header clearfix">
                                                <h5 class="s-title question">Did this answer your question?</h5>
                                                <a href="#" class="button btn-small yes">YES</a>
                                                <a href="#" class="button btn-small active no">NO</a>
                                            </div>
                                            <div class="fag-comment-content">
                                                <div class="yes-comment" style="display: none;">
                                                    <h5 class="s-title">Thank you for your feedback!</h5>
                                                </div>
                                                <div class="no-comment">
                                                    <div class="row">
                                                        <div class="col-sm-5 pull-right">
                                                            <h5 class="title">How can this FAQ be improved?</h5>
                                                            <p>Please note that this information is used only to improve our FAQ content and is not sent to our customer service team.</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <form class="comment-form">
                                                                <div class="form-group">
                                                                    <textarea rows="6" class="input-text full-width" placeholder="type here your message"></textarea>
                                                                </div>
                                                                <button type="submit" class="btn-small">SEND MESSAGE</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel style1">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#tgg2">How do I edit my pricing settings? </a>
                                    </h4>
                                    <div id="tgg2" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            <p>Integer enim odio, condimentum et mollis sit amet, consectetur eu dolor. Pellentesque egestas molestie urna vel luct. Phasellus non libero in lorem tincidunt semper. Sed risus enim, fringilla id consectetur sed, lacinia nec odio. Curabitur eget risus arcu usce consectetur tellus id lorem luctus id eleifend magna lobortis. Aliquam facilisis magna ac nisi porta porta. In hac habitasse platea dictumst ellentesque egestas molestie urna vel luct. Phasellus non libero in lorem tincidunt semper. <i class="skin-color">Sed risus enim</i>, fringilla id consectetur sed, lacinia nec odio urabitur eget risus arcu fusce consectetur tellus id lorem luctus id eleifend magna lobortis. Aliquam facilisis magna ac nisi porta porta. In hac habitasse platea dictumst ellentesque egestas molestie urna vel luct.</p>
                                            <p>Phasellus non <strong class="dark-blue-color">libero in lorem tincidunt semper</strong>. Sed risus enim, fringilla id consectetur sed, lacinia nec odio. Curabitur eget risus arcu.Fusce consectetur tellus id lorem luctus id eleifend magna lobortis. Aliquam facilisis magna ac nisi porta porta. In hac habitasse platea dictumst. </p>
                                        </div>
                                        <div class="faq-comment-container">
                                            <div class="faq-comment-header clearfix">
                                                <h5 class="s-title question">Did this answer your question?</h5>
                                                <a href="#" class="button btn-small yes">YES</a>
                                                <a href="#" class="button btn-small active no">NO</a>
                                            </div>
                                            <div class="fag-comment-content">
                                                <div class="yes-comment" style="display: none;">
                                                    <h5 class="s-title">Thank you for your feedback!</h5>
                                                </div>
                                                <div class="no-comment">
                                                    <div class="row">
                                                        <div class="col-sm-5 pull-right">
                                                            <h5 class="title">How can this FAQ be improved?</h5>
                                                            <p>Please note that this information is used only to improve our FAQ content and is not sent to our customer service team.</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <form class="comment-form">
                                                                <div class="form-group">
                                                                    <textarea rows="6" class="input-text full-width" placeholder="type here your message"></textarea>
                                                                </div>
                                                                <button type="submit" class="btn-small">SEND MESSAGE</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel style1">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#tgg3" class="collapsed">How can I manage Instant Book settings? </a>
                                    </h4>
                                    <div id="tgg3" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="panel style1">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#tgg4" class="collapsed">How do I list multiple rooms? </a>
                                    </h4>
                                    <div id="tgg4" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="panel style1">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#tgg5" class="collapsed">How do I use my calendar? </a>
                                    </h4>
                                    <div id="tgg5" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="panel style1">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#tgg6" class="collapsed">How do I edit my calendar? </a>
                                    </h4>
                                    <div id="tgg6" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="panel style1">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#tgg7" class="collapsed">Why was my listing deactivated? </a>
                                    </h4>
                                    <div id="tgg7" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="panel style1">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#tgg8" class="collapsed">How do I turn off or delete my listing? </a>
                                    </h4>
                                    <div id="tgg8" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            
                                        </div>
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

