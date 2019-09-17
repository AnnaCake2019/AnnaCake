const orders = document.forms.orders;
const ordersValue = document.getElementsByClassName('val');
orders.addEventListener('submit', (event) =>{
    event.preventDefault();
    for (let i = 0; i < ordersValue.length; i++){
        console.log(ordersValue[i].value);
    }
});