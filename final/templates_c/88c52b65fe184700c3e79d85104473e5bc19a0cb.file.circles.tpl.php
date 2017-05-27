<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 05:23:15
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/admin/circles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1998307540591e66e980c812-14758541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c52b65fe184700c3e79d85104473e5bc19a0cb' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/final/templates/admin/circles.tpl',
      1 => 1495772576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1998307540591e66e980c812-14758541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_591e66e99d2938_89983136',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'circles' => 0,
    'circle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591e66e99d2938_89983136')) {function content_591e66e99d2938_89983136($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
    <div class="row" style="margin-top: 2%;">
        <div class="col-xs-12 col-sm-6 col-sm-push-6">
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/circles.php" method="GET">
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
pages/admin/circles.php?reported=true" type="button" class="btn btn-block btn-danger">Reports</a>
        </div>
    </div>

    <div class="row" style="margin-top: 2%;">
        <div class="col-xs-12">
            <div class="table-responsive">


                <table id="mytable" class="table table-striped table-hover">

                    <thead>

                    <th>Name</th>
                    <th>Users</th>
                    <th>Posts</th>
                    <th>Visit</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['circle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['circle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['circles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['circle']->key => $_smarty_tpl->tpl_vars['circle']->value) {
$_smarty_tpl->tpl_vars['circle']->_loop = true;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['circle']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['circle']->value['nUsers'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['circle']->value['nPosts'];?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/circle/index.php?id=<?php echo $_smarty_tpl->tpl_vars['circle']->value['idPerson'];?>
" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                            <td><button class="delete btn btn-danger btn-xs" data-title="Delete" data-id="<?php echo $_smarty_tpl->tpl_vars['circle']->value['idCircle'];?>
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
                <h4 class="modal-title custom_align" id="Heading">Ban user</h4>
            </div>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/ban_remove.php">
                <input type="hidden" name="idCircle" id="idCircle">
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <p><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this circle?</p>
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
