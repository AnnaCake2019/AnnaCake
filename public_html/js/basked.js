const orders = document.forms.orders;
const ordersValue = document.getElementsByClassName('val');
orders.addEventListener('submit', (event) =>{
    event.preventDefault();
    for (let i = 0; i < ordersValue.length; i++){
        console.log(ordersValue[i].value);
    }
});

const oneSum = document.getElementsByClassName('oneSum');

const commonSum = document.getElementById('commonSum');
const commonSum1 = document.getElementById('commonSum1');

const amountBakery = document.getElementsByClassName('amountCart');
const forCommonSum = document.getElementById('forCommonSum');
const forCommonSum1 = document.getElementById('forCommonSum1');


const amountCart = document.getElementsByClassName('amountCart');
const amountCart1= document.getElementsByClassName('amountCart1');

let sum = 0;
const prodSum = (col) => {
    for (let i = 0; i < col.length; i++) {
        col[i].classList.add(`c${i}`);
        // let newCol = document.getElementsByClassName(`c${i}`);
        oneSum[i].classList.add(`c${i}`);
        sum = parseInt(col[i].innerHTML) * parseInt(col[i].nextElementSibling.innerHTML);
        col[i].nextElementSibling.innerHTML = `${sum}`;

    }

};
prodSum(amountCart);


const prodSum1 = (col) => {
    for (let i = 0; i < col.length; i++) {
        col[i].classList.add(`c${i}`);
        // let newCol = document.getElementsByClassName(`c${i}`);
        oneSum[i].classList.add(`c${i}`);
        sum = parseInt(col[i].innerHTML) * parseInt(col[i].nextElementSibling.innerHTML);
        col[i].nextElementSibling.innerHTML = `${sum}`;

    }

};
prodSum(amountCart1);


let comSum = 0;
const fCommonSum = (sum) =>{
    for (let i = 0; i < sum.length; i++){
        comSum += parseInt(sum[i].innerHTML);

            forCommonSum.innerHTML = `Сумма заказа:`;
            commonSum.innerHTML = `${comSum} р.`;
            commonSum1.innerHTML = `${comSum} р.`;

        }
};
fCommonSum(oneSum);


