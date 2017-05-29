<?php /* Smarty version Smarty-3.1.15, created on 2017-04-17 16:05:05
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/user/invites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195222152958f41ea2557674-62738964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d50a6a6b777d1ee085f38dcb3445169ef7b2afb' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/user/invites.tpl',
      1 => 1492441504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195222152958f41ea2557674-62738964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f41ea2668123_89679993',
  'variables' => 
  array (
    'invites' => 0,
    'BASE_URL' => 0,
    'invite' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f41ea2668123_89679993')) {function content_58f41ea2668123_89679993($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
    <div class="row">

        <?php echo $_smarty_tpl->getSubTemplate ('common/left_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ('common/right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div id="center" class="col-xs-12 col-sm-8 col-sm-pull-2">
            <div class="row">
                <?php  $_smarty_tpl->tpl_vars['invite'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invite']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['invites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['invite']->key => $_smarty_tpl->tpl_vars['invite']->value) {
$_smarty_tpl->tpl_vars['invite']->_loop = true;
?>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default"
                             style="background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
                            <div class="panel-heading">
                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['invite']->value['sender'];?>
"><?php echo $_smarty_tpl->tpl_vars['invite']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['invite']->value['last_name'];?>
</a> invited you to: </p>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/circle/index.php?id=<?php echo $_smarty_tpl->tpl_vars['invite']->value['idCircle'];?>
"><?php echo $_smarty_tpl->tpl_vars['invite']->value['name'];?>
</a></h3>
                                    </div>
                                    <div class="col-xs-6">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['invite']->value['path'];?>
" class="img-responsive" style="height:60px">
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <button type="button" class="btn btn-success btn-block">Accept <span
                                                    class="glyphicon glyphicon-ok"></span></button>
                                    </div>
                                    <div class="col-xs-6">
                                        <button type="button" class="btn btn-danger btn-block">Remove <span
                                                    class="glyphicon glyphicon-remove"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
