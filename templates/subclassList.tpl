<ul class="list-group">
    {foreach from=$subclasses item=$subclass}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$subclass->name}</b> - {$subclass->author} ({$subclass->id_class}) </span>
            <div class="ml-auto">
                <a href='delete/{$class->id_subclass}' type='button' class='btn btn-danger'>Borrar</a>
            </div>
        </li>
    {/foreach}
</ul>

<p class="mt-3"><small>Showing {$count} subclasses</small></p>

<a href="list3">Species</a>

{include file="footer.tpl"}