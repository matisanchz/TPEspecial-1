{include file="header.tpl"}

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
      <th scope="col">Features</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$classes item=$class}
      <tr class="classlist">
        <td scope="row"><a class="link" href='Subclass/list/{$class->name}'>{$class->id_class}</a></td>
            <td>{$class->name}</td>
            <td>{$class->author}</td>
            <td>{$class->features}</td>
            <td>
            
              {* <a href='Subclass/list/{$class->name}' type='button' class='btn btn-dark'>Show</a> *}
              {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
              <a href='Class/form/edit/{$class->id_class}' type='button' class='btn btn-success'><img src="./img/edit.png" alt="Logo" width="25" height="25"></a>    
              <a href='Class/confirm-delete/{$class->id_class}' type='button' class='btn btn-danger'><img src="./img/delete.png" alt="Logo" width="25" height="25"></a>
              {/if}
            </td>
        </tr>
    {/foreach}
  </tbody>
  {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
  <tfoot>
        <tr>
            <td>
                <a href='Class/form/add' type='button' class='btn btn-info'>Agregar</a>
            </td>
        </tr>
  </tfoot>
  {/if}
</table>


<p class="mt-3"><small>Showing {$count} classes</small></p>

{include file="footer.tpl"}
