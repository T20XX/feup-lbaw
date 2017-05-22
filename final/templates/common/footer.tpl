</main>
<footer>
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> {$NAME}</a></li>
                    <li><a href="messages.php"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
                    <li><a href="invites.php"><span class="glyphicon glyphicon-log-in"></span> Invites</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{$BASE_URL}actions/auth/logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
                </ul>
            </div>
        </div>
    </nav>
</footer>
</body>
</html>