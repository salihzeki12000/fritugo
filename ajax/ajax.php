<?php
	session_start();
	
	require "../library/connect.php";
	require "../library/function.lib.php";
	
	if(!isset($_POST['mod'])){
		$response['error'] = "Something went wrong. Please refresh the page and try again.";
	}
	else{
		$mod = trim($mysqli->real_escape_string($_POST['mod']));
		
		if($mod == "travel_tips"){
			$data = "";
			
			$tips = "SELECT t.id AS id,t.created AS created,t.tags AS tags,t.title AS title,t.content AS content,t.likes AS likes,t.views AS views,t.post_type AS post_type,tc.name AS category,u.username AS author,up.picture AS picture FROM frtg_tips t LEFT JOIN frtg_tips_category tc ON tc.id = t.category_id LEFT JOIN frtg_user u ON u.id = t.user_id LEFT JOIN frtg_user_profile up ON up.user_id = u.id WHERE t.id < ".$_POST['last_id']." AND t.flag = 2 ORDER BY t.created DESC LIMIT 5";
			$result = $mysqli->query($tips);
			if($result->num_rows > 0){
				while($tip = $result->fetch_array(MYSQLI_ASSOC)){
					if($tip['post_type'] == 1){
						$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
						foreach($timages as $timage){
							$post_image = $timage['images'];
							$alt = $timage['alt'];
							$title = $timage['title'];
						}
						$short_description = explode('</p>',$tip['content']);
						$data .= '
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
						$data .= '
							<div class="post">
								<div class="post-content-wrapper">
									<div class="flexslider photo-gallery style3">
										<ul class="slides">
						';
						$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
						foreach($timages as $timage){
							$data .= '
								<li><a href="travel_tips_read.php"><img src="'.$timage['images'].'" alt="'.$timage['alt'].'" title="'.$timage['title'].'"></a></li>
							';
						}
						$data .= '
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
						$data .= '
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
						$data .= '
							<div class="post">
								<div class="post-content-wrapper">
									<div class="flexslider photo-gallery style1" id="post-slideshow1" data-sync="#post-carousel1">
										<ul class="slides">
						';
						$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
						foreach($timages as $timage){
							$data .= '
								<li><a href="travel_tips_read.php"><img src="'.$timage['images'].'" alt="'.$timage['alt'].'" title="'.$timage['title'].'"></a></li>
							';
						}
						$data .= '
										</ul>
									</div>
									<div class="flexslider image-carousel style1" id="post-carousel1"  data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#post-slideshow1">
										<ul class="slides">
						';
						$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
						foreach($timages as $timage){
							$data .= '
								<li><img src="'.autoThumb($timage['images'],'_70x70').'" alt="'.$timage['alt'].'" title="'.$timage['title'].'"/></li>
							';
						}
						$data .= '
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
						$data .= '
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
						$data .= '
							<div class="post">
								<div class="post-content-wrapper">
									<div class="flexslider photo-gallery style4">
										<ul class="slides">
						';
						$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
						foreach($timages as $timage){
							$data .= '
								<li><a href="travel_tips_read.php"><img src="'.$timage['images'].'" alt="'.$timage['alt'].'" title="'.$timage['title'].'"></a></li>
							';
						}
						$data .= '
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
				}
				$tips_id = $tip['id'];
				$response['data'] = $data;
				$response['button'] = '<a href="#" class="button btn-large full-width uppercase more_tips" id="'.$tips_id.'">More Tips</a>';
				$response['status'] = "success";
			}
			else{
				$response['data'] = "";
				$response['button'] = '<a class="button btn-large silver full-width uppercase no_more_tips" id="no_more_tips">No More Tips</a>';
				$response['status'] = "empty";
			}
		}
		else if($mod == "multiple_category_selection"){
			$data = "";
			
			$category = trim(substr($mysqli->real_escape_string($_POST['category']),0,-1));
			if(!empty($category)){
				$addQuery = "t.category_id IN (".$category.") AND";
			}
			else{
				$addQuery = "";
			}

			$tips = "SELECT t.id AS id,t.created AS created,t.tags AS tags,t.title AS title,t.content AS content,t.likes AS likes,t.views AS views,t.post_type AS post_type,tc.name AS category,u.username AS author,up.picture AS picture FROM frtg_tips t LEFT JOIN frtg_tips_category tc ON tc.id = t.category_id LEFT JOIN frtg_user u ON u.id = t.user_id LEFT JOIN frtg_user_profile up ON up.user_id = u.id WHERE ".$addQuery." t.flag = 2 ORDER BY t.created DESC";
			$result = $mysqli->query($tips);
			if($result->num_rows > 0){
				while($tip = $result->fetch_array(MYSQLI_ASSOC)){
					if($tip['post_type'] == 1){
						$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
						foreach($timages as $timage){
							$post_image = $timage['images'];
							$alt = $timage['alt'];
							$title = $timage['title'];
						}
						$short_description = explode('</p>',$tip['content']);
						$data .= '
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
						$data .= '
							<div class="post">
								<div class="post-content-wrapper">
									<div class="flexslider photo-gallery style3">
										<ul class="slides">
						';
						$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
						foreach($timages as $timage){
							$data .= '
								<li><a href="travel_tips_read.php"><img src="'.$timage['images'].'" alt="'.$timage['alt'].'" title="'.$timage['title'].'"></a></li>
							';
						}
						$data .= '
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
						$data .= '
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
						$data .= '
							<div class="post">
								<div class="post-content-wrapper">
									<div class="flexslider photo-gallery style1" id="post-slideshow1" data-sync="#post-carousel1">
										<ul class="slides">
						';
						$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
						foreach($timages as $timage){
							$data .= '
								<li><a href="travel_tips_read.php"><img src="'.$timage['images'].'" alt="'.$timage['alt'].'" title="'.$timage['title'].'"></a></li>
							';
						}
						$data .= '
										</ul>
									</div>
									<div class="flexslider image-carousel style1" id="post-carousel1"  data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#post-slideshow1">
										<ul class="slides">
						';
						$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
						foreach($timages as $timage){
							$data .= '
								<li><img src="'.autoThumb($timage['images'],'_70x70').'" alt="'.$timage['alt'].'" title="'.$timage['title'].'"/></li>
							';
						}
						$data .= '
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
						$data .= '
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
						$data .= '
							<div class="post">
								<div class="post-content-wrapper">
									<div class="flexslider photo-gallery style4">
										<ul class="slides">
						';
						$timages = fetch_db('frtg_tips_image','WHERE tips_id = '.$tip['id']);
						foreach($timages as $timage){
							$data .= '
								<li><a href="travel_tips_read.php"><img src="'.$timage['images'].'" alt="'.$timage['alt'].'" title="'.$timage['title'].'"></a></li>
							';
						}
						$data .= '
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
				}
				$tips_id = $tip['id'];
				$response['data'] = $data;
				$response['button'] = '';
				$response['status'] = "success";
			}
			else{
				$response['data'] = '<a class="button btn-large silver full-width uppercase no_more_tips" id="no_more_tips">No Data</a>';
				$response['button'] = '';
				$response['status'] = "empty";
			}
		}
		
		else if($mod == "position"){
			$position_name = trim($mysqli->real_escape_string($_POST['value']));
			$company_id = trim($mysqli->real_escape_string($_POST['company_id']));
			
			$option = "";
			$positions = fetch_db('company_open_position','WHERE company_id = '.$company_id.' AND position_name = "'.$position_name.'"');
			if(!empty($positions)){
				foreach($positions as $position){
					$option .= '<option value="'.$position['id'].'">'.$position['placement'].'</option>';
				}
				$response['data'] = $option;
				$response['status'] = "success";
			}
			else{
				$response['data'] = '<option value="error">Loading...</option>';
				$response['status'] = "empty";
			}
		}
		else if($mod == "position_applied"){
			$position_name = trim($mysqli->real_escape_string($_POST['value']));
			$company_id = trim($mysqli->real_escape_string($_POST['company_id']));
			
			$option = '<option value="">Any Placement</option>';
			$positions = fetch_db('company_open_position','WHERE company_id = '.$company_id.' AND position_name = "'.$position_name.'"');
			if(!empty($positions)){
				foreach($positions as $position){
					$option .= '<option value="'.$position['placement'].'">'.$position['placement'].'</option>';
				}
				$response['data'] = $option;
				$response['status'] = "success";
			}
			else{
				$response['data'] = '<option value="error">Loading...</option>';
				$response['status'] = "empty";
			}
		}
	}

	header('Content-type: application/json');
	echo json_encode($response);
?>