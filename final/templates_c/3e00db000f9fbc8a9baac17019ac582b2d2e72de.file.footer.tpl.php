<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 05:12:02
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1916348106592b9f92d04789-68210099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1916348106592b9f92d04789-68210099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592b9f92d1e914_26858342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592b9f92d1e914_26858342')) {function content_592b9f92d1e914_26858342($_smarty_tpl) {?></main>
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
