"use strict"

let Trs = document.querySelectorAll('.classlist');
let Links = document.querySelectorAll('.link');

for(let i = 0; i < Trs.length; i++){
    Trs[i].addEventListener('click', function(e){
        let page = Links[i].href;
        window.location.href = page;
    });
}