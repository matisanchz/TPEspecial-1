{include file="header.tpl"}

<form action="Subclass/{if $param === 'add'}add{else}edit/{$id}{/if}" method="POST" class="my-4">
    <div class="col-9">
        <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control">
            <label>Author</label>
            <input name="author" type="text" class="form-control">
            <label>Class</label>
            <select name="id_class"> 
                {foreach from=$classes item=$class}
                    <option value="{$class->id_class}">{$class->name}</option>
                {/foreach}
            </select>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary mt-2">Back</button>
    <button type="submit" class="btn btn-primary mt-2">Save</button>
</form>

{include file="footer.tpl"}
