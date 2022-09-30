const tab_dependente = document.querySelector('#tab-dependente');
const tab_socio = document.querySelector('#tab-socio');
const tab_dependente_container = document.querySelector('#dependentes-socio-container');
const tab_socio_container = document.querySelector('#dados-socio-container');

tab_socio.addEventListener('click',() => {
    tab_socio.classList.add('tab-active');
    tab_socio_container.classList.add('block');
    tab_socio_container.classList.remove('hidden');
    tab_dependente.classList.remove('tab-active');
    tab_dependente_container.classList.add('hidden');
    tab_dependente_container.classList.remove('block');
})

tab_dependente.addEventListener('click',() => {
    tab_dependente.classList.add('tab-active');
    tab_dependente_container.classList.add('block');
    tab_dependente_container.classList.remove('hidden');
    tab_socio.classList.remove('tab-active');
    tab_socio_container.classList.add('hidden');
})