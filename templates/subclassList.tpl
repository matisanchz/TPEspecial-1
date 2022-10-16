{include file="header.tpl"}

{if isset($subclasses[0]->ClassName)}
  <h1>Showing {$count} Subclasses from {$subclasses[0]->ClassName} Class</h1>
{else}
  <h1>Showing all Subclasses</h1>
{/if}


<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$subclasses item=$subclass}
      <tr>
        <a class="link" href='Specie/list/{$subclass->name}' hidden>{$class->id_subclass}</a>
      </tr>
        <tr class="list">
            <td>{$subclass->name}</td>
            <td>{$subclass->author}</td>
            <td>
              {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
                <a href='Subclass/form/edit/{$subclass->id_subclass}' type='button' class='btn btn-success'><img src="./img/edit.png" alt="Logo" width="25" height="25"></a>    
                <a href='Subclass/confirm-delete/{$subclass->id_subclass}' type='button' class='btn btn-danger'><img src="./img/delete.png" alt="Logo" width="25" height="25"></a>
              {/if}
            </td>
        </tr>
    {/foreach}
  </tbody>
  {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
  <tfoot>
        <tr>
            <td>
                <a href='Subclass/form/add' type='button' class='btn btn-info'>Add</a>
            </td>
        </tr>
  </tfoot>
  {/if}
</table>

{include file="footer.tpl"}