{include file='common/header.tpl'}

<div class="container">
    <div class="row">

        <div id="left_sidebar" class="col-xs-2 col-sm-2">
            <div class="row">
                <button onclick="open_left_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg"
                        id="left_sidebar_btn" type="submit">
                    <span class="glyphicon glyphicon-envelope"></span>
                </button>


                <nav id="messages"
                     class="panel-group left_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Members ({$circle.nusers})</strong>
                            <a href="javascript:void(0)" class="left_close_btn hidden-sm hidden-md hidden-lg"
                               onclick="close_left_sidebar()"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            {foreach $members as $member}
                                <li class="list-group-item list-group-item-success">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <img src="{if $member.path}{$member.path}{else}{$BASE_URL}images/default_user{/if}"
                                                 class="img-responsive" style="width:60px">
                                        </div>
                                        <div class="col-xs-7">
                                            <a href="{$BASE_URL}pages/user/profile.php?id={$member.idPerson}">{$member.first_name} {$member.last_name}</a>
                                            {if $member.idPerson != $ID}
                                                <button class="btn btn-danger">Kick</button>
                                            {/if}
                                        </div>
                                    </div>
                                </li>
                            {/foreach}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div id="right_sidebar" class="col-xs-2 col-xs-offset-8 col-sm-2 col-sm-offset-0 col-sm-push-8">
            <div class="row">

                <button onclick="open_right_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg"
                        id="right_sidebar_btn" type="submit">
                    <span class="glyphicon glyphicon-record"></span>
                </button>


                <nav id="circles"
                     class="panel-group right_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="circles.php"><strong>Your circles</strong></a>
                            <a href="javascript:void(0)" class="right_close_btn hidden-sm hidden-md hidden-lg"
                               onclick="close_right_sidebar()"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            {foreach $circles_aux as $circle}
                                <li class="list-group-item">
                                    <img src="{if $circle.path}{$circle.path}{else}{$BASE_URL}images/default_circle{/if}"
                                         class="img-responsive img-circle" style="width:60px">
                                    <a href="{$BASE_URL}pages/circle/index.php?id={$circle.idCircle}">{$circle.name}</a>
                                </li>
                            {/foreach}
                        </ul>
                    </div>
                </nav>
            </div>

            <!--<div class="row hidden-xs">
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
            </div>-->

        </div>

        <div id="center" class="col-xs-12 col-sm-8 col-sm-pull-2">
            <div class="row well">
                <div class="col-xs-12">
                    <h2 style="text-align:center; margin-top:0%"><a
                                href="{if $circle.image}{$circle.image}{else}{$BASE_URL}images/default_circle{/if}">{$circle.name}</a>
                    </h2>
                </div>
                <div class="col-xs-12 col-sm-5 ">
                    <input type="text" class="form-control" placeholder="Search inside this circle...">
                </div>
                <div class="col-xs-6 col-sm-3">
                    <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="collapse"
                            href="#collapse1">Post
                    </button>
                </div>
                <div class="col-xs-6 col-sm-3 col-sm-offset-1">
                    <div class="dropdown">
                        <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">
                                    <div class="input-group">
										<span class="input-group-btn">
											<button class="btn btn-secondary btn-block"
                                                    type="button"><a>Add to Circle</a></button>
										</span>
                                        <input type="text" class="form-control" placeholder="Search for...">
                                    </div>
                                </a></li>
                            <li>
                                <button class="btn btn-secondary btn-block" type="button"><a>Report Circle</a></button>
                            </li>
                            <li>
                                <form id="leave_circle_form" action="{$BASE_URL}actions/circle/leave.php" method="post">
                                    <input type="hidden" name="idCircle" value="{$idCircle}">
                                    <button class="btn btn-secondary btn-block" type="submit">Leave Circle</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="collapse1" class="panel-collapse collapse">
                    <form id="create_circle_form" action="{$BASE_URL}actions/circle/create_post.php" method="post"
                          enctype="multipart/form-data">
                        <input type="hidden" name="idCircle" value="{$idCircle}">
                        <textarea placeholder="Post here..." class="form-control" rows="3" name="content"></textarea>
                        <input type="file" class="btn btn-default btn-block" name="post_photo">Upload new photo</input>
                        <button type="submit" class="btn btn-default btn-block">Post</button>
                    </form>
                </div>
            </div>

            {foreach $posts as $post}
                {include file='common/posts.tpl'}
            {/foreach}
        </div>

    </div>
</div>
{include file='common/footer.tpl'}
