<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="syle.css">
    <link rel="stylesheet" href="grid.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="comments.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-md-12" id="fbcomment">
			<div class="header_comment">
				<div class="row">
					<div class="col-md-6 text-left">
					  <span class="count_comment"></span>
					</div>
					<div class="col-md-6 text-right">
					  <span class="sort_title">Sort by</span>
					  <select class="sort_by">
						<option>Top</option>
						<option>Newest</option>
						<option>Oldest</option>
					  </select>
					</div>
				</div>
			</div>

			<div class="body_comment">
				<div class="row">
					<div class="avatar_comment col-md-1">
					  <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
					</div>
					<div class="box_comment col-md-11 px-0">
					  <textarea class="commentar" placeholder="Add a comment..."></textarea>
					  <div class="box_post">
						<div class="pull-left">
						  <input type="checkbox" id="post_fb"/>
						  <label for="post_fb">Also post on Facebook</label>
						</div>
						<div class="pull-right">
						  <span>
							<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar" />
							<i class="fa fa-caret-down"></i>
						  </span>
						  <button class="post-comment" type="button" value="1">Post</button>
						</div>
					  </div>
					</div>
				</div>
				<div class="row">
					<ul id="list_comment" class="col-md-12">
						<!-- Start List Comment 1 -->
						<li class="box_result row">
							<div class="avatar_comment col-md-1">
								<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
							</div>
							<div class="result_comment col-md-11">
								<h4>Nath Ryuzaki</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
								<div class="tools_comment">
									<a class="like" href="#">Like</a>
									<span aria-hidden="true"> · </span>
									<a class="replay" href="#">Reply</a>
									<span aria-hidden="true"> · </span>
									<span><i class="_3-8_ _4iy4 img sp_kf5oT7e76uM sx_7e6187" alt="" data-visualcompletion="css-img"></i>8</span>
									<i class="fa fa-thumbs-o-up"></i> <span class="count">1</span> 
									<span aria-hidden="true"> · </span>
									<span>26m</span>
								</div>
                            
								<ul class="child_replay">
									<li class="box_reply row">
										<div class="avatar_comment col-md-1">
											<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
										</div>
										 <div class="result_comment col-md-11">
											<h4>Sugito</h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
											<div class="tools_comment">
												<a class="like" href="#">Like</a>
												<span aria-hidden="true"> · </span>
												<a class="replay" href="#">Reply</a>
												<span aria-hidden="true"> · </span>
												<i class="fa fa-thumbs-o-up"></i> <span class="count">1</span> 
												<span aria-hidden="true"> · </span>
												<span>26m</span>
											</div>
											<ul class="child_replay"></ul>
											<a href="#" class="actions comment_menu">
												<i class="fas fa-chevron-circle-down"></i>
											</a>
											<div class="dropdown-status">
												<ul class="status">
												<li class="item-menu">
													<a>
														<span>
															Collapse comment
														</span>
													</a>
												</li>
												<li class="item-menu">
													<a>
														<span>
															Mark as spam
														</span>
													</a>
												</li>
												<li class="item-menu">
													<a>
														<span>
															Report to Facebook
														</span>
													</a>
												</li>
												<li class="item-menu">
													<a>
														<span>
															Embed
														</span>
													</a>
												</li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
								<a href="#" class="actions comment_menu">
									<i class="fas fa-chevron-circle-down"></i>
								</a>
								<div class="dropdown-status">
									<ul class="status">
										<li class="item-menu">
											<a>
												<span>
													Collapse comment
												</span>
											</a>
										</li>
										<li class="item-menu">
											<a>
												<span>
													Mark as spam
												</span>
											</a>
										</li>
										<li class="item-menu">
											<a>
												<span>
													Report to Facebook
												</span>
											</a>
										</li>
										<li class="item-menu">
											<a>
												<span>
													Embed
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						
						<!-- Start List Comment 2 -->
						<li class="box_result row relative">
							<div class="avatar_comment col-md-1">
								<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
							</div>
							<div class="result_comment col-md-11">
								<h4>Gung Wah</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
								<div class="tools_comment">
									<a class="like" href="#">Like</a>
									<span aria-hidden="true"> · </span>
									<a class="replay" href="#">Reply</a>
									<span aria-hidden="true"> · </span>
									<i class="fa fa-thumbs-o-up"></i> <span class="count">1</span> 
									<span aria-hidden="true"> · </span>
									<span>26m</span>
								</div>
								<ul class="child_replay"></ul>
								<a href="#" class="actions comment_menu">
									<i class="fas fa-chevron-circle-down"></i>
								</a>
								<div class="dropdown-status">
									<ul class="status">
										<li class="item-menu">
											<a>
												<span>
													Collapse comment
												</span>
											</a>
										</li>
										<li class="item-menu">
											<a>
												<span>
													Mark as spam
												</span>
											</a>
										</li>
										<li class="item-menu">
											<a>
												<span>
													Report to Facebook
												</span>
											</a>
										</li>
										<li class="item-menu">
											<a>
												<span>
													Embed
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				<button class="show_more" type="button">Load 10 more comments</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
