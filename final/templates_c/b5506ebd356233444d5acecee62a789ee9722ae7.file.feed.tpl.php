<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 15:39:22
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/user/feed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25535739559195758306ec7-65970135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5506ebd356233444d5acecee62a789ee9722ae7' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/final/templates/user/feed.tpl',
      1 => 1495895954,
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
    'post' => 0,
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
                <div id= "<?php echo $_smarty_tpl->tpl_vars['post']->value['idPost'];?>
" class="row post"
                     style="padding:2%; background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">
                    <div class="row">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/circle/index.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['idCircle'];?>
"><h2
                                    style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
</a></h2>
                    </div>
                    <div class="row">
                        <div class="col-xs-2"><img
                                    src="<?php if ($_smarty_tpl->tpl_vars['post']->value['path']) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['path'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/default_user<?php }?>"
                                    class="img-responsive" style="width:60px"></div>
                        <div class="col-xs-8">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['idPerson'];?>
">
                                <h4><?php echo $_smarty_tpl->tpl_vars['post']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['last_name'];?>
</a>
                            <small><i>Posted on <?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</i></small>
                            </h4>
                        </div>
                        <div class="col-xs-2">
                            <button type="btn" class="btn-danger glyphicon glyphicon-warning-sign" data-toggle="tooltip"
                                    title="Report this post"></span></button>
                        </div>
                    </div>
                    <div class="row">
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['content']) {?>
                            <div class="col-xs-12 <?php if ($_smarty_tpl->tpl_vars['post']->value['json_agg']) {?>col-sm-6<?php } else { ?>col-sm-12<?php }?>"
                                 style="max-height:200px; overflow-y:scroll; margin-bottom:2%">
                                <p><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</p>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['json_agg']) {?>
                            <div class="col-xs-12 <?php if ($_smarty_tpl->tpl_vars['post']->value['content']) {?>col-sm-6<?php } else { ?>col-sm-12<?php }?>"><img
                                        src="<?php echo $_smarty_tpl->tpl_vars['post']->value['json_agg'][0];?>
" class="img-responsive"
                                        style="max-height:200px; margin-bottom:2%"></div>
                        <?php }?>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <button type="button" class="upvote btn btn-success"><span
                                        class="glyphicon glyphicon-arrow-up"></span></button>
                        </div>
                        <div class="col-xs-8">
                            <h3 class="text-center">Comments</h3>
                        </div>
                        <div class="col-xs-2">
                            <button type="button" class="btn btn-danger"><span
                                        class="glyphicon glyphicon-arrow-down"></span></button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            <textarea placeholder="Comment here..." class="comment_area form-control" rows="1"></textarea>
                                <button type="button" class="add_comment btn btn-default btn-block">Post your comment</button>
                                <input type="hidden" class="idPost" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['idPost'];?>
">
                            </div>
                            <div class="load_comments col-xs-12 col-sm-12">
                                <button type="button" class="get_comments btn btn-primary btn-block">Comments</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
