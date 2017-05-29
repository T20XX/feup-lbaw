<?php /* Smarty version Smarty-3.1.15, created on 2017-04-23 02:57:49
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/user/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121005095158fbb3f2298a50-60062348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b7170b768c8328c393fc23ad1718e8c77b1c780' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/user/messages.tpl',
      1 => 1492912666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121005095158fbb3f2298a50-60062348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fbb3f243ebd8_94675281',
  'variables' => 
  array (
    'messages' => 0,
    'message' => 0,
    'ID' => 0,
    'sender' => 0,
    'receiver' => 0,
    'lastMessageId' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fbb3f243ebd8_94675281')) {function content_58fbb3f243ebd8_94675281($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container">
    <div class="row">
        <div id="left_sidebar" class="col-xs-2 col-sm-3">
            <div class="row">
                <button onclick="open_left_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg" id="left_sidebar_btn"
                        type="submit">
                    <span class="glyphicon glyphicon-user"></span>
                </button>


                <nav id="members" class="panel-group left_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <strong>Members</strong>
                            <a href="javascript:void(0)" class="closebtn hidden-sm hidden-md hidden-lg" onclick="close_left_sidebar()"><span
                                        class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success">
                                <img src="../res/logo.png" class="img-responsive">
                                <a href="messages.php">Member 1</a>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                <a href="messages.php">Member 2</a>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                <a href="messages.php">Member 3</a>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                <a href="messages.php">Member 4</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div id="center" class="col-xs-12 col-sm-9">
            <div class="row">
                <div class="col-xs-1 col-xs-offset-5"><img src="../res/user.png" class="img-responsive"style="width:60px"></div>
                <div class="col-xs-6"><h4>User1</h4></div>
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div id="messages" class="panel-body" style="max-height:380px;overflow:auto;">
                            <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                                <div class="message-data col-xs-10 col-sm-7 <?php if ($_smarty_tpl->tpl_vars['message']->value['sender']==$_smarty_tpl->tpl_vars['ID']->value) {?>col-xs-offset-2 col-sm-offset-5<?php }?>">
                                    <div class="panel <?php if ($_smarty_tpl->tpl_vars['message']->value['sender']==$_smarty_tpl->tpl_vars['ID']->value) {?>panel-primary<?php } else { ?>panel-default<?php }?>">
                                        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['message']->value['content'];?>
</div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="input-group">
                        <textarea id="send_content" class="form-control custom-control" rows="3"></textarea>
                        <span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-picture"></span></span>
                        <span id="send_btn" class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-right"></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>sender = <?php echo $_smarty_tpl->tpl_vars['sender']->value;?>
</script>
<script>receiver = <?php echo $_smarty_tpl->tpl_vars['receiver']->value;?>
</script>
<script>lastMessageId = <?php echo $_smarty_tpl->tpl_vars['lastMessageId']->value;?>
</script>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/user/messages.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
