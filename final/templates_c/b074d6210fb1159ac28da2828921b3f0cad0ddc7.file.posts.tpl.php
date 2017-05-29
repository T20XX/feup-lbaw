<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 04:29:10
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/common/posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11527105795929a394e4da67-80676632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b074d6210fb1159ac28da2828921b3f0cad0ddc7' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/final/templates/common/posts.tpl',
      1 => 1496028512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11527105795929a394e4da67-80676632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5929a394eede46_01775033',
  'variables' => 
  array (
    'post' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5929a394eede46_01775033')) {function content_5929a394eede46_01775033($_smarty_tpl) {?><div id="<?php echo $_smarty_tpl->tpl_vars['post']->value['idPost'];?>
" class="row post"
     style="padding:2%; background-color:#FAFAFA;border-style:solid; border-width:medium;border-radius:5px; border-color:#191970;">

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
            <i><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>

            <?php if ($_smarty_tpl->tpl_vars['post']->value['idCircle']) {?>(
                <a href=" <?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/circle/index.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['idCircle'];?>
">
                   <?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
</a>)</i>
            <?php }?>
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
                        class="glyphicon glyphicon-arrow-up"></span>
                <p><span style="color:green"><?php echo $_smarty_tpl->tpl_vars['post']->value['upvotes'];?>
</span></p></button>
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
</div><?php }} ?>
