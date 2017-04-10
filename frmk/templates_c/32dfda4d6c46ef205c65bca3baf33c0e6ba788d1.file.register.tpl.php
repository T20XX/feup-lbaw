<?php /* Smarty version Smarty-3.1.15, created on 2017-04-08 15:41:08
         compiled from "/opt/lbaw/lbaw1632/public_html/frmk/templates/users/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82795077558e8f6840a97f7-25128983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32dfda4d6c46ef205c65bca3baf33c0e6ba788d1' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/frmk/templates/users/register.tpl',
      1 => 1491213682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82795077558e8f6840a97f7-25128983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
    'FIELD_ERRORS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58e8f684243689_48572255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e8f684243689_48572255')) {function content_58e8f684243689_48572255($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section id="register">
  <h2>Register</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post" enctype="multipart/form-data">
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

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
