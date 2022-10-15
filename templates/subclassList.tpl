{include file="header.tpl"}

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
      {* <th scope="col">id_class</th> *}
    </tr>
  </thead>
  <tbody>
    {foreach from=$subclasses item=$subclass}
      <tr>
        <a class="link" href='Specie/list/{$subclass->name}' hidden>{$class->id_subclass}</a>
      </tr>
        <tr class="list">
            {* <th scope="row">{$subclass->id_subclass}</th> *}
            <td>{$subclass->name}</td>
            <td>{$subclass->author}</td>
            {* <td>{$subclass->id_class}</td> *}
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

<p class="mt-3"><small>Showing {$count} subclasses</small></p>

{include file="footer.tpl"}