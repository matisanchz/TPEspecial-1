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
            <td><a href='Class/Subclass/form/edit/{$subclass->id_subclass}' type='button' class='btn btn-success'>Editar</a>    
            <a href='Class/Subclass/confirm-delete/{$subclass->id_subclass}' type='button' class='btn btn-danger'>Borrar</a></td>
        </tr>
    {/foreach}
  </tbody>
  <tfoot>
        <tr>
            <td>
                <a href='Class/Subclass/form/add' type='button' class='btn btn-info'>Agregar</a>
            </td>
        </tr>
  </tfoot>
</table>

<p class="mt-3"><small>Showing {$count} subclasses</small></p>

<a href="Class/Subclass/Specie">Species</a>

{include file="footer.tpl"}