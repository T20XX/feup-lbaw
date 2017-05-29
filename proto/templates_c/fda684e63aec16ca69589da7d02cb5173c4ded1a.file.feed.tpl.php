<?php /* Smarty version Smarty-3.1.15, created on 2017-04-17 02:51:07
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/user/feed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73586834258f2cba58d53c1-02606100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda684e63aec16ca69589da7d02cb5173c4ded1a' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/user/feed.tpl',
      1 => 1492393396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73586834258f2cba58d53c1-02606100',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f2cba59a9032_57540375',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f2cba59a9032_57540375')) {function content_58f2cba59a9032_57540375($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container">
    <div class="row">
	<?php echo $_smarty_tpl->getSubTemplate ('common/left_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('common/right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
