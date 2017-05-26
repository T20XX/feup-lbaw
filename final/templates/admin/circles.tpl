{include file='admin/header.tpl'}

<div class="container">
    <div class="row" style="margin-top: 2%;">
        <div class="col-xs-12 col-sm-6 col-sm-push-6">
            <form action="{$BASE_URL}pages/admin/circles.php" method="GET">
                <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
            <a href="{$BASE_URL}pages/admin/circles.php?reported=true" type="button" class="btn btn-block btn-danger">Reports</a>
        </div>
    </div>

    <div class="row" style="margin-top: 2%;">
        <div class="col-xs-12">
            <div class="table-responsive">


                <table id="mytable" class="table table-striped table-hover">

                    <thead>

                    <th>Name</th>
                    <th>Users</th>
                    <th>Posts</th>
                    <th>Visit</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>
                    {foreach $circles as $circle}
                        <tr>
                            <td>{$circle.name}</td>
                            <td>{$circle.nUsers}</td>
                            <td>{$circle.nPosts}</td>
                            <td><a href="{$BASE_URL}pages/circle/index.php?id={$circle.idPerson}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                            <td><button class="delete btn btn-danger btn-xs" data-title="Delete" data-id="{$circle.idCircle}" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
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
                <h4 class="modal-title custom_align" id="Heading">Ban user</h4>
            </div>
            <form method="post" action="{$BASE_URL}actions/admin/ban_remove.php">
                <input type="hidden" name="idCircle" id="idCircle">
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <p><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this circle?</p>
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


{*{include file='admin/header.tpl'}

<div class="container">
    <div class="row jumbotron text-center">
      {foreach $circles as $circle}
      <li class="list-group-item list-group-item-success">
        <img src="{if $path}{$path}{else}{$BASE_URL}images/default_user{/if}"  class="img-responsive img-circle" style="width:60px">
          <a href="../circle/index.php?id={$circle.idCircle}">{$circle.name} : {$circle.nusers}</a>
      </li>
      {/foreach}
    </div>
</div>


{include file='admin/footer.tpl'}*}
