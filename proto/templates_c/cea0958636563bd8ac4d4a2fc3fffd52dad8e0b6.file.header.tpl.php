<?php /* Smarty version Smarty-3.1.15, created on 2017-04-15 16:15:20
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188896999758f018e3cae057-82371124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cea0958636563bd8ac4d4a2fc3fffd52dad8e0b6' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/common/header.tpl',
      1 => 1492269317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188896999758f018e3cae057-82371124',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f018e3ce3f44_09557906',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'cssPath' => 0,
    'jsPath' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f018e3ce3f44_09557906')) {function content_58f018e3ce3f44_09557906($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>MeetTheCircle</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"><link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/header.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/footer.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
"></script>
    <style>

    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header col-sm-3 hidden-xs">
                <a class="navbar-brand" href="feed.php">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/logo.png" class="img-responsive hidden-xs">
                </a>
            </div>
            <ul class="nav navbar-nav col-xs-9 col-sm-6">
                <li><a href="feed.php"><span id="title">MeetTheCircle</span></a></li>
            </ul>
            <div class="search nav-content col-sm-3 hidden-xs">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" id="search-btn" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="search nav-content col-xs-3 hidden-sm hidden-md hidden-lg">
                        <button class="btn btn-default" id="search-btn" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
            </div>
        </div>
    </nav>
    <div id="error_messages">
        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
            <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#">X</a></div>
        <?php } ?>
    </div>
    <div id="success_messages">
        <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
            <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href="#">X</a></div>
        <?php } ?>
    </div>
</header>
<main><?php }} ?>
