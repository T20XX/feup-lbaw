<?php /* Smarty version Smarty-3.1.15, created on 2017-04-16 02:50:06
         compiled from "/opt/lbaw/lbaw1632/public_html/proto/templates/auth/homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118543494358f2cdce5deeb6-10899280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96f05eb1d712da72e5c2a139ad80aa092929c473' => 
    array (
      0 => '/opt/lbaw/lbaw1632/public_html/proto/templates/auth/homepage.tpl',
      1 => 1492290241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118543494358f2cdce5deeb6-10899280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f2cdce756163_85726219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f2cdce756163_85726219')) {function content_58f2cdce756163_85726219($_smarty_tpl) {?><html>
<meta charset="utf-8">
<meta name="viewport" content="width = device-width, initial-scale = 1">

<title>MeetTheCircle</title>

<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/auth/homepage.js"></script>

<head>
    <style>
        #title{
            font-size: 16px;
            font-size: 4vw;
            vertical-align: middle;
            font-family: 'Pacifico', cursive;
            color: #191970;
            word-wrap: break-word;
        }

        .img-responsive {
            margin: 0 auto;
        }

        .font-pacifico{
            font-family: 'Pacifico', cursive;
        }

        .well{
            background-color: #2E2D88;
            color: white;
        }
    </style>
</head>

<body style="background-color: #eaecf4;">

<div class="container">

    <div class="row">
        <div class="col-sm-2" id="img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/logo.png" id="Logo" class="img-responsive" alt="Network Logo">
        </div>
        <div class="col-sm-5 text-center">
            <span id="title">MeetTheCircle</span>
        </div>

        <div id="login">
            <form  id="login_form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/auth/login.php" method="post">
                <div class="col-sm-3">
                    <div id="inputs">
                        <div  class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="email" type="text" class="form-control" placeholder="Email">
                        </div><br>
                        <div  class="input-group input-group-lg" >
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div><br>
                    </div>
                </div>
                <div class="col-sm-2">
                    <button  id="button" type="submit" class="btn btn-warning btn-lg btn-block font-pacifico">Login</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div id="page-face" class="well col-sm-6 hidden-xs" >
            <h1 id="page-face-text">Discuss your interests inside the privacy of your circle.</h1>
            <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/friendship.png" id="page-face-img" class="img-responsive" alt="Friendship">
        </div>


        <div id="signup" class="col-sm-6 text-center">
            <button id="signup_btn" class="btn btn-warning btn-lg btn-block font-pacifico hidden-sm hidden-md hidden-lg">Create New Account</button><br>
            <span id="create" class="hidden-xs font-pacifico"  style="color:#191970;">Create New Account</span>
            <form id="signup_form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/auth/register.php"  method="post">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">First name</span>
                    <input name="first_name" type="text" class="form-control" placeholder="First name">
                </div><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">Last name</span>
                    <input name="last_name" type="text" class="form-control" placeholder="Last name">
                </div><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">Email</span>
                    <input name="email" type="text" class="form-control" placeholder="Email">
                </div><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">Password</span>
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </div><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">Password confirmation</span>
                    <input name="password2" type="password" class="form-control" placeholder="Password confirmation">
                </div><br>
                <button type="submit" class="btn btn-warning btn-lg btn-block font-pacifico">Register</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php }} ?>
