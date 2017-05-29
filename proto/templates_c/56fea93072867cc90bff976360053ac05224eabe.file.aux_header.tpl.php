<?php /* Smarty version Smarty-3.1.15, created on 2017-04-16 02:40:37
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/common/aux_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160060535058f2cb955f0962-93274413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56fea93072867cc90bff976360053ac05224eabe' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/common/aux_header.tpl',
      1 => 1492097966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160060535058f2cb955f0962-93274413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f2cb95618455_51627417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f2cb95618455_51627417')) {function content_58f2cb95618455_51627417($_smarty_tpl) {?><div id="error_messages">
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#">X</a></div>
    <?php } ?>
</div>
<div id="success_messages">
    <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
        <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href="#">X</a></div>
    <?php } ?>
</div><?php }} ?>
