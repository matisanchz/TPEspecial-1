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
            <td ></td>
            <td ></td>
            <td ></td>
            <td float-end>
              {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
                <a href='Subclass/form/edit/{$subclass->id_subclass}' type='button' class='btn btn-success'><img src="./img/edit.png" alt="Logo" width="25" height="25"></a>    
                <a href='Subclass/confirm-delete/{$subclass->id_subclass}' type='button' class='btn btn-danger'><img src="./img/delete.png" alt="Logo" width="25" height="25"></a>
              {/if}
            </td>
        </tr>
    {/foreach}
  </tbody>
</table>

<button type="submit" class="btn btn-info mt-2 back-list">Back</button>

<a href='' type='button' class='btn btn-info mt-2'>Home</a>

{if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
  <a href='Subclass/form/add' type='button' class='btn btn-info mt-2 float-end me-5'>Add</a>
{/if}

{include file="footer.tpl"}