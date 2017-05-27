<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 17:59:06
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/circle/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2089164489591e4062a14eb0-34639002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307837afab29eb12cb09b372924f23e2b0017647' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/final/templates/circle/index.tpl',
      1 => 1495817930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2089164489591e4062a14eb0-34639002',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_591e4062bf9d92_83899626',
  'variables' => 
  array (
    'circle' => 0,
    'members' => 0,
    'member' => 0,
    'BASE_URL' => 0,
    'ID' => 0,
    'circles_aux' => 0,
    'idCircle' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591e4062bf9d92_83899626')) {function content_591e4062bf9d92_83899626($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
    <div class="row">

        <div id="left_sidebar" class="col-xs-2 col-sm-2">
            <div class="row">
                <button onclick="open_left_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg"
                        id="left_sidebar_btn" type="submit">
                    <span class="glyphicon glyphicon-envelope"></span>
                </button>


                <nav id="messages"
                     class="panel-group left_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Members (<?php echo $_smarty_tpl->tpl_vars['circle']->value['nusers'];?>
)</strong>
                            <a href="javascript:void(0)" class="left_close_btn hidden-sm hidden-md hidden-lg"
                               onclick="close_left_sidebar()"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            <?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
                                <li class="list-group-item list-group-item-success">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <img src="<?php if ($_smarty_tpl->tpl_vars['member']->value['path']) {?><?php echo $_smarty_tpl->tpl_vars['member']->value['path'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/default_user<?php }?>"
                                                 class="img-responsive" style="width:60px">
                                        </div>
                                        <div class="col-xs-7">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['member']->value['idPerson'];?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['member']->value['last_name'];?>
</a>
                                            <?php if ($_smarty_tpl->tpl_vars['member']->value['idPerson']!=$_smarty_tpl->tpl_vars['ID']->value) {?>
                                                <button class="btn btn-danger">Kick</button>
                                            <?php }?>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div id="right_sidebar" class="col-xs-2 col-xs-offset-8 col-sm-2 col-sm-offset-0 col-sm-push-8">
            <div class="row">

                <button onclick="open_right_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg"
                        id="right_sidebar_btn" type="submit">
                    <span class="glyphicon glyphicon-record"></span>
                </button>


                <nav id="circles"
                     class="panel-group right_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="circles.php"><strong>Your circles</strong></a>
                            <a href="javascript:void(0)" class="right_close_btn hidden-sm hidden-md hidden-lg"
                               onclick="close_right_sidebar()"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            <?php  $_smarty_tpl->tpl_vars['circle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['circle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['circles_aux']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['circle']->key => $_smarty_tpl->tpl_vars['circle']->value) {
$_smarty_tpl->tpl_vars['circle']->_loop = true;
?>
                                <li class="list-group-item">
                                    <img src="<?php if ($_smarty_tpl->tpl_vars['circle']->value['path']) {?><?php echo $_smarty_tpl->tpl_vars['circle']->value['path'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/default_circle<?php }?>"
                                         class="img-responsive img-circle" style="width:60px">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/circle/index.php?id=<?php echo $_smarty_tpl->tpl_vars['circle']->value['idCircle'];?>
"><?php echo $_smarty_tpl->tpl_vars['circle']->value['name'];?>
</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>

            <!--<div class="row hidden-xs">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Suggested</strong></div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="circle.php"> Circle 7 </a>
                            <span class="badge">Knock!</span>
                        </li>
                        <li class="list-group-item">
                            <a href="circle.php"> Circle 8 </a>
                            <span class="badge">Knock!</span>
                        </li>
                        <li class="list-group-item">
                            <a href="circle.php"> Circle 9 </a>
                            <span class="badge">Knock!</span>
                        </li>
                    </ul>
                </div>
            </div>-->

        </div>

        <div id="center" class="col-xs-12 col-sm-8 col-sm-pull-2">
            <div class="row well">
                <div class="col-xs-12">
                    <h2 style="text-align:center; margin-top:0%"><a
                                href="<?php if ($_smarty_tpl->tpl_vars['circle']->value['image']) {?><?php echo $_smarty_tpl->tpl_vars['circle']->value['image'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/default_circle<?php }?>"><?php echo $_smarty_tpl->tpl_vars['circle']->value['name'];?>
</a>
                    </h2>
                </div>
                <div class="col-xs-12 col-sm-5 ">
                    <input type="text" class="form-control" placeholder="Search inside this circle...">
                </div>
                <div class="col-xs-6 col-sm-3">
                    <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="collapse"
                            href="#collapse1">Post
                    </button>
                </div>
                <div class="col-xs-6 col-sm-3 col-sm-offset-1">
                    <div class="dropdown">
                        <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">
                                    <div class="input-group">
										<span class="input-group-btn">
											<button class="btn btn-secondary btn-block"
                                                    type="button"><a>Add to Circle</a></button>
										</span>
                                        <input type="text" class="form-control" placeholder="Search for...">
                                    </div>
                                </a></li>
                            <li>
                                <button class="btn btn-secondary btn-block" type="button"><a>Report Circle</a></button>
                            </li>
                            <li>
                                <form id="leave_circle_form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/circle/leave.php" method="post">
                                    <input type="hidden" name="idCircle" value="<?php echo $_smarty_tpl->tpl_vars['idCircle']->value;?>
">
                                    <button class="btn btn-secondary btn-block" type="submit">Leave Circle</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="collapse1" class="panel-collapse collapse">
                    <form id="create_circle_form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/circle/create_post.php" method="post"
                          enctype="multipart/form-data">
                        <input type="hidden" name="idCircle" value="<?php echo $_smarty_tpl->tpl_vars['idCircle']->value;?>
">
                        <textarea placeholder="Post here..." class="form-control" rows="3" name="content"></textarea>
                        <input type="file" class="btn btn-default btn-block" name="post_photo">Upload new photo</input>
                        <button type="submit" class="btn btn-default btn-block">Post</button>
                    </form>
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
                            <button type="button" class="btn btn-success"><span
                                        class="glyphicon glyphicon-arrow-up"></span>
                            </button>
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
                                <button type="button" class="add_comment btn btn-default btn-block" value="lol">Post your comment</button>
                                <input type="hidden" class="idPost" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['idPost'];?>
">
                            </div>
                        </div>
                    </div>
                    <div class="load_comments col-xs-12 col-sm-12">
                        <button type="button" class="btn btn-primary btn-block">Comments</button>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
