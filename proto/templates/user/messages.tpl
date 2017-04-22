{include file='common/header.tpl'}
<div class="container">
    <div class="row">
        <div id="left_sidebar" class="col-xs-2 col-sm-3">
            <div class="row">
                <button onclick="open_left_sidebar()" class="btn btn-default btn-block hidden-sm hidden-md hidden-lg" id="left_sidebar_btn"
                        type="submit">
                    <span class="glyphicon glyphicon-user"></span>
                </button>


                <nav id="members" class="panel-group left_sidebar hidden-xs visible-sm-block visible-md-block visible-lg-block">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <strong>Members</strong>
                            <a href="javascript:void(0)" class="closebtn hidden-sm hidden-md hidden-lg" onclick="close_left_sidebar()"><span
                                        class="glyphicon glyphicon-remove"></span></a>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success">
                                <img src="../res/logo.png" class="img-responsive">
                                <a href="messages.php">Member 1</a>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                <a href="messages.php">Member 2</a>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                <a href="messages.php">Member 3</a>
                            </li>
                            <li class="list-group-item list-group-item-success">
                                <a href="messages.php">Member 4</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div id="center" class="col-xs-12 col-sm-9">
            <div class="row">
                <div class="col-xs-1 col-xs-offset-5"><img src="../res/user.png" class="img-responsive"style="width:60px"></div>
                <div class="col-xs-6"><h4>User1</h4></div>
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body" style="max-height:380px;overflow-y:scroll;">
                            {foreach $messages as $messages}
                                <div class="col-xs-10 col-sm-7 {if $message.sender == $ID}col-xs-offset-2 col-sm-offset-5{/if}">
                                    <div class="panel {if $message.sender == $ID}panel-primary{else}panel-default{/if}">
                                        <div class="panel-heading">Nulla vel metus scelerisque ante sollicitudin.</div>
                                    </div>
                                </div>
                                {/foreach}
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="input-group">
                        <textarea class="form-control custom-control" rows="3"></textarea>
                        <span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-picture"></span></span>
                        <span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-right"></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{include file='common/footer.tpl'}