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
                                <img src="../res/logo.png" class="img-responsive">
                                Member 1
                            </li>
                            <li class="list-group-item list-group-item-success">
                                Member 2
                            </li>
                            <li class="list-group-item list-group-item-success">
                                Member 3
                            </li>
                            <li class="list-group-item list-group-item-danger">
                                Member 4
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
                                Member 7
                                <p>Wants to join your Circle</p>
                                <p><span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                                    <span class="badge"><span class="glyphicon glyphicon-remove"></span></span></p>
                            </li>
                            <li class="list-group-item">
                                Member 8
                                <p>Wants to join your Circle</p>
                                <p><span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                                    <span class="badge"><span class="glyphicon glyphicon-remove"></span></span></p>
                            </li>
                            <li class="list-group-item">
                                Member 9
                                <p>Vote to kick this member from the circle</p>
                                <p><span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                                    <span class="badge"><span class="glyphicon glyphicon-remove"></span></span></p>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                Member 5
                                <p>You already approved this member</p>
                            </li>
                            <li class="list-group-item list-group-item-danger">
                                Member 6
                                <p>You already disapproved this member</p>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div id="center" class="col-xs-12 col-sm-8 col-sm-pull-2">
			<div class="row">
				<div class="col-xs-8 col-sm-8"<p><a href="#" class="btn btn-info btn-lg">
					<span class="glyphicon glyphicon-plus"></span>Add to group</a><input type="text"/></p>
				</div>
				<div class="col-xs-4 col-sm-4"<p><a href="#" class="btn btn-info btn-lg">
					<span class="glyphicon glyphicon-remove"></span>Leave group</a></p>
				</div>
				<div class="col-xs-12 col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">Post</div>
                <div class="panel-body">
                    <textarea class="form-control" rows="5" id="comment">
                    Curabitur aliquet felis rutrum ex aliquam laoreet. Pellentesque porttitor, tortor convallis varius sagittis, felis turpis commodo lacus, feugiat auctor est massa at erat.
                    Fusce varius cursus dignissim. Integer sed augue semper, interdum massa ac, tincidunt metus. Morbi cursus ante eget pellentesque gravida.
					Cras vel feugiat mi. Etiam magna sapien, euismod sit amet mollis in, ornare eget ipsum. Etiam congue eu dolor ut vulputate.
                    Pellentesque tortor lorem, malesuada vitae efficitur vitae, efficitur vel eros.
					Sed iaculis, ante eget porttitor fermentum, massa nulla dictum augue, vitae euismod magna arcu in orci.
                    </textarea>
					<button type="button" class="btn btn-default btn-block">Upload new photo</button>
					<button type="button" class="btn btn-default btn-block">Post</button>
                </div>
            </div>
			</div>
            <div id="post1" class="row">
                <div class="col-xs-1"><img src="../res/user.png" class="img-responsive"style="width:60px"></div>
                <div class="col-xs-11">
                    <h4>User1 <small><i>Posted on February 19, 2016</i></small></h4>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p>Cras sit amet nibh libero, in gravida nulla.
                    <p>Nulla vel metus scelerisque ante sollicitudin.
                    Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                    Fusce condimentum nunc ac nisi vulputate fringilla.
                    Donec lacinia congue felis in faucibus.</p>
                </div>
                <div class="col-xs-12 col-sm-6"><img src="../res/book.png" class="img-responsive"></div>
                <div class="col-xs-1">
                    <span class="glyphicon glyphicon-arrow-up"></span>
                </div>
                <div class="col-xs-9">
                    <h3 class="text-center">Comments</h3>
                </div>
                <div class="col-xs-1">
                    <span class="glyphicon glyphicon-arrow-down"></span>
                </div>
                <div class="col-xs-12">
                <div class="media">
                    <div class="media-left">
                        <img src="../res/user.png" class="media-object" style="width:60px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">User2 <small><i>19/02/2016 22:30</i></small></h4>
                        <p>És uma merda</p>
                    </div>
                </div>
                    <div class="media">
                        <div class="media-left">
                            <img src="../res/user.png" class="media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">User2 <small><i>19/02/2016 22:46</i></small></h4>
                            <p>Mesmo Caralho</p>
                        </div>
                    </div>
                </div>
            </div>
			<br>
			<br>
			<div id="post2" class="row">
                <div class="col-xs-1"><img src="../res/user.png" class="img-responsive"style="width:60px"></div>
                <div class="col-xs-11">
                    <h4>User1 <small><i>Posted on February 19, 2016</i></small></h4>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <p>Cras sit amet nibh libero, in gravida nulla.
                    <p>Nulla vel metus scelerisque ante sollicitudin.
                    Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                    Fusce condimentum nunc ac nisi vulputate fringilla.
                    Donec lacinia congue felis in faucibus.</p>
                </div>
                <div class="col-xs-1">
                    <span class="glyphicon glyphicon-arrow-up"></span>
                </div>
                <div class="col-xs-9">
                    <h3 class="text-center">Comments</h3>
                </div>
                <div class="col-xs-1">
                    <span class="glyphicon glyphicon-arrow-down"></span>
                </div>
                <div class="col-xs-12">
                <div class="media">
                    <div class="media-left">
                        <img src="../res/user.png" class="media-object" style="width:60px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">User2 <small><i>19/02/2016 22:30</i></small></h4>
                        <p>És uma merda</p>
                    </div>
                </div>
                    <div class="media">
                        <div class="media-left">
                            <img src="../res/user.png" class="media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">User2 <small><i>19/02/2016 22:46</i></small></h4>
                            <p>Mesmo Caralho</p>
                        </div>
                    </div>
                </div>
            </div>
			<br>
			<br>	
			<div id="post3" class="row">
                <div class="col-xs-1"><img src="../res/user.png" class="img-responsive"style="width:60px"></div>
                <div class="col-xs-11">
                    <h4>User1 <small><i>Posted on February 19, 2016</i></small></h4>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p>Cras sit amet nibh libero, in gravida nulla.
                    <p>Nulla vel metus scelerisque ante sollicitudin.
                    Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                    Fusce condimentum nunc ac nisi vulputate fringilla.
                    Donec lacinia congue felis in faucibus.</p>
                </div>
                <div class="col-xs-12 col-sm-6"><img src="../res/book.png" class="img-responsive"></div>
                <div class="col-xs-1">
                    <span class="glyphicon glyphicon-arrow-up"></span>
                </div>
                <div class="col-xs-9">
                    <h3 class="text-center">Comments</h3>
                </div>
                <div class="col-xs-1">
                    <span class="glyphicon glyphicon-arrow-down"></span>
                </div>
                <div class="col-xs-12">
                <div class="media">
                    <div class="media-left">
                        <img src="../res/user.png" class="media-object" style="width:60px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">User2 <small><i>19/02/2016 22:30</i></small></h4>
                        <p>És uma merda</p>
                    </div>
                </div>
                    <div class="media">
                        <div class="media-left">
                            <img src="../res/user.png" class="media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">User2 <small><i>19/02/2016 22:46</i></small></h4>
                            <p>Mesmo Caralho</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>	