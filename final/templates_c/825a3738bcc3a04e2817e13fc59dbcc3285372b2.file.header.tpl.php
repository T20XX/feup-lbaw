<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 04:16:07
         compiled from "/opt/lbaw/lbaw1632/public_html/final/templates/admin/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67538845359195f23d42f73-97781456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '825a3738bcc3a04e2817e13fc59dbcc3285372b2' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/final/templates/admin/header.tpl',
      1 => 1495746544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67538845359195f23d42f73-97781456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59195f23d62188_69479799',
  'variables' => 
  array (
    'title' => 0,
    'BASE_URL' => 0,
    'cssPath' => 0,
    'jsPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59195f23d62188_69479799')) {function content_59195f23d62188_69479799($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title><?php if (($_smarty_tpl->tpl_vars['title']->value)) {?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php } else { ?>Meet The Circle (Admin)<?php }?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"><link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/admin/header.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/admin/footer.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
"></script>
</head>
<body>
<header>

</header>
<main><?php }} ?>
