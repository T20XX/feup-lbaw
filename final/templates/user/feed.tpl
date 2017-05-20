
{include file='common/header.tpl'}

<div class="container">
    <div class="row">

        {include file='common/left_sidebar.tpl'}
        {include file='common/right_sidebar.tpl'}

        <div id="center" class="col-xs-12 col-sm-8 col-sm-pull-2">

            {foreach $posts as $post}
                <div class="row post" style="padding:2%; background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
                    <div class="row">
						<a href="{$BASE_URL}pages/circle/index.php?id={$post.idCircle}"><h2>{$post.name}</a></h2>
					</div>
					<div class="row">
                        <div class="col-xs-2"><img src="{if $post.path}{$post.path}{else}{$BASE_URL}images/default_user{/if}" class="img-responsive"style="width:60px"></div>
                        <div class="col-xs-8">
                            <a href="{$BASE_URL}pages/user/profile.php?id={$post.idPerson}"><h4>{$post.first_name} {$post.last_name}</a><small><i>Posted on {$post.date}</i></small></h4>
                        </div>
                        <div class="col-xs-2">
                            <button type="btn" class="btn-danger glyphicon glyphicon-warning-sign" data-toggle="tooltip" title="Report this post"></span></button>
                        </div>
                    </div>
                    <div class="row">
					{if $post.content}
                        <div class="col-xs-12 {if $post.json_agg}col-sm-6{else}col-sm-12{/if}" style="max-height:200px; overflow-y:scroll; margin-bottom:2%">
                            <p>{$post.content}</p>
                        </div>
					{/if}
					{if $post.json_agg}
                        <div class="col-xs-12 {if $post.content}col-sm-6{else}col-sm-12{/if}" ><img src="{$post.json_agg[0]}" class="img-responsive" style="max-height:200px; margin-bottom:2%"></div>
					{/if}
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
            {/foreach}
        </div>

    </div>
</div>
{include file='common/footer.tpl'}
