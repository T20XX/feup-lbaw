<?php /* Smarty version Smarty-3.1.15, created on 2017-04-22 18:49:52
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/user/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78783640958f2cba0139e56-63928193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7278e3c86405970d5a6128c42ddf90a9b78d0c7f' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/user/profile.tpl',
      1 => 1492883388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78783640958f2cba0139e56-63928193',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f2cba032a696_05761493',
  'variables' => 
  array (
    'image' => 0,
    'BASE_URL' => 0,
    'info' => 0,
    'isSelfProfile' => 0,
    'profile_id' => 0,
    'age' => 0,
    'circles' => 0,
    'circle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f2cba032a696_05761493')) {function content_58f2cba032a696_05761493($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
    <div class="row well"
         style="background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
        <div class="col-sm-6 col-sm-push-6">
            <div>

                <img src="<?php if ($_smarty_tpl->tpl_vars['image']->value) {?><?php echo $_smarty_tpl->tpl_vars['image']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/default_user<?php }?>" class="img-responsive img-circle">
            </div>
        </div>
        <div class="col-sm-6 col-sm-pull-6">
            <div class="row">
                <div class="col-xs-9">
                    <h2><?php echo $_smarty_tpl->tpl_vars['info']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['last_name'];?>
</h2>
                </div>
                <div class="col-xs-3">
                    <?php if ($_smarty_tpl->tpl_vars['isSelfProfile']->value) {?>
                        <a href="edit_profile.php" class="btn btn-default btn-block">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    <?php } else { ?>
                        <a href="messages.php?id=<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" class="btn btn-default btn-block">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </a>
                    <?php }?>
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
                <?php if ($_smarty_tpl->tpl_vars['info']->value['show_hometown']) {?>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Hometown</div>
                            <div class="panel-body"><strong><?php echo $_smarty_tpl->tpl_vars['info']->value['hometown'];?>
</strong></div>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['info']->value['show_birthday']) {?>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Birthday</div>
                            <div class="panel-body"><strong><?php echo $_smarty_tpl->tpl_vars['info']->value['birthday'];?>
</strong></div>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['info']->value['show_age']) {?>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Age</div>
                            <div class="panel-body"><strong><?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</strong></div>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['info']->value['show_gender']) {?>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Gender</div>
                            <div class="panel-body"><strong><?php echo $_smarty_tpl->tpl_vars['info']->value['gender'];?>
</strong></div>
                        </div>
                    </div>
                <?php }?>
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Bio</div>
                        <div class="panel-body">
                            <?php echo $_smarty_tpl->tpl_vars['info']->value['bio'];?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div id="circles" class="row text-center well">
                <div class="col">
                    <h3>Circles</h3>
                </div>
				<?php  $_smarty_tpl->tpl_vars['circle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['circle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['circles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['circle']->key => $_smarty_tpl->tpl_vars['circle']->value) {
$_smarty_tpl->tpl_vars['circle']->_loop = true;
?>
                <div class="col-xs-4 col-sm-2 col-sm-offset-1 text-center">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['circle']->value['path'];?>
" class="img-circle img-responsive">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/circle/index.php?id=<?php echo $_smarty_tpl->tpl_vars['circle']->value['idCircle'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['circle']->value['name'];?>
</p></a>
                </div>
				<?php } ?>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
