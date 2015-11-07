<footer id="footer" class="style5">
	<div class="footer-wrapper" style="background:#fff;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<h2 class="uppercase font-11">About Fritugo</h2>
					<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque.</p>
					<address class="contact-details">
						<!--
						<span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
						<br />
						-->
						<a href="#" class="contact-email"><i class="soap-icon-letter"></i> support@fritugo.com</a>
					</address>
					<ul class="social-icons clearfix">
						<li class="twitter"><a title="twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
						<li class="googleplus"><a title="googleplus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
						<li class="facebook"><a title="facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
						<li class="linkedin"><a title="linkedin" href="#" data-toggle="tooltip"><i class="soap-icon-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<h2 class="uppercase font-11">Discover</h2>
					<ul class="discover triangle hover row">
						<li class="col-xs-6"><a href="aboutus.php">About Us</a></li>
						<li class="col-xs-6"><a href="travel_tips.php">Travel Tips</a></li>
						<li class="col-xs-6"><a href="contact.php">Contact</a></li>
						<li class="col-xs-6"><a href="faq.php">FAQ</a></li>
						<li class="col-xs-6"><a href="policies.php">Policies</a></li>
						<li class="col-xs-6"><a href="sitemap.php">Site Map</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<h2 class="uppercase font-11">Travel News</h2>
					<ul class="travel-news">
						<li>
							<div class="thumb">
								<a href="#">
									<img src="http://placehold.it/63x63" alt="" width="63" height="63" />
								</a>
							</div>
							<div class="description">
								<h5 class="s-title"><a href="#">Amazing Places</a></h5>
								<p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
								<span class="date">25 Sep, 2013</span>
							</div>
						</li>
						<li>
							<div class="thumb">
								<a href="#">
									<img src="http://placehold.it/63x63" alt="" width="63" height="63" />
								</a>
							</div>
							<div class="description">
								<h5 class="s-title"><a href="#">Travel Insurance</a></h5>
								<p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
								<span class="date">24 Sep, 2013</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<h2 class="uppercase font-11">Powered By</h2>
					<ul class="travel-news">
						<?php
							$cf = 0;
							$powered = fetch_db('frtg_powered','ORDER BY name ASC');
							foreach($powered as $power){
								if($cf % 2 == 0 || $cf == 0)
									echo '<li>';
								
								echo '
									<div class="powered-by-thumb thumb">
										<img src="'.$power['image'].'" alt="" class="img-responsive" />
									</div>
								';
								
								if($cf % 2 != 0 || $cf == 1)
									echo '</li>';
								$cf++;
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom gray-area">
		<div class="container">
			<div class="logo pull-left">
				<a href="index.html" title="Travelo - home">
					<img src="images/logo.png" alt="Travelo HTML5 Template" />
				</a>
			</div>
			<div class="pull-right">
				<a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>
			</div>
			<div class="copyright pull-right">
				<p>&copy; 2015 Fritugo</p>
			</div>
		</div>
	</div>
</footer>