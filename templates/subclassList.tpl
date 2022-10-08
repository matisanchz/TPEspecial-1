{include file="header.tpl"}

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
      <th scope="col">id_class</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$subclasses item=$subclass}
        <tr>
            <th scope="row">{$subclass->id_subclass}</th>
            <td>{$subclass->name}</td>
            <td>{$subclass->author}</td>
            <td>{$subclass->id_class}</td>
            <td>
              <a href='Specie/list/{$subclass->name}' type='button' class='btn btn-dark'>Show</a>
              {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
                <a href='Subclass/form/edit/{$subclass->id_subclass}' type='button' class='btn btn-success'>Editar</a>    
                <a href='Subclass/confirm-delete/{$subclass->id_subclass}' type='button' class='btn btn-danger'>Borrar</a>
              {/if}
            </td>
        </tr>
    {/foreach}
  </tbody>
  {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
  <tfoot>
        <tr>
            <td>
                <a href='Subclass/form/add' type='button' class='btn btn-info'>Agregar</a>
            </td>
        </tr>
  </tfoot>
  {/if}
</table>

<p class="mt-3"><small>Showing {$count} subclasses</small></p>

{include file="footer.tpl"}