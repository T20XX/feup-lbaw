<div id="{$post.idPost}" class="row post"
     style="padding:2%; background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">

    <div class="row">
        <div class="col-xs-2"><img
                    src="{if $post.userimage}{$post.userimage}{else}{$BASE_URL}images/default_user{/if}"
                    class="img-responsive" style="width:60px"></div>
        <div class="col-xs-8">
            <a href="{$BASE_URL}pages/user/profile.php?id={$post.idPerson}">
                <h4>{$post.first_name} {$post.last_name}</a>
            <i>{$post.date}
                {if $post.idCircle}(
                <a href=" {$BASE_URL}pages/circle/index.php?id={$post.idCircle}">
                    {$post.name}</a>)</i>
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
            <div class="col-xs-12 {if $post.postimage}col-sm-6{else}col-sm-12{/if}"
                 style="max-height:200px; overflow-y:scroll; margin-bottom:2%">
                <p>{$post.content}</p>
            </div>
        {/if}
        {if $post.postimage}
            <div class="col-xs-12 {if $post.content}col-sm-6{else}col-sm-12{/if}"><img
                        src="{$post.postimage}" class="img-responsive"
                        style="max-height:200px; margin-bottom:2%">
            </div>
        {/if}
    </div>
    <div class="row">
        <div class="col-xs-2">
            <button type="button" class="upvote btn btn-success"><span
                        class="glyphicon glyphicon-arrow-up"></span>
                <p><span style="color:green">{$post.upvotes}</span></p></button>
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