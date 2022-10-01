{* {include file="header.tpl"} *}

{* {include file="form_alta.tpl"} *}

<ul class="list-group">
    {foreach from=$classes item=$class}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$class->name}</b> - {$class->author} ({$class->features}) </span>
            <div class="ml-auto">
                <a href='delete/{$class->id_class}' type='button' class='btn btn-danger'>Borrar</a>
            </div>
        </li>
    {/foreach}
</ul>

<p class="mt-3"><small>Showing {$count} classes</small></p>

<a href="list2">Subclasses</a>

{include file="footer.tpl"}
