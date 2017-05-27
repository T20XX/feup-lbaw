<div id="{$post.idPost}" class="row post"
     style="padding:2%; background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">

    <div class="row">
        <div class="col-xs-2"><img
                    src="{if $post.path}{$post.path}{else}{$BASE_URL}images/default_user{/if}"
                    class="img-responsive" style="width:60px"></div>
        <div class="col-xs-8">
            <a href="{$BASE_URL}pages/user/profile.php?id={$post.idPerson}">
                <h4>{$post.first_name} {$post.last_name}</a>
            <small><i>{$post.date}
            {if $post.idCircle}(
                <a href=" {$BASE_URL}pages/circle/index.php?id={$post.idCircle}">
                   {$post.name}</a>)</i></small>
            {/if}
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
            <div class="load_comments col-xs-12 col-sm-12">
                <button type="button" class="get_comments btn btn-primary btn-block">Comments</button>
            </div>
        </div>
    </div>
</div>