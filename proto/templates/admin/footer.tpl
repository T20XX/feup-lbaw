</main>
<footer>
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Admin Panel</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="users.php"><span class="glyphicon glyphicon-user"></span> Users</a></li>
                    <li><a href="circles.php"><span class="glyphicon glyphicon-record"></span> Circles</a></li>
                    <li><a href="posts.php"><span class="glyphicon glyphicon-file"></span> Posts</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{$BASE_URL}actions/auth/logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</footer>
</body>
</html>