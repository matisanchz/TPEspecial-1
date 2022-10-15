{include file="header.tpl"}

<form action="Subclass/{if $param === 'add'}add{else}edit/{$id}{/if}" method="POST" class="my-4">
    <div class="col-9">
        <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control w-50">
            <label>Author</label>
            <input name="author" type="text" class="form-control w-50">
            <label>Class</label>
            <select name="id_class" class="form-select w-50" aria-label="Default select example">
                {foreach from=$classes item=$class}
                    <option value="{$class->id_class}">{$class->name}</option>
                {/foreach}
            </select>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary mt-2 w-25">Back</button>
    <button type="submit" class="btn btn-primary mt-2 w-25">Save</button>
</form>

{include file="footer.tpl"}
