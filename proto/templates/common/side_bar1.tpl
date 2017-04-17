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