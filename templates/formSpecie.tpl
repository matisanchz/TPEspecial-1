{include file="header.tpl"}

<form action="Class/Subclass/Specie/{if $param === 'add'}add{else}edit/{$id}{/if}" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Título</label>
                <input name="scientific_name" type="text" class="form-control">
                <input name="author" type="text" class="form-control">
                <input name="habitat" type="text" class="form-control">
                <input name="id_subclass" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label>Photo link</label>
            <textarea name="photo" class="form-control" rows="3"></textarea>
        </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>

{include file="footer.tpl"}
