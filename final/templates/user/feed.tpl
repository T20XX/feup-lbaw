{include file='common/header.tpl'}

<div class="container">
    <div class="row">

        {include file='common/left_sidebar.tpl'}
        {include file='common/right_sidebar.tpl'}

        <div id="center" class="col-xs-12 col-sm-8 col-sm-pull-2">
            <div class="row well">
                <div class="col-xs-4">
                    <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="collapse"
                            href="#collapse1">Create circle
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </div>
                <div class="col-xs-8">
                    <div id="collapse1" class="collapse">
                        <form id="create_circle_form" action="{$BASE_URL}actions/circle/create_circle.php"
                              method="post">
                            <input placeholder="Circle Name" name="circle_name" class="form-control" >
                            <button type="submit" class="btn btn-default btn-block">Create Circle</button>
                        </form>
                    </div>
                </div>
            </div>
            {foreach $posts as $post}
                <div class="row post"
                     style="padding:2%; background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
                    <div class="row">
                        <a href="{$BASE_URL}pages/circle/index.php?id={$post.idCircle}"><h2
                                    style="text-align:center;">{$post.name}</a></h2>
                    </div>
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
                            <button type="button" class="upvote btn btn-success"><span
                                        class="glyphicon glyphicon-arrow-up"></span></button>
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
                            <textarea placeholder="Comment here..." class="comment_area form-control" rows="1"></textarea>
                                <button type="button" class="add_comment btn btn-default btn-block">Post your comment</button>
                                <input type="hidden" class="idPost" value="{$post.idPost}">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <button type="button" class="btn btn-primary btn-block">Comments</button>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
</div>
{include file='common/footer.tpl'}
