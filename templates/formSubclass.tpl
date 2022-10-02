{include file="header.tpl"}

<form action="Class/Subclass/{if $param === 'add'}add{else}edit/{$id}{/if}" method="POST" class="my-4">
    <div class="col-9">
        <div class="form-group">
            <label>Título</label>
            <input name="name" type="text" class="form-control">
            <input name="author" type="text" class="form-control">
            <input name="id_class" type="number" class="form-control">
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>

{include file="footer.tpl"}
