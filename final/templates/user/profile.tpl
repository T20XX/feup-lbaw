{include file='common/header.tpl'}

<div class="container">
    <div class="row well"
         style="background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
        <div>
            <div class="col-sm-6 col-sm-push-6">
                <div style="">
                    <img src="{if $image}{$image}{else}{$BASE_URL}images/default_user{/if}"
                         class="img-responsive img-circle" style="object-fit: cover;
  width:230px;
  height:230px;">
                </div>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <div class="row">
                    <div class="col-xs-9">
                        <h2>{$info.first_name} {$info.last_name}</h2>
                    </div>
                    <div class="col-xs-3">
                        {if $isSelfProfile}
                            <a href="edit_profile.php" class="btn btn-default btn-block">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                        {else}
                            <a href="messages.php?id={$profile_id}" class="btn btn-default btn-block">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </a>
                        {/if}
                    </div>
                    {if $info.show_hometown}
                        <div class="col-xs-12 col-sm-6">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">Hometown</div>
                                <div class="panel-body"><strong>{$info.hometown}</strong></div>
                            </div>
                        </div>
                    {/if}
                    {if $info.show_birthday}
                        <div class="col-xs-12 col-sm-6">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">Birthday</div>
                                <div class="panel-body"><strong>{$info.birthday}</strong></div>
                            </div>
                        </div>
                    {/if}
                    {if $info.show_age}
                        <div class="col-xs-12 col-sm-6">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">Age</div>
                                <div class="panel-body"><strong>{$age}</strong></div>
                            </div>
                        </div>
                    {/if}
                    {if $info.show_gender}
                        <div class="col-xs-12 col-sm-6">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">Gender</div>
                                <div class="panel-body"><strong>{$info.gender}</strong></div>
                            </div>
                        </div>
                    {/if}
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Bio</div>
                            <div class="panel-body">
                                {$info.bio}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="col-sm-6">
                <div id="circles" class="row text-center well">
                    <div class="col">
                        <h3>Circles</h3>
                    </div>
                    {foreach $circles as $circle}
                        <div class="col-xs-4 col-sm-2 col-sm-offset-1 text-center">
                            <img src="{if $circle.path}{$circle.path}{else}{$BASE_URL}images/default_circle{/if}"
                                 class="img-circle img-responsive">
                            <a href="{$BASE_URL}pages/circle/index.php?id={$circle.idCircle}"><p>{$circle.name}</p></a>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}