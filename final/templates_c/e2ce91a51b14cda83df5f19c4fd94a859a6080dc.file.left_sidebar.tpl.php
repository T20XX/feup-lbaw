<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 05:19:32
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/common/left_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251684400592ba1544e95a7-15518715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ce91a51b14cda83df5f19c4fd94a859a6080dc' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/final/templates/common/left_sidebar.tpl',
      1 => 1496017739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251684400592ba1544e95a7-15518715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'recentMessagesUsers_aux' => 0,
    'recentMessagesUser' => 0,
    'invites_aux' => 0,
    'invite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592ba154592195_67611836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592ba154592195_67611836')) {function content_592ba154592195_67611836($_smarty_tpl) {?><div id="left_sidebar" class="col-xs-2 col-sm-2">
    <div class="row">
        <button onclick="open_left_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg"
                id="left_sidebar_btn" type="submit">
            <span class="glyphicon glyphicon-envelope"></span>
        </button>


        <nav id="messages"
             class="panel-group left_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/messages.php"><strong>Messages</strong></a>
                    <a href="javascript:void(0)" class="left_close_btn hidden-sm hidden-md hidden-lg"
                       onclick="close_left_sidebar()"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                <ul class="list-group">
                    <?php  $_smarty_tpl->tpl_vars['recentMessagesUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recentMessagesUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recentMessagesUsers_aux']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recentMessagesUser']->key => $_smarty_tpl->tpl_vars['recentMessagesUser']->value) {
$_smarty_tpl->tpl_vars['recentMessagesUser']->_loop = true;
?>
                        <li class="list-group-item">
                            <img src="<?php if ($_smarty_tpl->tpl_vars['recentMessagesUser']->value['path']) {?><?php echo $_smarty_tpl->tpl_vars['recentMessagesUser']->value['path'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/default_user<?php }?>"
                                 class="img-responsive img-circle" style="width:60px">
                            <a href="messages.php?id=<?php echo $_smarty_tpl->tpl_vars['recentMessagesUser']->value['sender'];?>
"><?php echo $_smarty_tpl->tpl_vars['recentMessagesUser']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['recentMessagesUser']->value['last_name'];?>
</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>

    <div class="row hidden-xs">
        <div class="panel panel-default">
            <div class="panel-heading"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/invites.php"><strong>Invites</strong></a></div>
            <ul class="list-group">
                <?php  $_smarty_tpl->tpl_vars['invite'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invite']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['invites_aux']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['invite']->key => $_smarty_tpl->tpl_vars['invite']->value) {
$_smarty_tpl->tpl_vars['invite']->_loop = true;
?>
                    <li class="list-group-item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/index.php?id=<?php echo $_smarty_tpl->tpl_vars['invite']->value['idPerson'];?>
"> <?php echo $_smarty_tpl->tpl_vars['invite']->value['first_name'];?>
 </a>
                        <small><i>Invited you to:</i></small>
                        <img src="<?php if ($_smarty_tpl->tpl_vars['invite']->value['path']) {?><?php echo $_smarty_tpl->tpl_vars['invite']->value['path'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/default_circle<?php }?>"
                             class="img-responsive img-circle" style="width:60px">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/circle/index.php?id=<?php echo $_smarty_tpl->tpl_vars['invite']->value['idCircle'];?>
"> <?php echo $_smarty_tpl->tpl_vars['invite']->value['name'];?>
 </a>
                        <div class="row">
                            <div class="col-xs-6">
                                <form id="accept_invite" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/user/accept_invite.php"
                                      method="post">
                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['invite']->value['idInvite'];?>
" name="idInvite">
                                    <button type="submit" class="badge" style="background-color:#d9d9d9"><span class="glyphicon glyphicon-ok"></span>
                                        <p><span style="color:green"><?php echo $_smarty_tpl->tpl_vars['invite']->value['upvotes'];?>
</span></p></button>
                                </form>
                            </div>
                            <div class="col-xs-6">
                                <form id="remove_invite" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/user/remove_invite.php"
                                      method="post">
                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['invite']->value['idInvite'];?>
" name="idInvite">
                                    <button type="submit" class="badge" style="background-color:#d9d9d9"><span class="glyphicon glyphicon-remove"></span>
                                        <p><span style="color:red"><?php echo $_smarty_tpl->tpl_vars['invite']->value['downvotes'];?>
</span></p></button>
                                </form>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div><?php }} ?>
