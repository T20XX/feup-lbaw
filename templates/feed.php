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
            <div class="row">
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <div class="col-xs-12 col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Name</span>
                                    <input id="circle_name" type="text" class="form-control" placeholder="Circle name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <button type="button" class="btn btn-default btn-block">Upload photo</button>
                            </div>

                            <div class="col-xs-12">
                                <button type="button" class="btn btn-default btn-block">Create circle</button>
                            </div>
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
</div>