{include file='admin/header.tpl'}

<div class="container">
    <div class="row jumbotron text-center">
      {foreach $circles as $circle}
      <li class="list-group-item list-group-item-success">
        <img src="{if $path}{$path}{else}{$BASE_URL}images/default_user{/if}"  class="img-responsive img-circle" style="width:60px">
          <a href="../circle/index.php?id={$circle.idCircle}">{$circle.name} : {$circle.nusers}</a>
      </li>
      {/foreach}
    </div>
</div>


{include file='admin/footer.tpl'}
