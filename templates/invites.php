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
			<div class = "row">
			<div id="invite1">
				<div class="col-xs-12 col-sm-6">
					<div class="panel panel-default" style="background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
						<div class="panel-heading">
							<p><a href="profile.php">User2</a> invited you to: </p>
						</div>
						<div class="panel-body">
							<div class="row">
							<div class="col-xs-6">
								<h3><a href="circle.php">Circle2</a></h3>
							</div>
							<div class="col-xs-6">
								<img src="../res/user.png" class="img-responsive" style="height:60px">
							</div>
							</div>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-xs-6">
									<button type="button" class="btn btn-success btn-block">Accept <span class="glyphicon glyphicon-ok"></span></button>		
								</div>
								<div class="col-xs-6">
									<button type="button" class="btn btn-danger btn-block">Remove <span class="glyphicon glyphicon-remove"></span></button>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="invite2">
				<div class="col-xs-12 col-sm-6">
					<div class="panel panel-default"style="background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
						<div class="panel-heading">
							<p><a href="profile.php">User2</a> invited you to: </p>
						</div>
						<div class="panel-body">
							<div class="row">
							<div class="col-xs-6">
								<h3><a href="circle.php">Circle2</a></h3>
							</div>
							<div class="col-xs-6">
								<img src="../res/user.png" class="img-responsive" style="height:60px">
							</div>
							</div>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-xs-6">
									<button type="button" class="btn btn-success btn-block">Accept <span class="glyphicon glyphicon-ok"></span></button>		
								</div>
								<div class="col-xs-6">
									<button type="button" class="btn btn-danger btn-block">Remove <span class="glyphicon glyphicon-remove"></span></button>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="invite3">
				<div class="col-xs-12 col-sm-6">
					<div class="panel panel-default"style="background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
						<div class="panel-heading">
							<p><a href="profile.php">User2</a> invited you to: </p>
						</div>
						<div class="panel-body">
							<div class="row">
							<div class="col-xs-6">
								<h3><a href="circle.php">Circle2</a></h3>
							</div>
							<div class="col-xs-6">
								<img src="../res/user.png" class="img-responsive" style="height:60px">
							</div>
							</div>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-xs-6">
									<button type="button" class="btn btn-success btn-block">Accept <span class="glyphicon glyphicon-ok"></span></button>		
								</div>
								<div class="col-xs-6">
									<button type="button" class="btn btn-danger btn-block">Remove <span class="glyphicon glyphicon-remove"></span></button>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="invite4">
				<div class="col-xs-12 col-sm-6">
					<div class="panel panel-default" style="background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
						<div class="panel-heading">
							<p><a href="profile.php">User2</a> invited you to: </p>
						</div>
						<div class="panel-body">
							<div class="row">
							<div class="col-xs-6">
								<h3><a href="circle.php">Circle2</a></h3>
							</div>
							<div class="col-xs-6">
								<img src="../res/user.png" class="img-responsive" style="height:60px">
							</div>
							</div>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-xs-6">
									<button type="button" class="btn btn-success btn-block">Accept <span class="glyphicon glyphicon-ok"></span></button>		
								</div>
								<div class="col-xs-6">
									<button type="button" class="btn btn-danger btn-block">Remove <span class="glyphicon glyphicon-remove"></span></button>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
</div>
</div>