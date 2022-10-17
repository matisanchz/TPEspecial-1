{include file="header.tpl"}

{if isset($species[0]->SubclassName)}
  <h1 class="font-heading">Showing {$count} Species from {$species[0]->SubclassName} Subclass</h1>
{else}
  <h1 class="font-heading">Showing all Species</h1>
{/if}

<table class="table">
  <thead>
    <tr>
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
</table>

<button type="submit" class="btn btn-info mt-2 back-list">Back</button>

<a href='' type='button' class='btn btn-info mt-2'>Home</a>

{if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
  <a href='Specie/form/add' type='button' class='btn btn-info mt-2 float-end me-5'>Add</a>
{/if}

{include file="footer.tpl"}