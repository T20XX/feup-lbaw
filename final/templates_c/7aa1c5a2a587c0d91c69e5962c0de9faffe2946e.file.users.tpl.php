<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 05:11:59
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/admin/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1324486751592b9f8f891554-10737717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aa1c5a2a587c0d91c69e5962c0de9faffe2946e' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/final/templates/admin/users.tpl',
      1 => 1495769995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1324486751592b9f8f891554-10737717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592b9f8fa66a07_19886107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592b9f8fa66a07_19886107')) {function content_592b9f8fa66a07_19886107($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
  <div class="row" style="margin-top: 2%;">
    <div class="col-xs-12 col-sm-6 col-sm-push-6">
      <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/users.php" method="GET">
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
pages/admin/users.php?reported=true" type="button" class="btn btn-block btn-danger">Reports</a>
    </div>
  </div>

  <div class="row" style="margin-top: 2%;">
    <div class="col-xs-12">
      <div class="table-responsive">


        <table id="mytable" class="table table-striped table-hover">

          <thead>

            <th>Name</th>
            <th>Email</th>
            <th>Bio</th>
            <th>Ban</th>
          </thead>
          <tbody>
            <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
            <tr>
              <td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['idPerson'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</a></td>
              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
              <td><button class="open-showBio btn btn-primary btn-xs" data-title="Edit" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value['bio'];?>
" data-toggle="modal" data-target="#showBio" ><span class="glyphicon glyphicon-eye-open"></span></button></td>
              <?php if ($_smarty_tpl->tpl_vars['user']->value['banned']) {?>
              <td><button class="showBanReason btn btn-danger btn-xs" data-title="Ban Reason" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value['ban_reason'];?>
" data-toggle="modal" data-target="#ban_reason" ><span class="glyphicon glyphicon-eye-open"></span></button></td>
              <?php } else { ?>
              <td><button class="delete btn btn-danger btn-xs" data-title="Delete" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value['idPerson'];?>
" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
              <?php }?>
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
        <input type="hidden" name="idUser" id="idUser">
        <div class="modal-body">
          <div class="alert alert-danger">
            <p><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to ban this user?</p>
            <p>Explain the reason to inform the user.</p>
          </div>
          <div class="form-group">
            <label for="comment">Reason:</label>
            <textarea class="form-control" rows="5" id="reason"></textarea>
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

<div class="modal fade" id="showBio" tabindex="-1" role="dialog" aria-labelledby="showBio" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Bio</h4>
      </div>
      <div class="modal-body" id="showBio-body">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ban_reason" tabindex="-1" role="dialog" aria-labelledby="BanReason" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Ban Reason</h4>
      </div>
      <div class="modal-body" id="showBanReason">
      </div>
    </div>
  </div>
</div>




<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
