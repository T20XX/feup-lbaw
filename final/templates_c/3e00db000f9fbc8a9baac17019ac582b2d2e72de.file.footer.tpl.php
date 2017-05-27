<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 02:51:03
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:991931285591957584f3f06-11663329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e00db000f9fbc8a9baac17019ac582b2d2e72de' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/final/templates/common/footer.tpl',
      1 => 1495763428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '991931285591957584f3f06-11663329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_591957584fc324_04666786',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591957584fc324_04666786')) {function content_591957584fc324_04666786($_smarty_tpl) {?></main>
<footer>
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/profile.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/messages.php"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/invites.php"><span class="glyphicon glyphicon-log-in"></span> Invites</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/auth/logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
                </ul>
            </div>
        </div>
    </nav>
</footer>
</body>
</html><?php }} ?>
