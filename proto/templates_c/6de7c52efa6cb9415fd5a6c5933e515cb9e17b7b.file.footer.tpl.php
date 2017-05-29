<?php /* Smarty version Smarty-3.1.15, created on 2017-04-16 20:38:43
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/admin/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87535522458f3c84376e031-17395172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6de7c52efa6cb9415fd5a6c5933e515cb9e17b7b' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/admin/footer.tpl',
      1 => 1492290241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87535522458f3c84376e031-17395172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f3c843775df9_50538826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f3c843775df9_50538826')) {function content_58f3c843775df9_50538826($_smarty_tpl) {?></main>
<footer>
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Admin Panel</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="users.php"><span class="glyphicon glyphicon-user"></span> Users</a></li>
                    <li><a href="circles.php"><span class="glyphicon glyphicon-record"></span> Circles</a></li>
                    <li><a href="posts.php"><span class="glyphicon glyphicon-file"></span> Posts</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/auth/logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</footer>
</body>
</html><?php }} ?>
