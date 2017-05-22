{include file='admin/header.tpl'}

<div class="container">
    <div class="row" style="margin-top: 2%;">
        <div class="col-xs-12 col-sm-6 col-sm-push-6">
            <form action="{$BASE_URL}pages/admin/users.php" method="GET">
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
            <a href="{$BASE_URL}pages/admin/users.php?reported=true" type="button" class="btn btn-block btn-danger">Reports</a>
        </div>
    </div>

    <div class="row" style="margin-top: 2%;">
        <div class="col-xs-12">
            <div class="table-responsive">


                <table id="mytable" class="table table-striped table-hover">

                    <thead>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Bio</th>
                    <th>Ban</th>
                    </thead>
                    <tbody>
                    {foreach $users as $user}
                        <tr>
                            <td><a href="{$BASE_URL}pages/user/profile.php?id={$user.idPerson}">{$user.first_name} {$user.last_name}</a></td>
                            <td>{$user.email}</td>
                            <td><button class="open-showBio btn btn-primary btn-xs" data-title="Edit" data-id="{$user.bio}" data-toggle="modal" data-target="#showBio" ><span class="glyphicon glyphicon-eye-open"></span></button></td>
                            {if $user.banned}
                            <td><button class="showBanReason btn btn-danger btn-xs" data-title="Ban Reason" data-id="{$user.ban_reason}" data-toggle="modal" data-target="#ban_reason" ><span class="glyphicon glyphicon-trash"></span></button></td>
                            {else}
                            <td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
                            {/if}
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

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Ban user</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <p><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to ban this user?</p>
                    <p>Explain the reason to inform the user.</p>
                </div>
                <div class="form-group">
                    <label for="comment">Reason:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
            </div>
        </div>
        <div class="col-xs-12">
        </div>
    </div>
</div>

<div class="modal fade" id="showBio" tabindex="-1" role="dialog" aria-labelledby="showBio" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Bio</h4>
            </div>
            <div class="modal-body" id="showBio-body">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ban_reason" tabindex="-1" role="dialog" aria-labelledby="Ban Reason" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Bio</h4>
            </div>
            <div class="modal-body" id="showBanReason">
            </div>
        </div>
    </div>
</div>

{*<div class="container">
    <div class="row jumbotron text-center">
      {foreach $users as $user}
      <li class="list-group-item list-group-item-success">
        <img src="{if $path}{$path}{else}{$BASE_URL}images/default_user{/if}"  class="img-responsive img-circle" style="width:60px">
          <a href="../user/profile.php?id={$user.idPerson}">{$user.first_name} {$user.last_name}</a>
      </li>
      {/foreach}
    </div>
</div>*}


{include file='admin/footer.tpl'}
