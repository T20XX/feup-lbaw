{include file='common/header.tpl'}

<div class="container">
    <div class="row well" style="border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">First Name</div>
                        <div class="panel-body"><input type="text" class="form-control" id="first_name" value="{$info.first_name}"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Last Name</div>
                        <div class="panel-body"><input type="text" class="form-control" id="last_name" value="{$info.last_name}"></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Email</div>
                        <div class="panel-body"><input type="text" class="form-control" id="email" value="{$info.first_name}"></div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Hometown</div>
                        <div class="panel-body"><input type="text" class="form-control" id="hometown" value="Porto"></div>
                        <div class="panel-footer"><span class="glyphicon glyphicon-eye-open"></span></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Birthday</div>
                        <div class="panel-body"><input type="text" class="form-control" id="birthday" value="16/04/1994"></div>
                        <div class="panel-footer"><span class="glyphicon glyphicon-eye-close"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Gender</div>
                        <div class="panel-body">
                            <label class="radio-inline"><input type="radio" name="optradio">Male</label>
                            <label class="radio-inline"><input type="radio" name="optradio">Female</label>
                            <label class="radio-inline"><input type="radio" name="optradio" checked="checked">Other</label>
                        </div>
                        <div class="panel-footer"><span class="glyphicon glyphicon-eye-open"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Age</div>
                        <div class="panel-body">22</div>
                        <div class="panel-footer"><span class="glyphicon glyphicon-eye-open"></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Bio</div>
                        <div class="panel-body">
                            <textarea class="form-control" rows="5" id="comment">
                            Curabitur aliquet felis rutrum ex aliquam laoreet. Pellentesque porttitor, tortor convallis varius sagittis, felis turpis commodo lacus, feugiat auctor est massa at erat.
                            Fusce varius cursus dignissim. Integer sed augue semper, interdum massa ac, tincidunt metus. Morbi cursus ante eget pellentesque gravida.
                            Cras vel feugiat mi. Etiam magna sapien, euismod sit amet mollis in, ornare eget ipsum. Etiam congue eu dolor ut vulputate.
                            Pellentesque tortor lorem, malesuada vitae efficitur vitae, efficitur vel eros.
                            Sed iaculis, ante eget porttitor fermentum, massa nulla dictum augue, vitae euismod magna arcu in orci.
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="row">
                <div class="col-xs-12">
                    <img src="../res/a3_only/capa1.jpg" class="img-responsive img-circle">
                </div>
                <div class="col-xs-12">
                    <button type="button" class="btn btn-default btn-block">Upload new photo</button>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">New Password</div>
                        <div class="panel-body"><input type="password" class="form-control" id="hometown" value="123456"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Confirm New Password</div>
                        <div class="panel-body"><input type="password" class="form-control" id="hometown" value="123456"></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">Your Password</div>
                        <div class="panel-body"><input type="password" class="form-control" id="hometown" value="123456"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <button type="button" class="btn btn-default btn-block">Save changes</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row well"style="background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
        <div class="col-sm-6 col-sm-push-6">
            <div>
                <img src="../res/a3_only/capa1.jpg" class="img-responsive img-circle">
            </div>
        </div>
        <div class="col-sm-6 col-sm-pull-6">
            <div class="row">
                <div class="col-xs-9">
                    <h2>{$info.first_name} {$info.last_name}</h2>
                </div>
                <div class="col-xs-3">
                    <button type="button" class="btn btn-default btn-block"><span class="glyphicon glyphicon-envelope"></span></button>
                </div>
                <div class="col-xs-9">
                    <h2><small>TODO que info ou botao por aqui?</small></h2>
                </div>
                <div class="col-xs-3">
                    <button type="button" class="btn btn-default btn-block"><span class="glyphicon glyphicon-th-large"></span></button>
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
                <div class="col-xs-4 col-sm-2 col-sm-offset-1 text-center">
                    <img src="../res/check.png" class="img-circle img-responsive">
                    <a href="circle.php"><p>dfhfa</p></a>
                </div>
                <div class="col-xs-4 col-sm-2 col-sm-offset-2 text-center">
                    <img src="../res/check.png" class="img-circle img-responsive">
                    <a href="circle.php"><p>dfhfa</p></a>
                </div>
                <div class="col-xs-4 col-sm-2 col-sm-offset-2 text-center">
                    <img src="../res/check.png" class="img-circle img-responsive">
                    <a href="circle.php"><p>dfhfa</p></a>
                </div>
                <div class="col-xs-4 col-sm-2 col-sm-offset-1 text-center">
                    <img src="../res/check.png" class="img-circle img-responsive">
                    <a href="circle.php"><p>dfhfa</p></a>
                </div>
                <div class="col-xs-4 col-sm-2 col-sm-offset-2 text-center">
                    <img src="../res/check.png" class="img-circle img-responsive">
                    <a href="circle.php"><p>dfhfa</p></a>
                </div>
            </div>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}