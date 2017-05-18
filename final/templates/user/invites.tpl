{include file='common/header.tpl'}

<div class="container">
    <div class="row">

        {include file='common/left_sidebar.tpl'}
        {include file='common/right_sidebar.tpl'}

        <div id="center" class="col-xs-12 col-sm-8 col-sm-pull-2">
            <div class="row">
                {foreach $invites as $invite}
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default"
                             style="background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
                            <div class="panel-heading">
                                <p><a href="{$BASE_URL}pages/user/profile.php?id={$invite.sender}">{$invite.first_name} {$invite.last_name}</a> invited you to: </p>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h3><a href="{$BASE_URL}pages/circle/index.php?id={$invite.idCircle}">{$invite.name}</a></h3>
                                    </div>
                                    <div class="col-xs-6">
                                        <img src="{$invite.path}" class="img-responsive" style="height:60px">
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-xs-6">
                                      <form id="accept_invite" action="{$BASE_URL}actions/user/accept_invite.php" method="post">
                                      <input type="hidden" value="{$invite.idInvite}" name="idInvite">
                                        <button type="submit" class="btn btn-success btn-block">Accept <span
                                                    class="glyphicon glyphicon-ok"></span></button>
                                      </form>
                                    </div>
                                    <div class="col-xs-6">
                                      <form id="remove_invite" action="{$BASE_URL}actions/user/remove_invite.php" method="post">
                                      <input type="hidden" value="{$invite.idInvite}" name="idInvite">
                                        <button type="submit" class="btn btn-error btn-block">Remove <span
                                                    class="glyphicon glyphicon-ok"></span></button>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
</div>
{include file='common/footer.tpl'}
