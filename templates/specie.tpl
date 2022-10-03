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
<div class="card" aria-hidden="true">
  <img src="" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title placeholder-glow">
      <span class="placeholder col-6"></span>
    </h5>
    <p class="card-text placeholder-glow">
      <span class="placeholder col-7"></span>
      <span class="placeholder col-4"></span>
      <span class="placeholder col-4"></span>
      <span class="placeholder col-6"></span>
      <span class="placeholder col-8"></span>
    </p>
    <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
  </div>
</div>

{include file="footer.tpl"}