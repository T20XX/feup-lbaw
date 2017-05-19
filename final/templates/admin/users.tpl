{include file='admin/header.tpl'}

<div class="container">
    <div class="row jumbotron text-center">
      {foreach $users as $user}
      <li class="list-group-item list-group-item-success">
          <span>{$user.first_name} {$user.last_name}</span>
      </li>
      {/foreach}
    </div>
</div>

{include file='admin/footer.tpl'}
