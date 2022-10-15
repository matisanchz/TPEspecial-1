{include file="header.tpl"}

<form 
action="Class/{if $param === 'add'}add{else}edit/{$id}{/if}"
 method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control w-50">
                <label>Author</label>
                <input name="author" type="text" class="form-control w-50">
            </div>
        </div>

    <div class="form-group">
        <label>Features</label>
        <textarea name="features" class="form-control w-50" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-2 w-50">Save</button>
</form>

{include file="footer.tpl"}