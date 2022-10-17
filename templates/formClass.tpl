{include file="header.tpl"}

<form 
action="Class/{if $param === 'add'}add{else}edit/{$id}{/if}"
 method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control w-50" required>
                <label>Author</label>
                <input name="author" type="text" class="form-control w-50" required>
            </div>
        </div>

    <div class="form-group">
        <label>Features</label>
        <textarea name="features" class="form-control w-50" rows="3"></textarea>
    </div>
    <a href='Class' type='button' class="btn btn-primary mt-2 w-25">Back</a>
    <button type="submit" class="btn btn-primary ms-2 mt-2 w-25">Save</button>
</form>

{include file="footer.tpl"}