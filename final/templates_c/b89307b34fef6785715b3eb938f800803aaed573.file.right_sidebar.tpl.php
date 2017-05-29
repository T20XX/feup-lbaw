<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 05:19:32
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/common/right_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:743091951592ba154597258-97183310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b89307b34fef6785715b3eb938f800803aaed573' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/final/templates/common/right_sidebar.tpl',
      1 => 1495755488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '743091951592ba154597258-97183310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'circles_aux' => 0,
    'circle' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592ba1545ca5d8_46034918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592ba1545ca5d8_46034918')) {function content_592ba1545ca5d8_46034918($_smarty_tpl) {?><div id="right_sidebar" class="col-xs-2 col-xs-offset-8 col-sm-2 col-sm-offset-0 col-sm-push-8">
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
images/default_circle<?php }?>"  class="img-responsive img-circle" style="width:60px">
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

</div><?php }} ?>
