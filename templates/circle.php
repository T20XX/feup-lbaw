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
                                <a href="profile.php">Member 1</a>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                <a href="profile.php">Member 2</a>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                <a href="profile.php">Member 3</a>
                            </li>
                            <li class="list-group-item list-group-item-danger">
                                <a href="profile.php">Member 4</a>
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
                <div class="col-xs-12 col-sm-5 ">
                    <input type="text" class="form-control" placeholder="Search inside this circle...">
                </div>
                <div class="col-xs-6 col-sm-3">
                    <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="collapse" href="#collapse1">Post</button>
                </div>
                <div class="col-xs-6 col-sm-3 col-sm-offset-1">
                    <div class="dropdown">
                        <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">More</button>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">
                                    <div class="input-group">
										<span class="input-group-btn">
											<button class="btn btn-secondary" type="button"><a>Add to Circle</a></button>
										</span>
                                        <input type="text" class="form-control" placeholder="Search for...">
                                    </div>
                                </a></li>
                            <li><button class="btn btn-secondary" type="button"><a>Leave Circle</a></button></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel panel-default">
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
            </div>
            <div id="post1" class="row">
                <div id="circle_title" class="col-xs-12">
                    <a href="circle.php"><h2>Circle Name</h2></a>
                </div>
                <div class="col-xs-1"><img src="../res/user.png" class="img-responsive"style="width:60px"></div>
                <div class="col-xs-11">
                    <a href="profile.php"><h4>User1 </a><small><i>Posted on February 19, 2016</i></small></h4>
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
                    <textarea class="form-control" rows="1" id="comment">
                    </textarea>
                            <button type="button" class="btn btn-default btn-block">Post your comment</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="media">
                        <div class="media-left">
                            <img src="../res/user.png" class="media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <a href="profile.php"><h4>User2 </a><small><i>19/02/2016 22:30</i></small></h4>
                            <p>És uma merda</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img src="../res/user.png" class="media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <a href="profile.php"><h4>User3 </a><small><i>19/02/2016 22:46</i></small></h4>
                            <p>Mesmo Caralho</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="post1" class="row">
                <div id="circle_title"  class="col-xs-12">
                    <a href="circle.php"><h2>Circle Name 2</h2></a>
                </div>
                <div class="col-xs-1"><img src="../res/user.png" class="img-responsive"style="width:60px"></div>
                <div class="col-xs-11">
                    <a href="profile.php"><h4>User1 </a><small><i>Posted on February 19, 2016</i></small></h4>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p>Cras sit amet nibh libero, in gravida nulla.
                    <p>Nulla vel metus scelerisque ante sollicitudin.
                        Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                        Fusce condimentum nunc ac nisi vulputate fringilla.
                        Donec lacinia congue felis in faucibus.</p>
                </div>
                <div class="col-xs-12 col-sm-6"><img src="../res/book.png" class="img-responsive"></div>
                <div class="col-xs-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Leave a comment</div>
                        <div class="panel-body">
							<textarea class="form-control" rows="5" id="comment">
							Curabitur aliquet felis rutrum ex aliquam laoreet. Pellentesque porttitor, tortor convallis varius sagittis, felis turpis commodo lacus, feugiat auctor est massa at erat.
							Fusce varius cursus dignissim. Integer sed augue semper, interdum massa ac, tincidunt metus. Morbi cursus ante eget pellentesque gravida.
							Cras vel feugiat mi. Etiam magna sapien, euismod sit amet mollis in, ornare eget ipsum. Etiam congue eu dolor ut vulputate.
							Pellentesque tortor lorem, malesuada vitae efficitur vitae, efficitur vel eros.
							Sed iaculis, ante eget porttitor fermentum, massa nulla dictum augue, vitae euismod magna arcu in orci.
							</textarea>
                            <button type="button" class="btn btn-default btn-block">Post your comment</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-2">
                    <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-up"></span></button>
                </div>
                <div class="col-xs-8">
                    <h3 class="text-center">Comments</h3>
                </div>
                <div class="col-xs-2">
                    <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-down"></span></button>
                </div>
                <div class="col-xs-12">
                    <div class="media">
                        <div class="media-left">
                            <img src="../res/user.png" class="media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <a href="profile.php"><h4>User2 </a><small><i>19/02/2016 22:30</i></small></h4>
                            <p>És uma merda</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img src="../res/user.png" class="media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <a href="profile.php"><h4>User3 </a><small><i>19/02/2016 22:46</i></small></h4>
                            <p>Mesmo Caralho</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>	