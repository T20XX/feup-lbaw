<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 17:04:36
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/user/feed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25535739559195758306ec7-65970135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5506ebd356233444d5acecee62a789ee9722ae7' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/final/templates/user/feed.tpl',
      1 => 1495901073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25535739559195758306ec7-65970135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5919575847f0a0_03427205',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'posts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919575847f0a0_03427205')) {function content_5919575847f0a0_03427205($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
    <div class="row">

        <?php echo $_smarty_tpl->getSubTemplate ('common/left_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ('common/right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div id="center" class="col-xs-12 col-sm-8 col-sm-pull-2">
            <div class="row well">
                <div class="col-xs-4">
                    <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="collapse"
                            href=".collapse_create">Create circle
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </div>
                <div class="col-xs-8">
                    <div class="collapse collapse_create" >
                        <form id="create_circle_form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/circle/create_circle.php"
                              method="post">
                            <input placeholder="Circle Name" name="circle_name" class="form-control" >
                            <button type="submit" class="btn btn-default btn-block">Create Circle</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ('common/posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } ?>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
