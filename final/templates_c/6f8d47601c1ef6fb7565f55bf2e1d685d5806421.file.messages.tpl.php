<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 10:57:51
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/user/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:611149196592bf09f1ab684-45182478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f8d47601c1ef6fb7565f55bf2e1d685d5806421' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/final/templates/user/messages.tpl',
      1 => 1495763977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '611149196592bf09f1ab684-45182478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recentMessagesUsers' => 0,
    'recentMessagesUser' => 0,
    'BASE_URL' => 0,
    'receiver' => 0,
    'receiver_image' => 0,
    'receiver_info' => 0,
    'messages' => 0,
    'message' => 0,
    'ID' => 0,
    'sender' => 0,
    'lastMessageId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592bf09f3eefa2_99294534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592bf09f3eefa2_99294534')) {function content_592bf09f3eefa2_99294534($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                            <strong>Recent messages</strong>
                            <a href="javascript:void(0)" class="closebtn hidden-sm hidden-md hidden-lg" onclick="close_left_sidebar()"><span
                                        class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            <?php  $_smarty_tpl->tpl_vars['recentMessagesUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recentMessagesUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recentMessagesUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recentMessagesUser']->key => $_smarty_tpl->tpl_vars['recentMessagesUser']->value) {
$_smarty_tpl->tpl_vars['recentMessagesUser']->_loop = true;
?>
                            <li class="list-group-item list-group-item-success">
                                <img src="<?php if ($_smarty_tpl->tpl_vars['recentMessagesUser']->value['path']) {?><?php echo $_smarty_tpl->tpl_vars['recentMessagesUser']->value['path'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/default_user<?php }?>"  class="img-responsive img-circle" style="width:60px">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/messages.php?id=<?php echo $_smarty_tpl->tpl_vars['recentMessagesUser']->value['sender'];?>
"><?php echo $_smarty_tpl->tpl_vars['recentMessagesUser']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['recentMessagesUser']->value['last_name'];?>
</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div id="center" class="col-xs-12 col-sm-9">
            <div class="row">
                <?php if ($_smarty_tpl->tpl_vars['receiver']->value) {?>
                <div class="col-xs-1 col-xs-offset-5"><img src="<?php if ($_smarty_tpl->tpl_vars['receiver_image']->value) {?><?php echo $_smarty_tpl->tpl_vars['receiver_image']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/default_user<?php }?>" class="img-responsive img-circle" style="width:60px"></div>
                    <div class="col-xs-6"><h4><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['receiver_info']->value['idPerson'];?>
"><?php echo $_smarty_tpl->tpl_vars['receiver_info']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['receiver_info']->value['last_name'];?>
</a></h4></div>
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
                <?php } else { ?>
                    <div class="col-xs-12"><h4><?php if ($_smarty_tpl->tpl_vars['recentMessagesUsers']->value) {?>Select one user from a recent conversation...<?php } else { ?>Search for a user to start a converstion...<?php }?></h4></div>
                <?php }?>
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
