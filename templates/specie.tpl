{include file="header.tpl"}

{foreach from=$specie item=$speci}
<div class="card">
  <img src="{$speci->photo}" class="rounded mx-auto d-block" class="card-img-top" alt="{$speci->scientific_name}">

  <div class="text-center" class="card-body">
    <h5 class="card-title">{$speci->scientific_name}</h5>
    <p class="card-text">{$speci->author}</p>
    <h6 class="card-title">Class</h6>
    <p class="card-text">{$speci->id_class} - {$speci->Class} ({$speci->AuthorClass})</p>
    <h6 class="card-title">Subclass</h6>
    <p class="card-text">{$speci->id_subclass} - {$speci->Subclass} ({$speci->AuthorSubclass})</p>
    <a href="Class/Subclass/Specie/list/{$speci->id_subclass}" class="btn btn-primary">Back</a>
  </div>
</div>
{/foreach}

{include file="footer.tpl"}