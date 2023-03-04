let btn = document.querySelector('button');
let status = document.querySelector('p');
let select = document.querySelector('select');

select.addEventListener('change', () =>{
    status.innerText = select.value;
});
