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
                {if $messages}
                <div class="col-xs-1 col-xs-offset-5"><img src="../res/user.png" class="img-responsive"style="width:60px"></div>
                <div class="col-xs-6"><h4>User1</h4></div>
                <div class="col-xs-12">
                    <div class="panel panel-default">
                            <div id="messages" class="panel-body" style="max-height:380px;overflow:auto;">
                                {foreach $messages as $message}
                                    <div class="message-data col-xs-10 col-sm-7 {if $message.sender == $ID}col-xs-offset-2 col-sm-offset-5{/if}">
                                        <div class="panel {if $message.sender == $ID}panel-primary{else}panel-default{/if}">
                                            <div class="panel-heading">{$message.content}</div>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="input-group">
                        <textarea id="send_content" class="form-control custom-control" rows="3"></textarea>
                        <span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-picture"></span></span>
                        <span id="send_btn" class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-right"></span></span>
                    </div>
                </div>
                {else}
                    <div class="col-xs-12"><h4>Select one user to start a conversation...</h4></div>
                {/if}
            </div>
        </div>
    </div>
</div>


<script>sender = {$sender}</script>
<script>receiver = {$receiver}</script>
<script>lastMessageId = {$lastMessageId}</script>

<script src="{$BASE_URL}javascript/user/messages.js"></script>

{include file='common/footer.tpl'}
