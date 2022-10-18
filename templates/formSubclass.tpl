{include file="header.tpl"}

<form action="Subclass/{if $param === 'add'}add{else}edit/{$id}{/if}" method="POST" class="my-4">
    <div class="col-9">
        <div class="form-group">
            <label>Name</label>
            <input name="name" {if isset($id)}value="{$subclass[0]->name}"{/if} type="text" class="form-control w-50" required>
            <label>Author</label>
            <input name="author" {if isset($id)}value="{$subclass[0]->author}"{/if} type="text" class="form-control w-50" required>
            <label>Class</label>
            <select name="id_class" class="form-select w-50" aria-label="Default select example" required>
                {foreach from=$classes item=$class}
                    <option value="{$class->id_class}" {if isset($id)&&(($subclass[0]->id_class)===($class->id_class))}selected{/if}>{$class->name}</option>
                {/foreach}
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2 w-25">Save</button>
    <a type='button' class='btn btn-primary mt-2 w-25 back-list'>Back</a>
    
</form>

{include file="footer.tpl"}
