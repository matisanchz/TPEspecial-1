{include file="header.tpl"}

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Scientific Name</th>
      <th scope="col">Author</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$species item=$specie}
        <tr>
            <th scope="row">{$specie->id_specie}</th>
            <td>{$specie->scientific_name}</td>
            <td>{$specie->author}</td>
            <td>{$specie->location}</td>
            
            <td>
              <a href='Specie/show/{$specie->id_specie}' type='button' class='btn btn-dark'>Show</a>
              {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
                <a href='Specie/form/edit/{$specie->id_specie}' type='button' class='btn btn-success'>Editar</a>    
                <a href='Specie/confirm-delete/{$specie->id_specie}' type='button' class='btn btn-danger'>Borrar</a>
              {/if}
            </td>
        </tr>
    {/foreach}
  </tbody>
  {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
  <tfoot>
        <tr>
            <td>
                <a href='Specie/form/add' type='button' class='btn btn-info'>Agregar</a>
            </td>
        </tr>
  </tfoot>
  {/if}
</table>

<p class="mt-3"><small>Showing {$count} species</small></p>

{include file="footer.tpl"}