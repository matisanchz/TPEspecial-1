{include file="header.tpl"}

<form action="Specie/{if $param === 'add'}add{else}edit/{$id}{/if}" method="POST" class="my-4" enctype="multipart/form-data">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Scientific Name</label>
                <input name="scientific_name" {if isset($id)}value="{$specie[0]->scientific_name}"{/if} type="text" class="form-control w-50" required>
                <label>Author</label>
                <input name="author" {if isset($id)}value="{$specie[0]->author}"{/if} type="text" class="form-control w-50" required>
                <label>Location</label>
                <input name="location" {if isset($id)}value="{$specie[0]->location}"{/if} type="text" class="form-control w-50" required>
                <label>Subclass</label>
                <select name="id_subclass" class="form-select mt-2 w-50" aria-label="Default select example" required>
                {foreach from=$subclasses item=$subclass}
                    <option value="{$subclass->id_subclass}" {if isset($id)&&(($specie[0]->id_subclass)===($subclass->id_subclass))}selected{/if}>{$subclass->name}</option>
                {/foreach}
                </select>
            </div>
        </div>
        <div class="form-group">
            <label>Photo link</label>
            <input type="file" name="photo" id="imageToUpload">
        </div>
    <button type="submit" class="btn btn-primary mt-2 w-25">Save</button>
</form>
<button type="submit" class="btn btn-primary ms-2 mt-2 w-25 back-list">Back</button>

{include file="footer.tpl"}
