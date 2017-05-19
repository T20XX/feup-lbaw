{include file='admin/header.tpl'}

<div class="container">
    <div class="row jumbotron text-center">
      {foreach $users as $user}
      <li class="list-group-item list-group-item-success">
        <img src="{if $path}{$path}{else}{$BASE_URL}images/default_user{/if}"  class="img-responsive img-circle" style="width:60px">
          <a href="{$BASE_URL}/pages/user/profile.php?id={$user.idPerson}">{$user.first_name} {$user.last_name}</a>
      </li>
      {/foreach}
    </div>
</div>


{include file='admin/footer.tpl'}
