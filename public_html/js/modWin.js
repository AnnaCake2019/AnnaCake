const callPhone = document.getElementById('modWin');
const modWin = document.getElementById('window');

callPhone.addEventListener('click', (event) =>{
        if (modWin.classList.contains('closeModal')){
            modWin.classList.remove('closeModal');
            modWin.classList.add('showModal')
        }else {
            modWin.classList.remove('showModal');
            modWin.classList.add('closeModal')
        }

});