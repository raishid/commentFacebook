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
				<div class="row flex row-sm">
					<div class="text-left col-md-6 flex-start pl-0">
						<span class="count_comment"></span>
					</div>
					<div class="text-right col-md-6 flex-start pl-0 ml-auto pr-0 ">
						<span class="sort_title">Sort by</span>
						
						<div class="dropdown" id="dropdown">
							<label for="drop1" class="dropdown_button">Oldest<span alt="" class="_3-99 _4o_3"><i alt="" data-visualcompletion="css-img" class="img sp_kf5oT7e76uM sx_0dafd9"></i></span></label>
							<ul class="dropdown_content">
								<li><a class="select-item" href="#" id="newlest"><span>Newest</span></a></li>
								<li><a class="select-item order-item-active" href="#" id="ordest"><span>Oldest</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="body_comment">
				<div class="comment-row">
					<div class="avatar_comment col-md-1 avatar-post">
						<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar" />
					</div>
					<div class="px-0 box_comment col-md-11">
						<textarea class="commentar" placeholder="Add a comment..."></textarea>
						<div class="box_post flex items-center justify-between" style="display: none">
							<div class="">
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
										<tr class="lh-32">
											<td>
												<div class="_3-95 user-mobile">
													<span class="_1y5f _2pih  _2ieq">
														Commenting as
													</span>
													<select class="_1y5g">
														<option class="user-option" value="">Anonymous</option>
													</select>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="flex relative">
								<div class="user tooltip user-desktop">
									<a href="#" class="profile">
										<span class="tooltip-you">Commenting as Anonymous</span>
										<span alt="" class="_-xe _3-8_">
											<span>
												<img class="_6vg img" height="16" src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" width="16" alt="">
											</span>
										</span>
										<span alt="" class="_4o_3">
											<i class="fa fa-caret-down"></i>
										</span>
									</a>
								</div>
								<div class="isYou">
									<div class="flex items-center">
										<div class="avatar">
											<img class="_4-rj img" height="30" src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" width="30" alt="">
										</div>
										<div class="name">
											Eres tu 
											<span class="_uyb">(You)</span>
											<div class="_55fc"></div>
										</div>
									</div>
								</div>
								<button class="disabled-b" type="button" disabled value="1">Post</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<ul id="list_comment" class="col-md-12 sm-lh">
						<!-- Start List Comment 1 -->
						<li class="box_result row sm-flex">
							<div class="avatar_comment col-md-1">
								<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar" />
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
									<a href="#" class="actions comment_menu tooltip">
										<span class="tooltip-box">Menu</span>
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
									<li class="box_reply row sm-flex mr-0">
										<div class="avatar_comment col-md-1">
											<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar" />
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
												<a href="#" class="actions comment_menu tooltip">
													<span class="tooltip-box">Menu</span>
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
						<li class="relative box_result row sm-flex">
							<div class="avatar_comment col-md-1">
								<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar">
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
									<a href="#" class="actions comment_menu tooltip">
										<span class="tooltip-box">Menu</span>
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
									<li class="box_reply row sm-flex mr-0">
										<div class="avatar_comment col-md-1">
											<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar">
										</div>
										<div class="result_comment col-md-11">
											<div class="comment-body">
												<h4>Anonimous</h4>
												<p class="comment-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p><span class="collapse">This comment is collapsed. <a class="uncollapse" href="#">Undo</a></span>
												<div class="tools_comment"><a class="like" href="#">Like</a><span aria-hidden="true"> · </span><a class="replay-r" href="#">Reply</a><span aria-hidden="true"> · </span><span><i class="_3-8_ _4iy4 img sp_kf5oT7e76uM sx_7e6187" alt="" data-visualcompletion="css-img"></i><span class="count">0</span></span>s</div>
												<ul class="child_replay"></ul>
												<a href="#" class="actions comment_menu tooltip">
													<span class="tooltip-box">Menu</span>
													<i data-tooltip-content="Menu" data-hover="tooltip" alt="" data-visualcompletion="css-img" class="img sp_kf5oT7e76uM sx_b0af5b" id="js_6sy"></i>
												</a>												<div class="dropdown-status">
													<ul class="status">
														<li class="item-menu"><a class="to-collapse"><span>Collapse comment</span></a></li>
														<li class="item-menu"><a class="to-edit"><span>Edit comment</span></a></li>
														<li class="item-menu"><a class="to-delete"><span>Delete comment</span></a></li>
														<li class="item-menu"><a class="to-embed"><span>Embed</span></a></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
									<li class="box_reply row sm-flex mr-0">
										<div class="avatar_comment col-md-1"><img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"></div>
										<div class="result_comment col-md-11">
											<div class="comment-body">
												<h4>Anonimous</h4>
												<p class="comment-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p><span class="collapse">This comment is collapsed. <a class="uncollapse" href="#">Undo</a></span>
												<div class="tools_comment"><a class="like" href="#">Like</a><span aria-hidden="true"> · </span><a class="replay-r" href="#">Reply</a><span aria-hidden="true"> · </span><span><i class="_3-8_ _4iy4 img sp_kf5oT7e76uM sx_7e6187" alt="" data-visualcompletion="css-img"></i><span class="count">0</span></span>s</div>
												<ul class="child_replay"></ul>
												<a href="#" class="actions comment_menu tooltip">
													<span class="tooltip-box">Menu</span>
													<i data-tooltip-content="Menu" data-hover="tooltip" alt="" data-visualcompletion="css-img" class="img sp_kf5oT7e76uM sx_b0af5b" id="js_6sy"></i>
												</a>												
												<div class="dropdown-status">
													<ul class="status">
														<li class="item-menu"><a class="to-collapse"><span>Collapse comment</span></a></li>
														<li class="item-menu"><a class="to-edit"><span>Edit comment</span></a></li>
														<li class="item-menu"><a class="to-delete"><span>Delete comment</span></a></li>
														<li class="item-menu"><a class="to-embed"><span>Embed</span></a></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
									<li class="box_reply row sm-flex mr-0">
										<div class="avatar_comment col-md-1"><img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"></div>
										<div class="result_comment col-md-11">
											<div class="comment-body">
												<h4>Anonimous</h4>
												<p class="comment-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p><span class="collapse">This comment is collapsed. <a class="uncollapse" href="#">Undo</a></span>
												<div class="tools_comment"><a class="like" href="#">Like</a><span aria-hidden="true"> · </span><a class="replay-r" href="#">Reply</a><span aria-hidden="true"> · </span><span><i class="_3-8_ _4iy4 img sp_kf5oT7e76uM sx_7e6187" alt="" data-visualcompletion="css-img"></i><span class="count">0</span></span>s</div>
												<ul class="child_replay"></ul>
												<a href="#" class="actions comment_menu tooltip">
													<span class="tooltip-box">Menu</span>
													<i data-tooltip-content="Menu" data-hover="tooltip" alt="" data-visualcompletion="css-img" class="img sp_kf5oT7e76uM sx_b0af5b" id="js_6sy"></i>
												</a>												
												<div class="dropdown-status">
													<ul class="status">
														<li class="item-menu"><a class="to-collapse"><span>Collapse comment</span></a></li>
														<li class="item-menu"><a class="to-edit"><span>Edit comment</span></a></li>
														<li class="item-menu"><a class="to-delete"><span>Delete comment</span></a></li>
														<li class="item-menu"><a class="to-embed"><span>Embed</span></a></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
									<li class="box_reply row sm-flex mr-0">
										<div class="avatar_comment col-md-1"><img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"></div>
										<div class="result_comment col-md-11">
											<div class="comment-body">
												<h4>Anonimous</h4>
												<p class="comment-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p><span class="collapse">This comment is collapsed. <a class="uncollapse" href="#">Undo</a></span>
												<div class="tools_comment"><a class="like" href="#">Like</a><span aria-hidden="true"> · </span><a class="replay-r" href="#">Reply</a><span aria-hidden="true"> · </span><span><i class="_3-8_ _4iy4 img sp_kf5oT7e76uM sx_7e6187" alt="" data-visualcompletion="css-img"></i><span class="count">0</span></span>s</div>
												<ul class="child_replay"></ul>
												<a href="#" class="actions comment_menu tooltip">
													<span class="tooltip-box">Menu</span>
													<i data-tooltip-content="Menu" data-hover="tooltip" alt="" data-visualcompletion="css-img" class="img sp_kf5oT7e76uM sx_b0af5b" id="js_6sy"></i>
												</a>												
												<div class="dropdown-status">
													<ul class="status">
														<li class="item-menu"><a class="to-collapse"><span>Collapse comment</span></a></li>
														<li class="item-menu"><a class="to-edit"><span>Edit comment</span></a></li>
														<li class="item-menu"><a class="to-delete"><span>Delete comment</span></a></li>
														<li class="item-menu"><a class="to-embed"><span>Embed</span></a></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
									<li class="box-reply row">
										<div class="show-more box">
											<a href="#" class="more-link">
												Show 2 more replies in this thread
												<i class="_2pir img sp_kf5oT7e76uM sx_2f3bff" align="top" alt="" data-visualcompletion="css-img"></i>
											</a>
										</div>
										<div class="progress-bar">
											<span class="img _55ym _55yn _55yo" role="progressbar" aria-valuetext="Loading..." aria-busy="true" aria-valuemin="0" aria-valuemax="100"></span>
										</div>
									</li>
								</ul>
							</div>
						</li>
						
					</ul>
					<div class="container-show mt-15">
						<button class="show_more" type="button">Load 10 more comments</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>var order = 'ordest';</script>
</body>

</html>