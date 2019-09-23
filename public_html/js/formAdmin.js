const cake = document.forms.cake;
const p = document.getElementById('answerServer');
let i = 0;
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
    i++;
    p.innerText = "Добавлено записей " + i;

}

