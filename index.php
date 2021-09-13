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
					<div class="text-left col-md-6">
					  <span class="count_comment"></span>
					</div>
					<div class="text-right col-md-6">
					  <span class="sort_title">Sort by</span>
					  <select class="sort_by">
						<option>Newest</option>
						<option id="oldlist">Oldest</option>
					  </select>
					  <div alignh="right" class="_3-8_ _6a _6b" valign="middle"><input type="hidden" autocomplete="off" value="time"><a class="_55pi _2agf _4o_4 _4jy0 _4jy3 _517h _51sy _42ft" aria-haspopup="true" role="button" href="#" style="max-width: 200px;" aria-controls="js_bu" tabindex="0"><span class="_55pe">Oldest</span><span alt="" class="_3-99 _4o_3"><i alt="" data-visualcompletion="css-img" class="img sp_kf5oT7e76uM sx_0dafd9"></i></span></a></div>
					</div>
				</div>
			</div>

			<div class="body_comment">
				<div class="comment-row">
					<div class="avatar_comment col-md-1">
					  <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
					</div>
					<div class="px-0 box_comment col-md-11">
					  <textarea class="commentar" placeholder="Add a comment..."></textarea>
					  <div class="box_post" style="display: none">
						<div class="pull-left">
							<table cols="1" class="uiGrid _51mz" cellspacing="0" cellpadding="0">
								<tbody>
									<tr>
										<td>
											<input type="checkbox" id="post_fb">
											<label for="post_fb">Also post on Facebook</label>
										</td>
									</tr>
									<tr class="tr-character">
										<td class="td-character">Write <span class="character-post">6</span> more characters to post to Facebook</td>
									</tr>	  
								</tbody>
							</table>
						</div>
						<div class="pull-right">
						  <span>
							<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar" />
							<i class="fa fa-caret-down"></i>
						  </span>
						  <button class="disabled-b" type="button" disabled value="1">Post</button>
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
								<div class="comment-body principal">
									<h4>Nath Ryuzaki</h4>
									<p class="comment-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
									<span class="collapse">This comment is collapsed. <a class="uncollapse" href="#">Undo</a></span>
									<div class="tools_comment">
										<a class="like" href="#">Like</a>
										<span aria-hidden="true"> · </span>
										<a class="first replay" href="#">Reply</a>
										<span aria-hidden="true"> · </span>
										<span><i class="_3-8_ _4iy4 img sp_kf5oT7e76uM sx_7e6187" alt="" data-visualcompletion="css-img"></i><span class="count">1</span></span>
										<span aria-hidden="true"> · </span>
										<span>26m</span>
									</div>
									<a href="#" class="actions comment_menu">
										<i data-tooltip-content="Menu" data-hover="tooltip" alt="" data-visualcompletion="css-img" class="img sp_kf5oT7e76uM sx_b0af5b" id="js_6sy"></i>
									</a>
									<div class="dropdown-status">
										<ul class="status">
											<li class="item-menu">
												<a class="to-collapse">
													<span>
														Collapse comment
													</span>
												</a>
											</li>
											<li class="item-menu">
												<a class="to-spam">
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
												<a class="to-embed">
													<span>
														Embed
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
                            
								<ul class="child_replay">
									<li class="box_reply row">
										<div class="avatar_comment col-md-1">
											<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
										</div>
										 <div class="result_comment col-md-11">
											<div class="comment-body">
												<h4>Sugito</h4>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
												<div class="tools_comment">
													<a class="like" href="#">Like</a>
													<span aria-hidden="true"> · </span>
													<a class="replay-r" href="#">Reply</a>
													<span aria-hidden="true"> · </span>
													<span><i class="_3-8_ _4iy4 img sp_kf5oT7e76uM sx_7e6187" alt="" data-visualcompletion="css-img"></i><span class="count">1</span></span>
													<span aria-hidden="true"> · </span>
													<span>26m</span>
												</div>
												<ul class="child_replay"></ul>
												<a href="#" class="actions comment_menu">
													<i data-tooltip-content="Menu" data-hover="tooltip" alt="" data-visualcompletion="css-img" class="img sp_kf5oT7e76uM sx_b0af5b" id="js_6sy"></i>
												</a>
												<div class="dropdown-status">
													<ul class="status">
														<li class="item-menu">
															<a class="to-collapse">
																<span>
																	Collapse comment
																</span>
															</a>
														</li>
														<li class="item-menu">
															<a class="to-spam">
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
															<a class="to-embed">
																<span>
																	Embed
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</li>
						
						<!-- Start List Comment 2 -->
						<li class="relative box_result row">
							<div class="avatar_comment col-md-1">
								<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
							</div>
							<div class="result_comment col-md-11">
							<div class="comment-body principal">
									<h4>Nath Ryuzaki</h4>
									<p class="comment-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
									<span class="collapse">This comment is collapsed. <a class="uncollapse" href="#">Undo</a></span>
									<div class="tools_comment">
										<a class="like" href="#">Like</a>
										<span aria-hidden="true"> · </span>
										<a class="first replay" href="#">Reply</a>
										<span aria-hidden="true"> · </span>
										<span><i class="_3-8_ _4iy4 img sp_kf5oT7e76uM sx_7e6187" alt="" data-visualcompletion="css-img"></i><span class="count">1</span></span>
										<span aria-hidden="true"> · </span>
										<span>26m</span>
									</div>
									<a href="#" class="actions comment_menu">
										<i data-tooltip-content="Menu" data-hover="tooltip" alt="" data-visualcompletion="css-img" class="img sp_kf5oT7e76uM sx_b0af5b" id="js_6sy"></i>
									</a>
									<div class="dropdown-status">
										<ul class="status">
											<li class="item-menu">
												<a class="to-collapse">
													<span>
														Collapse comment
													</span>
												</a>
											</li>
											<li class="item-menu">
												<a class="to-spam">
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
												<a class="to-embed">
													<span>
														Embed
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<ul class="child_replay"></ul>
							</div>
						</li>
					</ul>
				<div class="container-show">
					<button class="show_more" type="button">Load 10 more comments</button>
				</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
