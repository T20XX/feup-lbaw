<?php /* Smarty version Smarty-3.1.15, created on 2017-04-08 15:37:06
         compiled from "/opt/lbaw/lbaw1632/public_html/frmk/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20829401158e8f59258f744-40562899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3621c74cc389f3b006709d4f914e2ea3d56c40fb' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/frmk/templates/common/menu_logged_out.tpl',
      1 => 1491213682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20829401158e8f59258f744-40562899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58e8f59259abf4_02810839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e8f59259abf4_02810839')) {function content_58e8f59259abf4_02810839($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
