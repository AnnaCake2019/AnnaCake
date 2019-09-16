const form = document.forms.enter;
form.addEventListener('submit', verify);
const p = form.nextElementSibling;
const input = document.getElementsByClassName('validate');
console.log(p);
function verify(event) {
    event.preventDefault();

    for (let i = 0; i < input.length; i++){
        if(input[i].value == 0){
            p.innerHTML = 'Не все поля заполнены';
            return;
        }
    }
    ajaxMyForm(event);
}

function ajaxMyForm() {
    let  form_date = new FormData(this);

    let xhr = new XMLHttpRequest();

    xhr.open("POST", this.action, true);
    xhr.send(form_date);

    xhr.onload = function (event) {
        if(xhr.status == 200){
            responseHandler(xhr.responseText);
        }
    };
}

function  responseHandler(text) {
    console.log("ответ сервера" + text);
}

