
{include file='common/header.tpl'}

<div class="container">
    <div class="row">

        {include file='common/left_sidebar.tpl'}
        {include file='common/right_sidebar.tpl'}

        <div id="center" class="col-xs-12 col-sm-8 col-sm-pull-2">
            <div class="row well">
                <div class="col-xs-12">
                </div>
                <div class="col-xs-12 col-sm-5 ">
                    <input type="text" class="form-control" placeholder="Search inside this circle...">
                </div>
                <div class="col-xs-6 col-sm-3">
                    <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="collapse" href="#collapse1">Post</button>
                </div>
                <div class="col-xs-6 col-sm-3 col-sm-offset-1">
                    <div class="dropdown">
                        <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">
                                    <div class="input-group">
										<span class="input-group-btn">
											<button class="btn btn-secondary btn-block" type="button"><a>Add to Circle</a></button>
										</span>
                                        <input type="text" class="form-control" placeholder="Search for...">
                                    </div>
                                </a></li>
                            <li><button class="btn btn-secondary btn-block" type="button"><a>Report Circle</a></button></li>
                            <li><button class="btn btn-secondarY  btn-block" type="button"><a>Leave Circle</a></button></li>
                        </ul>
                    </div>
                </div>
            </div>
			
            <div class="row">
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <textarea placeholder="Post here..." class="form-control" rows="3" id="comment"></textarea>
                            <button type="button" class="btn btn-default btn-block">Upload new photo</button>
                            <button type="button" class="btn btn-default btn-block">Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{include file='common/footer.tpl'}
