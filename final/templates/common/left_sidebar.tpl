<div id="left_sidebar" class="col-xs-2 col-sm-2">
    <div class="row">
        <button onclick="open_left_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg"
                id="left_sidebar_btn" type="submit">
            <span class="glyphicon glyphicon-envelope"></span>
        </button>


        <nav id="messages"
             class="panel-group left_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{$BASE_URL}pages/user/messages.php"><strong>Messages</strong></a>
                    <a href="javascript:void(0)" class="left_close_btn hidden-sm hidden-md hidden-lg"
                       onclick="close_left_sidebar()"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                <ul class="list-group">
                    {foreach $recentMessagesUsers_aux as $recentMessagesUser}
                        <li class="list-group-item">
                            <img src="{if $recentMessagesUser.path}{$recentMessagesUser.path}{else}{$BASE_URL}images/default_user{/if}"
                                 class="img-responsive img-circle" style="width:60px">
                            <a href="messages.php?id={$recentMessagesUser.sender}">{$recentMessagesUser.first_name} {$recentMessagesUser.last_name}</a>
                        </li>
                    {/foreach}
                </ul>
            </div>
        </nav>
    </div>

    <div class="row hidden-xs">
        <div class="panel panel-default">
            <div class="panel-heading"><a href="{$BASE_URL}pages/user/invites.php"><strong>Invites</strong></a></div>
            <ul class="list-group">
                {foreach $invites_aux as $invite}
                    <li class="list-group-item">
                        <a href="{$BASE_URL}pages/user/index.php?id={$invite.idPerson}"> {$invite.first_name} </a>
                        <small><i>Invited you to:</i></small>
                        <img src="{if $invite.path}{$invite.path}{else}{$BASE_URL}images/default_circle{/if}"
                             class="img-responsive img-circle" style="width:60px">
                        <a href="{$BASE_URL}pages/circle/index.php?id={$invite.idCircle}"> {$invite.name} </a>
                        <div class="row">
                            <div class="col-xs-6">
                                <form id="accept_invite" action="{$BASE_URL}actions/user/accept_invite.php"
                                      method="post">
                                    <input type="hidden" value="{$invite.idInvite}" name="idInvite">
                                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>
                                    </button>
                                </form>
                            </div>
                            <div class="col-xs-6">
                                <form id="remove_invite" action="{$BASE_URL}actions/user/remove_invite.php"
                                      method="post">
                                    <input type="hidden" value="{$invite.idInvite}" name="idInvite">
                                    <button type="submit" class="btn btn-danger" ><span class="glyphicon glyphicon-remove"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>
</div>