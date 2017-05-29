<?php /* Smarty version Smarty-3.1.15, created on 2017-04-23 00:07:12
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142301831558f2cb955c8326-23577428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cea0958636563bd8ac4d4a2fc3fffd52dad8e0b6' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/common/header.tpl',
      1 => 1492902428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142301831558f2cb955c8326-23577428',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f2cb955ec768_52645208',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'cssPath' => 0,
    'jsPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f2cb955ec768_52645208')) {function content_58f2cb955ec768_52645208($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>MeetTheCircle</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"><link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/common/header.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/common/footer.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/main.js"></script>
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
    <?php echo $_smarty_tpl->getSubTemplate ('common/aux_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</header>
<main><?php }} ?>
