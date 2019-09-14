const form = document.forms.communication;
const input = document.getElementsByClassName('validate');
const error = document.getElementById('errors');
form.addEventListener('submit', (event) =>{
    event.preventDefault();
    for (let i = 0; i < input.length; i++){
        if (input[i].value == 0){
            error.textContent = 'error'
        }else {
            send();
        }
    }
})

const send = () =>{
    const form_date = new FormData();
    const xhr = new XMLHttpRequest();
    xhr.open("POST", this.action, true);
    xhr.send(form_date);
    xhr.onload = function (event) {
        if (xhr.status == 200){
            responseHandler(xhr.responseText);
        }
    }
};
function responseHandler(text) {
    console.log('answer server' + text);
}