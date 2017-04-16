<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 22:04:07
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/admin/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173738805758f28ac7e64a79-57068162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf5d08e61868d6c18c1ae6bdafb3207ed2f4fb0b' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/admin/dashboard.tpl',
      1 => 1492290241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173738805758f28ac7e64a79-57068162',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f28ac80885e4_11972816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f28ac80885e4_11972816')) {function content_58f28ac80885e4_11972816($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
    <div class="row jumbotron text-center">
        <div class="col-xs-12">
            <h1>Management</h1>
        </div>
        <div class="col-sm-4">
            <a href="users.php" class="btn btn-lg btn-block btn-info" style="padding:25% 0;"><span class="glyphicon glyphicon-user"></span> Users</a>
        </div>
        <div class="col-sm-4">
            <a href="circles.php" class="btn btn-lg btn-block btn-warning" style="padding:25% 0;"><span class="glyphicon glyphicon-record"></span> Circles</a>
        </div>
        <div class="col-sm-4">
            <a href="posts.php" class="btn btn-lg btn-block btn-danger" style="padding:25% 0;"><span class="glyphicon glyphicon-file"></span> Posts</a>
        </div>
    </div>
    <div class="row jumbotron text-center">
        <div class="col-xs-12">
            <h1>Statistics</h1>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-lg btn-block btn-info" style="padding:25% 0;">
                <p>TODO</p>
                <p><span class="glyphicon glyphicon-user"></span> Users registered</p>
            </button>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-lg btn-block btn-danger" style="padding:25% 0;">
                <p>TODO</p>
                <p><span class="glyphicon glyphicon-user"></span> Users inactive</p>
            </button>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-lg btn-block btn-success" style="padding:25% 0;">
                <p>TODO</p>
                <p><span class="glyphicon glyphicon-file"></span> Posts</p>
            </button>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-lg btn-block btn-warning" style="padding:25% 0;">
                <p>TODO</p>
                <p><span class="glyphicon glyphicon-picture"></span> Images</p>
            </button>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
