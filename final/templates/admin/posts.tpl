{include file='admin/header.tpl'}

<div class="container">
    <div class="row" style="margin-top: 2%;">
        <div class="col-xs-12 col-sm-6 col-sm-push-6">
            <form action="{$BASE_URL}pages/admin/posts.php" method="GET">
                <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="Search through poster or content..">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
            <a href="{$BASE_URL}pages/admin/posts.php?reported=true" type="button" class="btn btn-block btn-danger">Reports</a>
        </div>
    </div>

    <div class="row" style="margin-top: 2%;">
        <div class="col-xs-12">
            <div class="table-responsive">


                <table id="mytable" class="table table-striped table-hover">

                    <thead>

                    <th>Poster Name</th>
                    <th>Date</th>
                    <th>UpVotes</th>
                    <th>View Content</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>
                    {foreach $posts as $post}
                        <tr>
                            <td>{$post.first_name} {$post.last_name}</td>
                            <td>{$post.date}</td>
                            <td>{$post.upvotes}</td>
                            <td><a href="{$BASE_URL}pages/circle/index.php?id={$post.idCircle}&post={$post.idPost}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                            <td><button class="delete btn btn-danger btn-xs" data-title="Delete" data-id="{$post.idPost}" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>

                <div class="clearfix"></div>
                <ul class="pagination pull-right">
                    <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                </ul>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete Circle</h4>
            </div>
            <form method="post" action="{$BASE_URL}actions/admin/ban_remove.php">
                <input type="hidden" name="idPost" id="idPost">
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <p><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this post?</p>
                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                </div>
            </form>
        </div>
        <div class="col-xs-12">
        </div>
    </div>
</div>

{include file='admin/footer.tpl'}
