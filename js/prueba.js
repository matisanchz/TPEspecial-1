"use strict"

let trs = document.querySelectorAll('.list');
let links = document.querySelectorAll('.link');

for(let i = 0; i < trs.length; i++){
    trs[i].addEventListener('click', function(e){
        let page = links[i].href;
        window.location.href = page;
    });
}

let btn_back = document.querySelectorAll('.back-list');
for(let i = 0; i < btn_back.length; i++){
    btn_back[i].addEventListener('click', function(e){
        history.back();
    });
}