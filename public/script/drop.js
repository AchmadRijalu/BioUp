const drop = document.querySelector('#drop');
const logout = document.querySelector('#logout');


drop.addEventListener('click', ()=> {
    if(logout.classList.contains('hidden')){
        logout.classList.remove('hidden');
        logout.classList.add('transition duration-150 ease-in-out')
    }
    else{
        logout.classList.add('hidden');

    }
});
