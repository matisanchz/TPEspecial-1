{include file="header.tpl"}

<form action="Specie/{if $param === 'add'}add{else}edit/{$id}{/if}" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Scientific Name</label>
                <input name="scientific_name" type="text" class="form-control">
                <label>Author</label>
                <input name="author" type="text" class="form-control">
                <label>Location</label>
                <input name="location" type="text" class="form-control">
                <select name="id_subclass">
                {foreach from=$subclasses item=$subclass}
                    <option value="{$subclass->id_subclass}">{$subclass->name}</option>
                {/foreach}
                </select>
            </div>
        </div>
        <div class="form-group">
            <label>Photo link</label>
            <textarea name="photo" class="form-control" rows="3"></textarea>
        </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>

{include file="footer.tpl"}
