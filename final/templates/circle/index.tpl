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
                                            {if $member.idPerson != $ID}<button class="btn btn-danger">Kick</button>{/if}
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
                        <form id="create_circle_form" action="{$BASE_URL}actions/circle/create_post.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="idCircle" value="{$idCircle}">
                            <textarea placeholder="Post here..." class="form-control" rows="3" name="content"></textarea>
                            <input type="file" class="btn btn-default btn-block" name="post_photo">Upload new photo</input>
                            <button type="submit" class="btn btn-default btn-block">Post</button>
                        </form>
                </div>
            </div>

        {foreach $posts as $post}
            <div class="row post"
                 style="padding:2%; background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
                <div class="row">
                    <div class="col-xs-2"><img
                                src="{if $post.path}{$post.path}{else}{$BASE_URL}images/default_user{/if}"
                                class="img-responsive" style="width:60px"></div>
                    <div class="col-xs-8">
                        <a href="{$BASE_URL}pages/user/profile.php?id={$post.idPerson}">
                            <h4>{$post.first_name} {$post.last_name}</a>
                        <small><i>Posted on {$post.date}</i></small>
                        </h4>
                    </div>
                    <div class="col-xs-2">
                        <button type="btn" class="btn-danger glyphicon glyphicon-warning-sign" data-toggle="tooltip"
                                title="Report this post"></span></button>
                    </div>
                </div>
                <div class="row">
                    {if $post.content}
                        <div class="col-xs-12 {if $post.json_agg}col-sm-6{else}col-sm-12{/if}"
                             style="max-height:200px; overflow-y:scroll; margin-bottom:2%">
                            <p>{$post.content}</p>
                        </div>
                    {/if}
                    {if $post.json_agg}
                        <div class="col-xs-12 {if $post.content}col-sm-6{else}col-sm-12{/if}"><img
                                    src="{$post.json_agg[0]}" class="img-responsive"
                                    style="max-height:200px; margin-bottom:2%"></div>
                    {/if}
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-up"></span>
                        </button>
                    </div>
                    <div class="col-xs-8">
                        <h3 class="text-center">Comments</h3>
                    </div>
                    <div class="col-xs-2">
                        <button type="button" class="btn btn-danger"><span
                                    class="glyphicon glyphicon-arrow-down"></span></button>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <textarea placeholder="Comment here..." class="form-control" rows="1"
                                      id="comment"></textarea>
                            <button type="button" class="btn btn-default btn-block">Post your comment</button>
                        </div>
                        <div class="col-xs-10">
                            <div class="media">
                                <div class="media-left">
                                    <img src="../res/user.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <a href="profile.php"><h4>User2</a>
                                    <small><i>19/02/2016 22:30</i></small>
                                    </h4>
                                    <p>Bom post</p>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="../res/user.png" class="media-object" style="width:60px">
                                        </div>
                                        <div class="media-body">
                                            <a href="profile.php"><h4>User2</a>
                                            <small><i>19/02/2016 22:30</i></small>
                                            </h4>
                                            <p>Mesmo</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="../res/user.png" class="media-object" style="width:60px">
                                        </div>
                                        <div class="media-body">
                                            <a href="profile.php"><h4>User2</a>
                                            <small><i>19/02/2016 22:30</i></small>
                                            </h4>
                                            <p>Yep</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div id="collapse_reply1" class="panel-collapse collapse">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <textarea placeholder="Reply here..." class="form-control" rows="3"
                                                      id="comment"></textarea>
                                            <button type="button" class="btn btn-default btn-block">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <button class="btn btn-info btn-block dropdown-toggle" type="button" data-toggle="collapse"
                                    href="#collapse_reply1" style="display: block; margin: 0 auto;">Reply
                            </button>
                        </div>
                        <div class="col-xs-10">
                            <div class="media">
                                <div class="media-left">
                                    <img src="../res/user.png" class="media-object" style="width:60px">
                                </div>
                                <div class="media-body">
                                    <a href="profile.php"><h4>User3</a>
                                    <small><i>19/02/2016 22:46</i></small>
                                    </h4>
                                    <p>Top</p>
                                </div>
                            </div>
                            <div class="row">
                                <div id="collapse_reply2" class="panel-collapse collapse">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <textarea placeholder="Reply here..." class="form-control" rows="3"
                                                      id="comment"></textarea>
                                            <button type="button" class="btn btn-default btn-block">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <button class="btn btn-info btn-block dropdown-toggle" type="button" data-toggle="collapse"
                                    href="#collapse_reply2" style="display: block; margin: 0 auto;">Reply
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>

</div>
</div>
{include file='common/footer.tpl'}
