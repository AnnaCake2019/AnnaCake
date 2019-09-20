window.addEventListener('scroll', fixedMenu);

const fixedBloc = document.getElementById('fixed');
const fixedBlocOffset = fixedBloc.offsetTop;

function fixedMenu() {
    if (window.pageYOffset > fixedBlocOffset){
        fixedBloc.classList.add('fixedMenu')
    }else {
        fixedBloc.classList.remove('fixedMenu');
    }
}
