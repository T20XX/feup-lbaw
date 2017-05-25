<div id="right_sidebar" class="col-xs-2 col-xs-offset-8 col-sm-2 col-sm-offset-0 col-sm-push-8">
    <div class="row">

        <button onclick="open_right_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg"
                id="left_sidebar_btn" type="submit">
            <span class="glyphicon glyphicon-record"></span>
        </button>


        <nav id="circles"
             class="panel-group right_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="circles.php"><strong>Your circles</strong></a>
                    <a href="javascript:void(0)" class="closebtn hidden-sm hidden-md hidden-lg"
                       onclick="close_right_sidebar()"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                <ul class="list-group">
                    {foreach $circles_aux as $circle}
                        <li class="list-group-item">
                            <img src="{if $circle.path}{$circle.path}{else}{$BASE_URL}images/default_circle{/if}"  class="img-responsive img-circle" style="width:60px">
                            <a href="{$BASE_URL}pages/circle/index.php?id={$circle.idCircle}">{$circle.name}</a>
                        </li>
                    {/foreach}
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

</div>