const drop = document.querySelector('#drop');
const logout = document.querySelector('#logout');


drop.addEventListener('click', ()=> {
    if(logout.classList.contains('hidden')){
        logout.classList.remove('hidden');
        logout.classList.add('animated fadeIn')

    }
    else{
        logout.classList.add('hidden');

    }
});
