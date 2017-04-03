<div class="container">
    <div class="row">
        <div id="left_sidebar" class="col-xs-2 col-sm-2">
            <div class="row">
                <button onclick="open_left_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg" id="left_sidebar_btn"
                        type="submit">
                    <span class="glyphicon glyphicon-user"></span>
                </button>


                <nav id="members" class="panel-group left_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <strong>Members</strong>
                            <a href="javascript:void(0)" class="closebtn hidden-sm hidden-md hidden-lg" onclick="close_left_sidebar()"><span
                                        class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success">
								<div class="row">
									<div class="col-xs-5">
										<img src="../res/logo.png" class="img-responsive" style="width:60px">
									</div>
									<div class="col-xs-7">
										<a href="profile.php">Member 1</a>
										<button type="btn" class="btn-danger">Vote Kick</button>
									</div>
								</div>
                            </li>
                            <li class="list-group-item list-group-item-success">
								<div class="row">
									<div class="col-xs-5">
										<img src="../res/logo.png" class="img-responsive" style="width:60px">
									</div>
									<div class="col-xs-7">
										<a href="profile.php">Member 2</a>
										<button type="btn" class="btn-danger">Vote Kick</button>
									</div>
								</div>
                            </li>
                            <li class="list-group-item list-group-item-success">
								<div class="row">
									<div class="col-xs-5">
										<img src="../res/logo.png" class="img-responsive" style="width:60px">
									</div>
									<div class="col-xs-7">
										<a href="profile.php">Member 3</a>
										<button type="btn" class="btn-danger">Vote Kick</button>
									</div>
								</div>
                            </li>
                            <li class="list-group-item list-group-item-success">
								<div class="row">
									<div class="col-xs-5">
										<img src="../res/logo.png" class="img-responsive" style="width:60px">
									</div>
									<div class="col-xs-7">
										<a href="profile.php">Member 4</a>
										<button type="btn" class="btn-danger">Vote Kick</button>
									</div>
								</div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div id="right_sidebar" class="col-xs-2 col-xs-offset-8 col-sm-2 col-sm-offset-0 col-sm-push-8">
            <div class="row">

                <button onclick="open_right_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg" id="left_sidebar_btn"
                        type="submit">
                    <span class="glyphicon glyphicon-bell"></span>
                </button>


                <nav id="notifications" class="panel-group right_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <strong>Notifications</strong>
                            <a href="javascript:void(0)" class="closebtn hidden-sm hidden-md hidden-lg" onclick="close_right_sidebar()"><span
                                        class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="profile.php">Member 7</a>
                                <p>Wants to join your Circle</p>
                                <p><span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                                    <span class="badge"><span class="glyphicon glyphicon-remove"></span></span></p>
                            </li>
                            <li class="list-group-item">
                                <a href="profile.php">Member 8</a>
                                <p>Wants to join your Circle</p>
                                <p><span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                                    <span class="badge"><span class="glyphicon glyphicon-remove"></span></span></p>
                            </li>
                            <li class="list-group-item">
                                <a href="profile.php">Member 9</a>
                                <p>Vote to kick this member from the circle</p>
                                <p><span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                                    <span class="badge"><span class="glyphicon glyphicon-remove"></span></span></p>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                <a href="profile.php">Member 10</a>
                                <p>You already approved this member</p>
                            </li>
                            <li class="list-group-item list-group-item-danger">
                                <a href="profile.php">Member 11</a>
                                <p>You already disapproved this member</p>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div id="center" class="col-xs-12 col-sm-8 col-sm-pull-2">
            <div class="row well">
				<div class="col-xs-12">
					<h2 style="text-align:center; margin-top:0%"><a href="circle.php">Circle Name</a></h2>
				</div>
                <div class="col-xs-12 col-sm-5 ">
                    <input type="text" class="form-control" placeholder="Search inside this circle...">
                </div>
                <div class="col-xs-6 col-sm-3">
                    <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="collapse" href="#collapse1">Post</button>
                </div>
                <div class="col-xs-6 col-sm-3 col-sm-offset-1">
                    <div class="dropdown">
                        <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">More
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">
                                    <div class="input-group">
										<span class="input-group-btn">
											<button class="btn btn-secondary btn-block" type="button"><a>Add to Circle</a></button>
										</span>
                                        <input type="text" class="form-control" placeholder="Search for...">
                                    </div>
                                </a></li>
                            <li><button class="btn btn-secondary btn-block" type="button"><a>Report Circle</a></button></li>
                            <li><button class="btn btn-secondarY  btn-block" type="button"><a>Leave Circle</a></button></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel panel-default">
                        <div class="panel-body">
									<textarea placeholder="Post here..." class="form-control" rows="3" id="comment"></textarea>
                            <button type="button" class="btn btn-default btn-block">Upload new photo</button>
                            <button type="button" class="btn btn-default btn-block">Post</button>
                        </div>
                    </div>
                </div>
            </div>
	<!--border-style:solid; border-width:medium;border-radius:5px; border-color:green;-->
            <div id="post1" class="row" style="padding:2%; background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
				<div class="row">
					<div class="col-xs-2"><img src="../res/user.png" class="img-responsive"style="width:60px"></div>
					<div class="col-xs-8">
						<a href="profile.php"><h4>User1 </a><small><i>Posted on February 19, 2016</i></small></h4>
					</div>
					<div class="col-xs-2">
						<button type="btn" class="btn-danger glyphicon glyphicon-warning-sign" data-toggle="tooltip" title="Report this post"></span>
					</div>
				</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6" style="max-height:200px; overflow-y:scroll; margin-bottom:2%">
                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                        <p>Nulla vel metus scelerisque ante sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec lacinia congue felis in faucibus.</p>
                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                        <p>Nulla vel metus scelerisque ante sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec lacinia congue felis in faucibus.</p>
                    </div>
                    <div class="col-xs-12 col-sm-6" ><img src="../res/book.png" class="img-responsive" style="max-height:200px; margin-bottom:2%"></div>
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-up"></span></button>
                    </div>
                    <div class="col-xs-8">
                        <h3 class="text-center">Comments</h3>
                    </div>
                    <div class="col-xs-2">
                        <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-down"></span></button>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <textarea  placeholder="Comment here..." class="form-control" rows="1" id="comment"></textarea>
                            <button type="button" class="btn btn-default btn-block">Post your comment</button>
                        </div>
                        <div class="col-xs-10">
                            <div class="media">
                                <div class="media-left">
                                    <img src="../res/user.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <a href="profile.php"><h4>User2 </a><small><i>19/02/2016 22:30</i></small></h4>
                                    <p>Bom post</p>
							<div class="media">
                                <div class="media-left">
                                    <img src="../res/user.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <a href="profile.php"><h4>User2 </a><small><i>19/02/2016 22:30</i></small></h4>
                                    <p>Mesmo</p>
                                </div>
                            </div>
							<div class="media">
                                <div class="media-left">
                                    <img src="../res/user.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <a href="profile.php"><h4>User2 </a><small><i>19/02/2016 22:30</i></small></h4>
                                    <p>Yep</p>
                                </div>
                            </div>
                                </div>
                            </div>
							<div class="row">
								<div id="collapse_reply1" class="panel-collapse collapse">
									<div class="panel panel-default">
										<div class="panel-body">
											<textarea placeholder="Reply here..." class="form-control" rows="3" id="comment"></textarea>
											<button type="button" class="btn btn-default btn-block">Reply</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-2">
							<button class="btn btn-info btn-block dropdown-toggle" type="button" data-toggle="collapse" href="#collapse_reply1" style="display: block; margin: 0 auto;">Reply</button>
						</div>
						<div class="col-xs-10">
                            <div class="media">
                                <div class="media-left">
                                    <img src="../res/user.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <a href="profile.php"><h4>User3 </a><small><i>19/02/2016 22:46</i></small></h4>
                                    <p>Top</p>
                                </div>
                            </div>
							<div class="row">
								<div id="collapse_reply2" class="panel-collapse collapse">
									<div class="panel panel-default">
										<div class="panel-body">
											<textarea placeholder="Reply here..." class="form-control" rows="3" id="comment"></textarea>
											<button type="button" class="btn btn-default btn-block">Reply</button>
										</div>
									</div>
								</div>
							</div>
                        </div>
						<div class="col-xs-2">
							<button class="btn btn-info btn-block dropdown-toggle" type="button" data-toggle="collapse" href="#collapse_reply2" style="display: block; margin: 0 auto;">Reply</button>
						</div>
                    </div>
                </div>
            </div>
            <div id="post2" class="row" style="padding:2%; background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
                <div class="row">
					<div class="col-xs-2"><img src="../res/user.png" class="img-responsive"style="width:60px"></div>
					<div class="col-xs-8">
						<a href="profile.php"><h4>User1 </a><small><i>Posted on February 19, 2016</i></small></h4>
					</div>
					<div class="col-xs-2">
						<button type="btn" class="btn-danger glyphicon glyphicon-warning-sign" data-toggle="tooltip" title="Report this post"></span>
					</div>
				</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-7" style="max-height:200px; overflow-y:scroll; margin-bottom:2%">
                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                        <p>Nulla vel metus scelerisque ante sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec lacinia congue felis in faucibus.</p>
                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                        <p>Nulla vel metus scelerisque ante sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec lacinia congue felis in faucibus.</p>
                    </div>
                    <div class="col-xs-12 col-sm-5" ><img src="../res/book.png" class="img-responsive" style="max-height:200px; margin-bottom:2%"></div>
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-up"></span></button>
                    </div>
                    <div class="col-xs-8">
                        <h3 class="text-center">Comments</h3>
                    </div>
                    <div class="col-xs-2">
                        <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-down"></span></button>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <textarea  placeholder="Comment here..." class="form-control" rows="1" id="comment"></textarea>
                            <button type="button" class="btn btn-default btn-block">Post your comment</button>
                        </div>
                        <div class="col-xs-10">
                            <div class="media">
                                <div class="media-left">
                                    <img src="../res/user.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <a href="profile.php"><h4>User2 </a><small><i>19/02/2016 22:30</i></small></h4>
                                    <p>Bom post</p>
									<div class="media">
                                <div class="media-left">
                                    <img src="../res/user.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <a href="profile.php"><h4>User2 </a><small><i>19/02/2016 22:30</i></small></h4>
                                    <p>Mesmo</p>
                                </div>
                            </div>
                                </div>
                            </div>
							<div class="row">
								<div id="collapse_reply3" class="panel-collapse collapse">
									<div class="panel panel-default">
										<div class="panel-body">
											<textarea placeholder="Reply here..." class="form-control" rows="3" id="comment"></textarea>
											<button type="button" class="btn btn-default btn-block">Reply</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-2">
							<button class="btn btn-info btn-block dropdown-toggle" type="button" data-toggle="collapse" href="#collapse_reply3" style="display: block; margin: 0 auto;">Reply</button>
						</div>
						<div class="col-xs-10">
                            <div class="media">
                                <div class="media-left">
                                    <img src="../res/user.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <a href="profile.php"><h4>User3 </a><small><i>19/02/2016 22:46</i></small></h4>
                                    <p>Top</p>
                                </div>
                            </div>
							<div class="row">
								<div id="collapse_reply4" class="panel-collapse collapse">
									<div class="panel panel-default">
										<div class="panel-body">
											<textarea placeholder="Reply here..." class="form-control" rows="3" id="comment"></textarea>
										</div>
									</div>
								</div>
							</div>
                        </div>
						<div class="col-xs-2">
							<button class="btn btn-info btn-block dropdown-toggle" type="button" data-toggle="collapse" href="#collapse_reply4" style="display: block; margin: 0 auto;">Reply</button>
						</div>
                    </div>
                </div>
            </div>

            <div id="post3" class="row" style="padding:2%; background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
                <div class="row">
					<div class="col-xs-2"><img src="../res/user.png" class="img-responsive"style="width:60px"></div>
					<div class="col-xs-8">
						<a href="profile.php"><h4>User1 </a><small><i>Posted on February 19, 2016</i></small></h4>
					</div>
					<div class="col-xs-2">
						<button type="btn" class="btn-danger glyphicon glyphicon-warning-sign" data-toggle="tooltip" title="Report this post"></span>
					</div>
				</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-7" style="max-height:200px; overflow-y:scroll; margin-bottom:2%">
                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                        <p>Nulla vel metus scelerisque ante sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec lacinia congue felis in faucibus.</p>
                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                        <p>Nulla vel metus scelerisque ante sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec lacinia congue felis in faucibus.</p>
                    </div>
                    <div class="col-xs-12 col-sm-5" ><img src="../res/book.png" class="img-responsive" style="max-height:200px; margin-bottom:2%"></div>
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-up"></span></button>
                    </div>
                    <div class="col-xs-8">
                        <h3 class="text-center">Comments</h3>
                    </div>
                    <div class="col-xs-2">
                        <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-down"></span></button>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <textarea  placeholder="Comment here..." class="form-control" rows="1" id="comment"></textarea>
                            <button type="button" class="btn btn-default btn-block">Post your comment</button>
                        </div>
                        <div class="col-xs-10">
                            <div class="media">
                                <div class="media-left">
                                    <img src="../res/user.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <a href="profile.php"><h4>User2 </a><small><i>19/02/2016 22:30</i></small></h4>
                                    <p>Bom post</p>
									<div class="media">
                                <div class="media-left">
                                    <img src="../res/user.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <a href="profile.php"><h4>User2 </a><small><i>19/02/2016 22:30</i></small></h4>
                                    <p>Mesmo</p>
                                </div>
                            </div>
                                </div>
                            </div>
							<div class="row">
								<div id="collapse_reply5" class="panel-collapse collapse">
									<div class="panel panel-default">
										<div class="panel-body">
											<textarea placeholder="Reply here..." class="form-control" rows="3" id="comment"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-2">
							<button class="btn btn-info btn-block dropdown-toggle" type="button" data-toggle="collapse" href="#collapse_reply5" style="display: block; margin: 0 auto;">Reply</button>
						</div>
						<div class="col-xs-10">
                            <div class="media">
                                <div class="media-left">
                                    <img src="../res/user.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <a href="profile.php"><h4>User3 </a><small><i>19/02/2016 22:46</i></small></h4>
                                    <p>Top</p>
                                </div>
                            </div>
							<div class="row">
								<div id="collapse_reply6" class="panel-collapse collapse">
									<div class="panel panel-default">
										<div class="panel-body">
											<textarea placeholder="Reply here..." class="form-control" rows="3" id="comment"></textarea>
										</div>
									</div>
								</div>
							</div>
                        </div>
						<div class="col-xs-2">
							<button class="btn btn-info btn-block dropdown-toggle" type="button" data-toggle="collapse" href="#collapse_reply6" style="display: block; margin: 0 auto;">Reply</button>
						</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>