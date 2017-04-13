<?php /* Smarty version Smarty-3.1.15, created on 2017-04-13 03:55:23
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46167419958eee3f128cc07-03613108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a3298c480f8c35b121eeca8054777e95990311c' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/register.tpl',
      1 => 1492052114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46167419958eee3f128cc07-03613108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58eee3f140a9c7_02680000',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
    'FIELD_ERRORS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58eee3f140a9c7_02680000')) {function content_58eee3f140a9c7_02680000($_smarty_tpl) {?><section id="register">
  <h2>Register</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/auth/register.php" method="post" enctype="multipart/form-data">
    <label>Name:<br>
      <input type="text" name="realname" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['realname'];?>
">
      <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['username'];?>
</span>
    </label>
    <br>
    <label>Username:<br>
      <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];?>
">
    </label>
    <br>
    <label>Password:<br>
      <input type="password" name="password" value="">
    </label>
    <br>
    <label>Photo:<br>
      <input type="file" name="photo">
    </label>
    <input type="submit" value="Register">
  </form>

</section>
<?php }} ?>
