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
                            <strong>Messages</strong>
                            <a href="javascript:void(0)" class="closebtn hidden-sm hidden-md hidden-lg" onclick="close_left_sidebar()"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <img src="../res/logo.png" class="img-responsive">
                                Member 1
                                <span class="badge">14</span>
                            </li>
                            <li class="list-group-item">
                                Member 2
                            </li>
                            <li class="list-group-item">
                                Member 3
                                <span class="badge">33</span>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="row hidden-xs">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Invites</strong></div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            Circle 1
                            <span class="badge"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                        </li>
                        <li class="list-group-item">
                            Circle 2
                            <span class="badge"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                        </li>
                        <li class="list-group-item">
                            Circle 3
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
                            <strong>Your circles</strong>
                            <a href="javascript:void(0)" class="closebtn hidden-sm hidden-md hidden-lg" onclick="close_right_sidebar()"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                Circle 4
                                <span class="badge">3</span>
                            </li>
                            <li class="list-group-item">
                                Circle 5
                                <span class="badge">4</span>
                            </li>
                            <li class="list-group-item">
                                Circle 6
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
                            Circle 7
                            <span class="badge">Knock!</span>
                        </li>
                        <li class="list-group-item">
                            Circle 8
                            <span class="badge">Knock!</span>
                        </li>
                        <li class="list-group-item">
                            Circle 9
                            <span class="badge">Knock!</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div id="center" class="col-xs-12 col-sm-8 col-sm-pull-2">
            <div id="post1" class="row">
				<div id="circle_title" class="col-xs-12">
					<h2>Circle Name</h2>
				</div>
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
			<div id="post1" class="row">
				<div id="circle_title"  class="col-xs-12">
					<h2>Circle Nam2e</h2>
				</div>
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