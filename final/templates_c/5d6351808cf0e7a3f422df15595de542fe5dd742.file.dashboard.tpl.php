<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 04:25:54
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/admin/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207663822159195f23b9a918-32152369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d6351808cf0e7a3f422df15595de542fe5dd742' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/final/templates/admin/dashboard.tpl',
      1 => 1495769146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207663822159195f23b9a918-32152369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59195f23d3b356_99838766',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'nUsers' => 0,
    'nCircles' => 0,
    'nPosts' => 0,
    'nImages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59195f23d3b356_99838766')) {function content_59195f23d3b356_99838766($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
    <div class="row jumbotron text-center">
        <div class="col-xs-12">
            <h1>Management</h1>
        </div>
        <div class="col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/users.php" class="btn btn-lg btn-block btn-info" style="padding:25% 0;"><span class="glyphicon glyphicon-user"></span> Users</a>
        </div>
        <div class="col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/circles.php" class="btn btn-lg btn-block btn-warning" style="padding:25% 0;"><span class="glyphicon glyphicon-record"></span> Circles</a>
        </div>
        <div class="col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/posts.php" class="btn btn-lg btn-block btn-danger" style="padding:25% 0;"><span class="glyphicon glyphicon-file"></span> Posts</a>
        </div>
    </div>
    <div class="row jumbotron text-center">
        <div class="col-xs-12">
            <h1>Statistics</h1>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-lg btn-block btn-info" style="padding:25% 0;">
                <p><?php echo $_smarty_tpl->tpl_vars['nUsers']->value;?>
</p>
                <p><span class="glyphicon glyphicon-user"></span> Users</p>
            </button>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-lg btn-block btn-danger" style="padding:25% 0;">
                <p><?php echo $_smarty_tpl->tpl_vars['nCircles']->value;?>
</p>
                <p><span class="glyphicon glyphicon-record"></span> Circles</p>
            </button>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-lg btn-block btn-success" style="padding:25% 0;">
                <p><?php echo $_smarty_tpl->tpl_vars['nPosts']->value;?>
</p>
                <p><span class="glyphicon glyphicon-file"></span> Posts</p>
            </button>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-lg btn-block btn-warning" style="padding:25% 0;">
                <p><?php echo $_smarty_tpl->tpl_vars['nImages']->value;?>
</p>
                <p><span class="glyphicon glyphicon-picture"></span> Images</p>
            </button>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
