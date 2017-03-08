<!DOCTYPE html>
<html>
<head>
    <title>MeetTheCircle</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"><link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="<?=$cssPath?>">
    <link rel="stylesheet" href="../css/footer.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?=$jsPath?>"></script>
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

        .navbar-brand {
            padding: 0px;
        }
        .navbar-brand>img {
            height: 100%;
            padding: 2px;
            width: auto;
        }

    </style>
</head>
<body>
<header>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header col-sm-3 hidden-xs">
                <a class="navbar-brand" href="feed.php">
                    <img src="../res/logo.png" class="img-responsive hidden-xs">
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
</header>
<main>