<ul class="list-group">
    {foreach from=$species item=$specie}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$specie->scientific_name}</b> - {$specie->author} - {$specie->habitat} - {$specie->id_subclass} - {$specie->photo}</span>
            <div class="ml-auto">
                <a href='delete/{$class->id_specie}' type='button' class='btn btn-danger'>Borrar</a>
            </div>
        </li>
    {/foreach}
</ul>

<p class="mt-3"><small>Showing {$count} species</small></p>

{include file="footer.tpl"}