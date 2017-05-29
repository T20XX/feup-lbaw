{include file='common/header.tpl'}

<div class="container">
    <div class="row well" style="border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
        <form id="edit_profile_form" action="{$BASE_URL}actions/user/edit_profile.php" method="post" enctype="multipart/form-data">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">First Name</div>
                            <div class="panel-body"><input type="text" class="form-control" name="first_name"
                                                           value="{$info.first_name}"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Last Name</div>
                            <div class="panel-body"><input type="text" class="form-control" name="last_name"
                                                           value="{$info.last_name}"></div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Email</div>
                            <div class="panel-body"><input type="text" class="form-control" name="email"
                                                           value="{$email}"></div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Hometown</div>
                            <div class="panel-body"><input type="text" class="form-control" name="hometown"
                                                           value="{$info.hometown}"></div>
                            <div class="panel-footer" id="show_hometown">
                                <input type="hidden" name="show_hometown" value="{if $info.show_hometown}true{else}false{/if}">
                                <span class="glyphicon glyphicon-eye-{if $info.show_hometown}open{else}close{/if}"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Birthday</div>
                            <div class="panel-body"><input type="text" class="form-control" name="birthday"
                                                           value="{$info.birthday}"></div>
                            <div class="panel-footer" id="show_birthday">
                                <input type="hidden" name="show_birthday" value="{if $info.show_birthday}true{else}false{/if}">
                                <span class="glyphicon glyphicon-eye-{if $info.show_birthday}open{else}close{/if}"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Gender</div>
                            <div class="panel-body">
                                <label class="radio-inline"><input type="radio" name="gender" value="M"
                                                                   {if $info.gender == 'M'}checked="checked"{/if}>Male</label>
                                <label class="radio-inline"><input type="radio" name="gender" value="F"
                                                                   {if $info.gender == 'F'}checked="checked"{/if}>Female</label>
                                <label class="radio-inline"><input type="radio" name="gender" value="O"
                                                                   {if $info.gender == 'O'}checked="checked"{/if}>Other</label>
                            </div>
                            <div class="panel-footer" id="show_gender">
                                <input type="hidden" name="show_gender" value="{if $info.show_gender}true{else}false{/if}">
                                <span class="glyphicon glyphicon-eye-{if $info.show_gender}open{else}close{/if}"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Age</div>
                            <div class="panel-footer" id="show_age">
                                <input type="hidden" name="show_age" value="{if $info.show_age}true{else}false{/if}">
                                <span class="glyphicon glyphicon-eye-{if $info.show_age}open{else}close{/if}"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Bio</div>
                            <div class="panel-body">
                                <textarea class="form-control" rows="5" name="bio">{$info.bio}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-xs-12">
                        <img id="preview" src="{if $image}{$image}{else}{$BASE_URL}images/default_user{/if}" class="img-responsive img-circle" style="object-fit: cover;
  width:230px;
  height:230px;">
                    </div>
                    <div class="col-xs-12">
                        Upload new photo
                        <input type="file" name="profile_photo" id="profile_photo" class="btn btn-default btn-block">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        Leave these fields blank if you don't want to change your password.
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">New Password</div>
                            <div class="panel-body"><input type="password" class="form-control" name="new_password"
                                                           value=""></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Confirm New Password</div>
                            <div class="panel-body"><input type="password" class="form-control" name="new_password2"
                                                           value=""></div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Your Password</div>
                            <div class="panel-body"><input type="password" class="form-control" name="password"
                                                           value=""></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <button type="submit" class="btn btn-default btn-block">Save changes</button>
            </div>
        </form>
    </div>
</div>

{include file='common/footer.tpl'}