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
				<div class="row">
					<h4 class="col-xs-12 col-sm-6"><img src="../res/user.png" class="pull-left margins media-object"style="width:60px">User1<small><i>Posted on February 19, 2016</i></small></h4>
					<img src="../res/book.png" class="pull-right margins img-polaroid col-xs-12 col-sm-6">
					<p>Cras sit amet nibh libero, in gravida nulla. 
					Nulla vel metus scelerisque ante sollicitudin.
					Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
					Fusce condimentum nunc ac nisi vulputate fringilla.
					Donec lacinia congue felis in faucibus.</p>
				</div>
				<div class="row">
				<span class="glyphicon glyphicon-ok col-sm-1"></span>
				<h3 class="col-sm-10" style="text-align:center">Comments:</h3>
				<span class="glyphicon glyphicon-remove col-sm-1"></span>
				</div>
				<div class="media">
					<div class="media-left">
						<img src="../res/user.png" class="media-object" style="width:60px">
					</div>
					<div class="media-body">
						<h4 class="media-heading">User2<small><i>Posted on February 19, 2016</i></small></h4>
						<p>És uma merda</p>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<img src="../res/user.png" class="media-object" style="width:60px">
					</div>
					<div class="media-body">
						<h4 class="media-heading">User2<small><i>Posted on February 19, 2016</i></small></h4>
						<p>Mesmo Caralho</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	