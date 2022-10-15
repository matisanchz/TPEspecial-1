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
          <a class="link" href='Specie/show/{$specie->id_specie}' hidden>{$class->id_subclass}</a>
        </tr>
        <tr class="list">
            <th scope="row">{$specie->id_specie}</th>
            <td>{$specie->scientific_name}</td>
            <td>{$specie->author}</td>
            <td>{$specie->location}</td>
            <td>
              {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
                <a href='Specie/form/edit/{$specie->id_specie}' type='button' class='btn btn-success'><img src="./img/edit.png" alt="Logo" width="25" height="25"></a>    
                <a href='Specie/confirm-delete/{$specie->id_specie}' type='button' class='btn btn-danger'><img src="./img/delete.png" alt="Logo" width="25" height="25"></a>
              {/if}
            </td>
        </tr>
    {/foreach}
  </tbody>
  {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
  <tfoot>
        <tr>
            <td>
                <a href='Specie/form/add' type='button' class='btn btn-info'>Add</a>
            </td>
        </tr>
  </tfoot>
  {/if}
</table>

<p class="mt-3"><small>Showing {$count} species</small></p>

{include file="footer.tpl"}