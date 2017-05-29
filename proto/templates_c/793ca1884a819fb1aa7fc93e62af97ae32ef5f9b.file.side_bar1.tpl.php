<?php /* Smarty version Smarty-3.1.15, created on 2017-04-17 01:08:27
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/common/side_bar1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22062870658f4077b113831-79434035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '793ca1884a819fb1aa7fc93e62af97ae32ef5f9b' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/common/side_bar1.tpl',
      1 => 1492387694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22062870658f4077b113831-79434035',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f4077b119311_37570056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f4077b119311_37570056')) {function content_58f4077b119311_37570056($_smarty_tpl) {?><div id="left_sidebar" class="col-xs-2 col-sm-2">
            <div class="row">
                <button onclick="open_left_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg" id="left_sidebar_btn" type="submit">
                    <span class="glyphicon glyphicon-envelope"></span>
                </button>


                <nav id="messages" class="panel-group left_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <a href="messages.php"><strong>Messages</strong></a>
                            <a href="javascript:void(0)" class="closebtn hidden-sm hidden-md hidden-lg" onclick="close_left_sidebar()"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <img src="../res/logo.png" class="img-responsive">
                                <a href="profile.php"> Member 1 </a>
                                <span class="badge">14</span>
                            </li>
                            <li class="list-group-item">
                                <a href="profile.php"> Member 2 </a>
                            </li>
                            <li class="list-group-item">
                                <a href="profile.php"> Member 3 </a>
                                <span class="badge">33</span>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="row hidden-xs">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="invites.php"><strong>Invites</strong></a></div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="circle.php"> Circle 1 </a>
                            <span class="badge"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                        </li>
                        <li class="list-group-item">
                            <a href="circle.php"> Circle 2 </a>
                            <span class="badge"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                        </li>
                        <li class="list-group-item">
                            <a href="circle.php"> Circle 3 </a>
                            <span class="badge"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="badge"><span class="glyphicon glyphicon-ok"></span></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div><?php }} ?>
