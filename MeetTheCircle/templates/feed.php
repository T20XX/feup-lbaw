<div class="container">
    <div class="row">
        <div id="left_sidebar" class="col-xs-2 col-sm-2">
            <div class="row">
                <button onclick="open_left_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg" id="left_sidebar_btn" type="submit">
                    <span class="glyphicon glyphicon-envelope"></span>
                </button>


                <nav id="messages" class="panel-group left_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <a href="messages.php"><strong>Messages</strong></a>
                            <a href="javascript:void(0)" class="closebtn hidden-sm hidden-md hidden-lg" onclick="close_left_sidebar()"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <img src="../res/logo.png" class="img-responsive">
                                <a href="profile.php"> Member 1 </a>
                                <span class="badge">14</span>
                            </li>
                            <li class="list-group-item">
                                <a href="profile.php"> Member 2 </a>
                            </li>
                            <li class="list-group-item">
                                <a href="profile.php"> Member 3 </a>
                                <span class="badge">33</span>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="row hidden-xs">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="invites.php"><strong>Invites</strong></a></div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="circle.php"> Circle 1 </a>
                            <span class="badge"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                        </li>
                        <li class="list-group-item">
                            <a href="circle.php"> Circle 2 </a>
                            <span class="badge"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                        </li>
                        <li class="list-group-item">
                            <a href="circle.php"> Circle 3 </a>
                            <span class="badge"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="right_sidebar" class="col-xs-2 col-xs-offset-8 col-sm-2 col-sm-offset-0 col-sm-push-8">
            <div class="row">

                <button onclick="open_right_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg" id="left_sidebar_btn" type="submit">
                    <span class="glyphicon glyphicon-record"></span>
                </button>


                <nav id="circles" class="panel-group right_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <a href="circles.php"><strong>Your circles</strong></a>
                            <a href="javascript:void(0)" class="closebtn hidden-sm hidden-md hidden-lg" onclick="close_right_sidebar()"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="circle.php"> Circle 4 </a>
                                <span class="badge">3</span>
                            </li>
                            <li class="list-group-item">
                                <a href="circle.php"> Circle 5 </a>
                                <span class="badge">4</span>
                            </li>
                            <li class="list-group-item">
                                <a href="circle.php"> Circle 6 </a>
                                <span class="badge"></span>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="row hidden-xs">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Suggested</strong></div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="circle.php"> Circle 7 </a>
                            <span class="badge">Knock!</span>
                        </li>
                        <li class="list-group-item">
                            <a href="circle.php"> Circle 8 </a>
                            <span class="badge">Knock!</span>
                        </li>
                        <li class="list-group-item">
                            <a href="circle.php"> Circle 9 </a>
                            <span class="badge">Knock!</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div id="center" class="col-xs-12 col-sm-8 col-sm-pull-2">
			<div class="row well">
                <div class="col-xs-12">
                    <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="collapse" href="#collapse1">Create circle
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </div>
            </div>
            <div id="post1" class="row" style="padding:2%; background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
					<div id="circ	le_title" class="col-xs-12" style="text-align:center">
						<a href="circle.php"><h2>Circle Name</h2></a>
					</div>
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
				<div id="circle_title" class="col-xs-12" style="text-align:center">
					<a href="circle.php"><h2>Circle Name</h2></a>
				</div>
				</div>
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
											<button type="button" class="btn btn-default btn-block">Reply</button>
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
		</div>
	</div>
</div>