<link rel="stylesheet" href="css/header.less"></link>

<ul>
  <li><a href="/?page=home">Home</a></li>
  <li><a href="/?page=search">Search</a></li>
  {if isset($smarty.session) && isset($smarty.session.user) && isset($smarty.session.user[0]['email'])} 
    <li><a href="/?page=login">Se connecter</a></li>
  {else}
    <li><a href="/?page=profile">Profile</a></li>
  {/if}
  {if isset($smarty.session) && isset($smarty.session.user) && isset($smarty.session.user[0]['email'])} 
    
  {else}
    <li>{$smarty.session.user[0]['email']}</li>
  {/if}
</ul>