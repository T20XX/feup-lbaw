{include file='common/header.tpl'}

<div class="container">
    <div class="row">

        {include file='common/left_sidebar.tpl'}
        {include file='common/right_sidebar.tpl'}

        <div id="center" class="col-xs-12 col-sm-8 col-sm-pull-2">
            <div class="row well">
                <div class="col-xs-4">
                    <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="collapse"
                            href=".collapse_create">Create circle
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </div>
                <div class="col-xs-8">
                    <div class="collapse collapse_create" >
                        <form id="create_circle_form" action="{$BASE_URL}actions/circle/create_circle.php"
                              method="post">
                            <input placeholder="Circle Name" name="circle_name" class="form-control" >
                            <button type="submit" class="btn btn-default btn-block">Create Circle</button>
                        </form>
                    </div>
                </div>
            </div>
            {foreach $posts as $post}
                {include file='common/posts.tpl'}
            {/foreach}
        </div>
    </div>
</div>
{include file='common/footer.tpl'}