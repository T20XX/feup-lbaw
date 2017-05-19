{include file='admin/header.tpl'}

<div class="container">
    <div class="row jumbotron text-center">
        <div class="col-xs-12">
            <h1>Management</h1>
        </div>
        <div class="col-sm-4">
            <a href="{$BASE_URL}/pages/admin/users.php" class="btn btn-lg btn-block btn-info" style="padding:25% 0;"><span class="glyphicon glyphicon-user"></span> Users</a>
        </div>
        <div class="col-sm-4">
            <a href="circles.php" class="btn btn-lg btn-block btn-warning" style="padding:25% 0;"><span class="glyphicon glyphicon-record"></span> Circles</a>
        </div>
        <div class="col-sm-4">
            <a href="posts.php" class="btn btn-lg btn-block btn-danger" style="padding:25% 0;"><span class="glyphicon glyphicon-file"></span> Posts</a>
        </div>
    </div>
    <div class="row jumbotron text-center">
        <div class="col-xs-12">
            <h1>Statistics</h1>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-lg btn-block btn-info" style="padding:25% 0;">
                <p>TODO</p>
                <p><span class="glyphicon glyphicon-user"></span> Users registered</p>
            </button>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-lg btn-block btn-danger" style="padding:25% 0;">
                <p>TODO</p>
                <p><span class="glyphicon glyphicon-user"></span> Users inactive</p>
            </button>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-lg btn-block btn-success" style="padding:25% 0;">
                <p>TODO</p>
                <p><span class="glyphicon glyphicon-file"></span> Posts</p>
            </button>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-lg btn-block btn-warning" style="padding:25% 0;">
                <p>TODO</p>
                <p><span class="glyphicon glyphicon-picture"></span> Images</p>
            </button>
        </div>
    </div>
</div>

{include file='admin/footer.tpl'}
