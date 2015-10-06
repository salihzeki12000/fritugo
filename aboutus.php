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
                    <h2 class="entry-title uppercase">About Us</h2>
                </div>
                <ul class="breadcrumbs pull-right uppercase">
                    <li><a href="#">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main">
					<div class="large-block image-box style6">
						<?php
							$counter = 1;
							$query = "SELECT a.post_meta,a.description,ai.image FROM frtg_about a LEFT JOIN frtg_about_image ai ON ai.about_id = a.id WHERE a.id = 1 OR a.id = 2 OR a.id = 3";
							$result = $mysqli->query($query);
							while($row = $result->fetch_array(MYSQLI_ASSOC)){
								if($counter != 2){
									echo '
										<article class="box">
											<figure class="col-md-5">
												<a href="#" title="" class="middle-block"><img class="middle-item" src="'.$row['image'].'" alt="" width="476" height="318" /></a>
											</figure>
											<div class="details col-md-offset-5">
												<h4 class="box-title">'.$row['post_meta'].'</h4>
												<p>'.$row['description'].'</p>
											</div>
										</article>
									';
								}
								else{
									echo '
										<article class="box">
											<figure class="col-md-5 pull-right middle-block">
												<a href="#" title=""><img class="middle-item" src="'.$row['image'].'" alt="" width="476" height="318" /></a>
											</figure>
											<div class="details col-md-7">
												<h4 class="box-title">'.$row['post_meta'].'</h4>
												<p>'.$row['description'].'</p>
											</div>
										</article>
									';
								}
							$counter++;
							}
						?>
                    </div>

                    <div class="large-block">
                        <h2>Our Team</h2>
                        <div class="row image-box style1 team">
							<?php
								$teams = fetch_db('frtg_team','ORDER BY id ASC');
								foreach($teams as $team){
									echo '
										<div class="col-sm-6 col-md-3">
											<article class="box">
												<figure>
													<a href="#"><img src="'.$team['image'].'" alt="" width="270" height="263" /></a>
													<figcaption>
														<ul class="social-icons clearfix">
									';
									$socials = fetch_db('frtg_team_social_media','WHERE team_id = '.$team['id']);
									foreach($socials as $social){
										echo '
											<li class="'.$social['name'].'"><a title="'.$social['name'].'" href="'.$social['link'].'" data-toggle="tooltip"><i class="'.$social['icon'].'"></i></a></li>
										';
									}
									echo ' 
														</ul>
													</figcaption>
												</figure>
												<div class="details">
													<h4 class="box-title"><a href="#">'.$team['name'].'<small>'.$team['position'].'</small></a></h4>
												</div>
											</article>
										</div>
									';
								}
							?>
                        </div>
                    </div>
					
					<div class="image-style style1 large-block">
                        <ul class="image-block column-3 pull-left clearfix">
							<?php
								$query = "SELECT a.post_meta,a.description,ai.image FROM frtg_about a LEFT JOIN frtg_about_image ai ON ai.about_id = a.id WHERE a.id = 4";
								$result = $mysqli->query($query);
								while($row = $result->fetch_array(MYSQLI_ASSOC)){
									$btitle = $row['post_meta'];
									$bcontent = $row['description'];
									echo '
										<li><a href="#" class="middle-block"><img class="middle-item" src="'.$row['image'].'" alt="" /></a></li>
									';
								}
							?>
                        </ul>

                        <h1 class="title"><?php echo $btitle; ?></h1>
                        <p><?php echo $bcontent; ?></p>
                        <div class="clearfix"></div>
                    </div>
                </div> <!-- end main -->
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
    
</body>
</html>

