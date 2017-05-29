<?php /* Smarty version Smarty-3.1.15, created on 2017-04-16 02:40:37
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114031591358f2cb9561cd11-44018982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f66eefb739f5127c1065778560ad6a4148cf0b16' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/common/footer.tpl',
      1 => 1492131540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114031591358f2cb9561cd11-44018982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f2cb956251a3_49530509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f2cb956251a3_49530509')) {function content_58f2cb956251a3_49530509($_smarty_tpl) {?></main>
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
                    <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                    <li><a href="messages.php"><span class="glyphicon glyphicon-envelope"></span> <span class="badge">5</span> Messages</a></li>
                    <li><a href="invites.php"><span class="glyphicon glyphicon-log-in"></span> <span class="badge">2</span> Invites</a></li>
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
