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
        <tr>
            <th scope="row">{$class->id_class}</th>
            <td>{$class->name}</td>
            <td>{$class->author}</td>
            <td>{$class->features}</td>
            <td><a href='Class/form/edit/{$class->id_class}' type='button' class='btn btn-success'>Editar</a>    
            <a href='Class/confirm-delete/{$class->id_class}' type='button' class='btn btn-danger'>Borrar</a></td>
        </tr>
    {/foreach}
  </tbody>
  <tfoot>
        <tr>
            <td>
                <a href='Class/form/add' type='button' class='btn btn-info'>Agregar</a>
            </td>
        </tr>
  </tfoot>
</table>

<p class="mt-3"><small>Showing {$count} classes</small></p>

<a href="Class/Subclass">Subclasses</a>

{include file="footer.tpl"}
