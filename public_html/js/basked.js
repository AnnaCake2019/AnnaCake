const orders = document.forms.orders;
const ordersValue = document.getElementsByClassName('val');
orders.addEventListener('submit', (event) =>{
    event.preventDefault();
    for (let i = 0; i < ordersValue.length; i++){
        console.log(ordersValue[i].value);
    }
});


const commonSum = document.getElementById('commonSum');
const oneSum = document.getElementsByClassName('oneSum');
const forCommonSum = document.getElementById('forCommonSum');



let sum = 0;
const comSum = (arr) =>{
    for (let i = 0; i < arr.length; i++){
        sum += parseInt(arr[i].innerHTML);
        forCommonSum.innerHTML = `Сумма заказа:`;
        commonSum.innerHTML = `${sum} р.`;
    }
};
comSum(oneSum);


