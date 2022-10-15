{include file="header.tpl"}

  <div class="card">
    <img id="specie" src="{$specie[0]->photo}" class="rounded mx-auto d-block" {*class="card-img-top"*} alt="{$specie[0]->scientific_name}">
  
    <div class="text-center" class="card-body">
      <h5 class="card-title">{$specie[0]->scientific_name}</h5>
      <p class="card-text">{$specie[0]->author}</p>
      <h6 class="card-title">Class</h6>
      <p class="card-text">{$specie[0]->id_class} - {$specie[0]->Class} ({$specie[0]->AuthorClass})</p>
      <h6 class="card-title">Subclass</h6>
      <p class="card-text">{$specie[0]->id_subclass} - {$specie[0]->Subclass} ({$specie[0]->AuthorSubclass})</p>
      <a href="Specie/list/{$specie[0]->Subclass}" class="btn btn-primary">Go to {$specie[0]->Subclass} list</a>
      <a href="Specie" class="btn btn-primary">Return to Species</a>
    </div>
  </div>

{include file="footer.tpl"}