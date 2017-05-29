<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 04:58:55
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/admin/posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1965462215592b8e70208a17-42780767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12582bb43af6a4d3ebf2a3250a3cdb3a3fd42aaf' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/final/templates/admin/posts.tpl',
      1 => 1496030273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1965462215592b8e70208a17-42780767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592b8e703c1f51_31608998',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592b8e703c1f51_31608998')) {function content_592b8e703c1f51_31608998($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
    <div class="row" style="margin-top: 2%;">
        <div class="col-xs-12 col-sm-6 col-sm-push-6">
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/posts.php" method="GET">
                <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/posts.php?reported=true" type="button" class="btn btn-block btn-danger">Reports</a>
        </div>
    </div>

    <div class="row" style="margin-top: 2%;">
        <div class="col-xs-12">
            <div class="table-responsive">


                <table id="mytable" class="table table-striped table-hover">

                    <thead>

                    <th>Poster Name</th>
                    <th>Date</th>
                    <th>UpVotes</th>
                    <th>View Content</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['last_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value['upvotes'];?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/circle/index.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['idCircle'];?>
&post=<?php echo $_smarty_tpl->tpl_vars['post']->value['idPost'];?>
" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                            <td><button class="delete btn btn-danger btn-xs" data-title="Delete" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['idPost'];?>
" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

                <div class="clearfix"></div>
                <ul class="pagination pull-right">
                    <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                </ul>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete Circle</h4>
            </div>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/ban_remove.php">
                <input type="hidden" name="idPost" id="idPost">
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <p><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this post?</p>
                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                </div>
            </form>
        </div>
        <div class="col-xs-12">
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
