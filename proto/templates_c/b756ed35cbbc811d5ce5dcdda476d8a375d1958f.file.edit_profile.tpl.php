<?php /* Smarty version Smarty-3.1.15, created on 2017-04-16 01:41:50
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/user/edit_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34016425558f22a462aac10-99073896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b756ed35cbbc811d5ce5dcdda476d8a375d1958f' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/user/edit_profile.tpl',
      1 => 1492303307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34016425558f22a462aac10-99073896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f22a46483002_25231600',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'info' => 0,
    'email' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f22a46483002_25231600')) {function content_58f22a46483002_25231600($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
    <div class="row well" style="border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
        <form id="edit_profile_form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/user/edit_profile.php" method="post" enctype="multipart/form-data">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">First Name</div>
                            <div class="panel-body"><input type="text" class="form-control" name="first_name"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['info']->value['first_name'];?>
"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Last Name</div>
                            <div class="panel-body"><input type="text" class="form-control" name="last_name"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['info']->value['last_name'];?>
"></div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Email</div>
                            <div class="panel-body"><input type="text" class="form-control" name="email"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"></div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Hometown</div>
                            <div class="panel-body"><input type="text" class="form-control" name="hometown"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['info']->value['hometown'];?>
"></div>
                            <div class="panel-footer" id="show_hometown">
                                <input type="hidden" name="show_hometown" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['show_hometown']) {?>true<?php } else { ?>false<?php }?>">
                                <span class="glyphicon glyphicon-eye-<?php if ($_smarty_tpl->tpl_vars['info']->value['show_hometown']) {?>open<?php } else { ?>close<?php }?>"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Birthday</div>
                            <div class="panel-body"><input type="text" class="form-control" name="birthday"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['info']->value['birthday'];?>
"></div>
                            <div class="panel-footer" id="show_birthday">
                                <input type="hidden" name="show_birthday" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['show_birthday']) {?>true<?php } else { ?>false<?php }?>">
                                <span class="glyphicon glyphicon-eye-<?php if ($_smarty_tpl->tpl_vars['info']->value['show_birthday']) {?>open<?php } else { ?>close<?php }?>"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Gender</div>
                            <div class="panel-body">
                                <label class="radio-inline"><input type="radio" name="gender" value="M"
                                                                   <?php if ($_smarty_tpl->tpl_vars['info']->value['gender']=='M') {?>checked="checked"<?php }?>>Male</label>
                                <label class="radio-inline"><input type="radio" name="gender" value="F"
                                                                   <?php if ($_smarty_tpl->tpl_vars['info']->value['gender']=='F') {?>checked="checked"<?php }?>>Female</label>
                                <label class="radio-inline"><input type="radio" name="gender" value="O"
                                                                   <?php if ($_smarty_tpl->tpl_vars['info']->value['gender']=='O') {?>checked="checked"<?php }?>>Other</label>
                            </div>
                            <div class="panel-footer" id="show_gender">
                                <input type="hidden" name="show_gender" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['show_gender']) {?>true<?php } else { ?>false<?php }?>">
                                <span class="glyphicon glyphicon-eye-<?php if ($_smarty_tpl->tpl_vars['info']->value['show_gender']) {?>open<?php } else { ?>close<?php }?>"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Age</div>
                            <div class="panel-body">TODO</div>
                            <div class="panel-footer" id="show_age">
                                <input type="hidden" name="show_age" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['show_age']) {?>true<?php } else { ?>false<?php }?>">
                                <span class="glyphicon glyphicon-eye-<?php if ($_smarty_tpl->tpl_vars['info']->value['show_age']) {?>open<?php } else { ?>close<?php }?>"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Bio</div>
                            <div class="panel-body">
                                <textarea class="form-control" rows="5" name="bio"><?php echo $_smarty_tpl->tpl_vars['info']->value['bio'];?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-xs-12">
                        <img id="preview" src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" class="img-responsive img-circle">
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

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
