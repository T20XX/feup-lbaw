{include file='common/header.tpl'}

<div class="container">
    <div class="row well"
         style="background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
        <div class="col-sm-6 col-sm-push-6">
            <div>
                <img src="{$image}" class="img-responsive img-circle">
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
                        <a href="messages.php" class="btn btn-default btn-block">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </a>
                    {/if}
                </div>
                <div class="col-xs-9">
                    <h2>
                        <small>TODO que info ou botao por aqui?</small>
                    </h2>
                </div>
                <div class="col-xs-3">
                    <button type="button" class="btn btn-default btn-block"><span
                                class="glyphicon glyphicon-th-large"></span></button>
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
                            <div class="panel-body"><strong>TODO</strong></div>
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

        <div class="col-sm-6">
            <div id="circles" class="row text-center well">
                <div class="col">
                    <a href="circles.php"><h3>Circles</h3></a>
                </div>
				{foreach $circles as $circle}
                <div class="col-xs-4 col-sm-2 col-sm-offset-1 text-center">
                    <img src="{$circle.path}" class="img-circle img-responsive">
                    <a href="{$BASE_URL}pages/circle/index.php?id={$circle.idCircle}"><p>{$circle.name}</p></a>
                </div>
				{/foreach}
            </div>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}