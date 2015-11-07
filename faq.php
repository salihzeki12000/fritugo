<?php
	session_start();
	include "library/connect.php";
	include "library/function.lib.php";
    error_reporting(0);
  
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
                        <?php

                        $faqs = fetch_db('frtg_faq','');


                        ?>

                        <div class="col-sm-12 col-md-12">
							<h2>Frequently Asked Questions</h2>
                            <div class="toggle-container question-list">
                                <?php
                                foreach ($faqs as $faq)
                                {
                                
                                echo "<div class='panel style1'>";
                                    echo "<h4 class='panel-title'>";
                                        echo"<a data-toggle='collapse' href='#".$faq['code']."' class='collapsed'>".$faq['question']."</a>";
                                    echo "</h4>";
                                    echo "<div id='".$faq['code']."' class='panel-collapse collapse'>";
                                        echo"<div class='panel-content'>";
                                            echo $faq['answer'];
                                        echo "</div>";
										echo "<div class='faq-comment-container'>";
                                            echo "<div class='faq-comment-header clearfix'>";
                                                

                                                $user_id = $_SESSION['user_logged'];
                                                $user_feedback = count_rows('frtg_faq_feedback','WHERE user_id='.$user_id.' AND helpful!=3;');
                                                if($user_id!=null)
                                                {

                                                //form for YES or NO button 
                                                    if($user_feedback<1)
                                                    {
                                                    echo "<h5 class='s-title question'>Did this answer your question?</h5>";
                                                    echo "<form action='' method='POST'>";
                                                    echo "<div class='form-group'>";
                                                    echo "<input type='hidden'  name='id' id='id' value='".$faq['id']."'></input>";
                                                    echo "<button type='submit' name='submit_yes' class='button btn-small yes'>YES</a>";
                                                    echo "<button type='submit' name='submit_no' class='button btn-small active no'>NO</a>";
                                                    echo "</div>";
                                                    echo "</form>";
                                                    }
                                                }

                                                
                                            

                                            echo "</div>";
                                            echo "<div class='fag-comment-content'>";
                                                echo "<div class='yes-comment' style='display: none;'>";
                                                    echo "<h5 class='s-title'>Thank you for your feedback!</h5>";
                                                echo "</div>";
                                                echo"<div class='no-comment'>";
                                                    echo "<div class='row'>";
                                                        echo "<div class='col-sm-5 pull-right'>";
                                                            echo "<h5 class='title'>How can this FAQ be improved?</h5>
                                                            <p>Please note that this information is used only to improve our FAQ content and is not sent to our customer service team.</p>
                                                        </div>
                                                        <div class='col-sm-7'>
                                                            <form class='comment-form' method='POST' action=''>
                                                                <div class='form-group'>
                                                                    <textarea name = 'comment' rows='6' class='input-text full-width' placeholder='type here your message'></textarea>
                                                                    <input type='hidden' name='id' id='id' value='".$faq['id']."'></input>
                                                                </div>
                                                                <button type='submit' name='submit_comment' id='submit_comment' class='btn-small'>SEND MESSAGE</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>";
                                }?>
                                <?php
                                   if(isset($_POST['submit_comment']))
                                    {
                                        $comment = $_POST['comment'];
                                        $id = $_POST['id'];
                                        $user_id = $_SESSION['user_logged'];
                                        echo $id;
                                        $time = strtotime("now");
                                        $query = "INSERT INTO frtg_faq_feedback (id,user_id,created,faq_id,feedback) values('',$user_id,'$time','$id','$comment');";
                                        $result = $mysqli->query($query);

                                        if($result)
                                        {
                                        echo"<script>alert('Thank you for your feedback!');</script>";
                                        }

                                        else
                                        {
                                             echo"<script>alert('Failed to submit feedback, please try again.');</script>";
                                        }
                                    

                                    }

                                    if(isset($_POST['submit_yes']))
                                    {
                                        $id = $_POST['id'];
                                        $user_id = $_SESSION['user_logged'];
                                        $time = strtotime("now");
                                        $query = "INSERT INTO frtg_faq_feedback (id,user_id,created,faq_id,helpful) values('','$user_id ','$time','$id','1');";
                                        $result = $mysqli->query($query);

                                        if($result)
                                        {
                                        echo"<script>alert('Thank you for your feedback!');document.location='faq.php';</script>";
                                        }

                                        else
                                        {
                                             echo"<script>alert('Failed to submit feedback, please try again.');document.location='faq.php';</script>";
                                        }
                                    }
                                    if(isset($_POST['submit_no']))
                                    {
                                        $id = $_POST['id'];
                                        $user_id = $_SESSION['user_logged'];
                                        $time = strtotime("now");
                                        $query = "INSERT INTO frtg_faq_feedback (id,user_id,created,faq_id,helpful) values('','$user_id ','$time','$id','2');";
                                        $result = $mysqli->query($query);

                                        if($result)
                                        {
                                        echo"<script>alert('Thank you for your feedback!');document.location='faq.php';</script>";
                                        }

                                        else
                                        {
                                        echo"<script>alert('Failed to submit feedback, please try again.');document.location='faq.php';</script>";
                                        }
                                    }

                                ?>

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
	
    <script type="text/javascript" srt="js/bootbox.min.js"></script>


	<script type="text/javascript">
		<?php include "include/login_register_warning_checker.php"; ?>
	</script>
    
</body>
</html>