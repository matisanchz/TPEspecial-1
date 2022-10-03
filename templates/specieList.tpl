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
              <a href='Class/Subclass/Specie/show/{$specie->id_specie}' type='button' class='btn btn-dark'>Show</a>
              <a href='Class/Subclass/Specie/form/edit/{$specie->id_specie}' type='button' class='btn btn-success'>Editar</a>    
              <a href='Class/Subclass/Specie/confirm-delete/{$specie->id_specie}' type='button' class='btn btn-danger'>Borrar</a>
            </td>
        </tr>
    {/foreach}
  </tbody>
  <tfoot>
        <tr>
            <td>
                <a href='Class/Subclass/Specie/form/add' type='button' class='btn btn-info'>Agregar</a>
            </td>
        </tr>
  </tfoot>
</table>

<p class="mt-3"><small>Showing {$count} species</small></p>

{include file="footer.tpl"}