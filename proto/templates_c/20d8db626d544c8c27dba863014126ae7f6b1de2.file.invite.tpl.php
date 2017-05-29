<?php /* Smarty version Smarty-3.1.15, created on 2017-04-17 02:43:20
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/user/invite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40498828258f393d176ff69-89259472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20d8db626d544c8c27dba863014126ae7f6b1de2' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/user/invite.tpl',
      1 => 1492393396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40498828258f393d176ff69-89259472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f393d1950513_31083115',
  'variables' => 
  array (
    'invites' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f393d1950513_31083115')) {function content_58f393d1950513_31083115($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
                                <p><a href="profile.php">User2 TODO</a> invited you to: </p>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h3><a href=""></a></h3>
                                    </div>
                                    <div class="col-xs-6">
                                        <img src="" class="img-responsive" style="height:60px">
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
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
