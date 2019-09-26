const cake = document.forms.cake;
const p = document.getElementById('answerServer');
let q = 0;
let w = 0;
cake.addEventListener('submit', sendInfo);
function sendInfo(event) {
    event.preventDefault();
    const form_date = new FormData(this);
    const xhr = new XMLHttpRequest();
    xhr.open("POST", this.action, true);
    xhr.send(form_date);
    xhr.onload = function (event) {
        if (xhr.status == 200){
            responseHandler(xhr.responseText);
        }
    }
}
function responseHandler(text) {
    cake.reset();
    q++;
    p.innerText = "Добавлено записей " + q;
}



const quantity = document.getElementById('quantity');
const productsAdmin = document.getElementsByClassName('productsAdmin');
console.log(quantity);
const numberProd = () =>{
    for (let i = 0; i < productsAdmin.length; i++){
        w++;
        quantity.innerHTML = "Всего записей " + w;
    }
};

numberProd();

