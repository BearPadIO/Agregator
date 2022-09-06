let el1 = document.querySelector(".ex-top1");
let el2 = document.querySelector(".ex-top2");
let el3 = document.querySelector(".ex-top3");
let el4 = document.querySelector(".ex-top4");

let el1_ag = document.querySelector(".ag-top1");
let el2_ag = document.querySelector(".ag-top2");
let el3_ag = document.querySelector(".ag-top3");
let el4_ag = document.querySelector(".ag-top4");

let fin1_ag = document.querySelector(".fin-top1");
let fin2_ag = document.querySelector(".fin-top2");
let fin3_ag = document.querySelector(".fin-top3");
let fin4_ag = document.querySelector(".fin-top4");

let tg1_ag = document.querySelector(".tg-top1");
let tg2_ag = document.querySelector(".tg-top2");
let tg3_ag = document.querySelector(".tg-top3");
let tg4_ag = document.querySelector(".tg-top4");

let replaceText = () => {
    el1.src = '/src/top.png';
    el2.src = '/src/top.png';
    el3.src = '/src/top.png';
    el4.src = '/src/top.png';

    el1.classList.remove('svp');
    el2.classList.remove('svp');
    el3.classList.remove('svp');
    el4.classList.remove('svp');

    el1.classList.add('svp-top');
    el2.classList.add('svp-top');
    el3.classList.add('svp-top');
    el4.classList.add('svp-top');


    el1_ag.src = '/src/top.png';
    el2_ag.src = '/src/top.png';
    el3_ag.src = '/src/top.png';
    el4_ag.src = '/src/top.png';

    el1_ag.classList.remove('svp');
    el2_ag.classList.remove('svp');
    el3_ag.classList.remove('svp');
    el4_ag.classList.remove('svp');

    el1_ag.classList.add('svp-top');
    el2_ag.classList.add('svp-top');
    el3_ag.classList.add('svp-top');
    el4_ag.classList.add('svp-top');

    fin1_ag.src = '/src/top.png';
    fin2_ag.src = '/src/top.png';
    fin3_ag.src = '/src/top.png';
    fin4_ag.src = '/src/top.png';

    fin1_ag.classList.remove('svp');
    fin2_ag.classList.remove('svp');
    fin3_ag.classList.remove('svp');
    fin4_ag.classList.remove('svp');

    fin1_ag.classList.add('svp-top');
    fin2_ag.classList.add('svp-top');
    fin3_ag.classList.add('svp-top');
    fin4_ag.classList.add('svp-top');

    tg1_ag.src = '/src/top.png';
    tg2_ag.src = '/src/top.png';
    tg3_ag.src = '/src/top.png';
    tg4_ag.src = '/src/top.png';

    tg1_ag.classList.remove('svp');
    tg2_ag.classList.remove('svp');
    tg3_ag.classList.remove('svp');
    tg4_ag.classList.remove('svp');

    tg1_ag.classList.add('svp-top');
    tg2_ag.classList.add('svp-top');
    tg3_ag.classList.add('svp-top');
    tg4_ag.classList.add('svp-top');
}

replaceText();