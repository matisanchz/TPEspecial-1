{include file="header.tpl"}

<h1 class="font-heading">Showing {$count} Classes</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
      <th scope="col">Features</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$classes item=$class}
      <tr>
        <a class="link" href='Subclass/list/{$class->name}' hidden>{$class->id_class}</a>
      </tr>
      <tr class="list">
        <td>{$class->name}</td>
        <td>{$class->author}</td>
        <td>{$class->features}</td>
        {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
          <td class="d-flex p-2">
            <a href='Class/form/edit/{$class->id_class}' type='button' class='btn btn-success me-1'><img src="./img/edit.png" alt="Logo" width="25" height="25"></a>    
            <a href='Class/confirm-delete/{$class->id_class}' type='button' class='btn btn-danger'><img src="./img/delete.png" alt="Logo" width="25" height="25"></a>
          </td>
        {/if}
        
      </tr>
    {/foreach}
  </tbody>
</table>

<button type="submit" class="btn btn-info back-list">Back</button>

<a href='' type='button' class='btn btn-info '>Home</a>

{if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
  <a href='Class/form/add' type='button' class='btn btn-info float-end me-3'>Add</a>
{/if}

{include file="footer.tpl"}
