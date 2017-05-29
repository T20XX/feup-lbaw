<!DOCTYPE html>
<html>
<head>
    <title>{if ($title)}{$title}{else}Meet The Circle{/if}</title>
    <link rel="icon" href="{$BASE_URL}images/logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$BASE_URL}css/common/aux_header.css">
    <link rel="stylesheet" href="{$BASE_URL}css/common/header.css">
    <link rel="stylesheet" href="{$cssPath}">
    <link rel="stylesheet" href="{$BASE_URL}css/common/footer.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{$BASE_URL}javascript/main.js"></script>
    <script src="{$jsPath}"></script>
    <!-- Suggest search -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script src="{$BASE_URL}javascript/common/header.js"></script>
    <script src="{$BASE_URL}javascript/circle/post.js"></script>
    <script src="{$BASE_URL}javascript/circle/searchinvites.js"></script>





    <style>
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header col-sm-3 hidden-xs">
                <a class="navbar-brand" href="{$BASE_URL}pages/user/feed.php">
                    <img src="{$BASE_URL}images/logo.png" class="img-responsive hidden-xs">
                </a>
            </div>
            <ul class="nav navbar-nav col-xs-9 col-sm-6">
                <li><a href="{$BASE_URL}pages/user/feed.php"><span id="title">MeetTheCircle</span></a></li>
            </ul>
            <div class="search nav-content col-sm-3 hidden-xs">
                <div class="input-group">
                    <input id="schbar" type="text" class="form-control" placeholder="Search">
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
    {include file='common/aux_header.tpl'}
</header>
<main>