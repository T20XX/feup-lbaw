<?php /* Smarty version Smarty-3.1.15, created on 2017-04-08 15:37:40
         compiled from "/opt/lbaw/lbaw1632/public_html/frmk/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180297766558e8f5b457e8d8-14900811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0f105a44a0e8008bdf4c047cb33ba7bd3094e14' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/frmk/templates/common/menu_logged_in.tpl',
      1 => 1491213682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180297766558e8f5b457e8d8-14900811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58e8f5b46dab93_41861381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e8f5b46dab93_41861381')) {function content_58e8f5b46dab93_41861381($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<?php }} ?>
