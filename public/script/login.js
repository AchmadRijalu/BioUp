
const alertVanished = document.querySelector('.alertVanished');
const alertVanisheddiv = document.querySelector('.alertVanisheddiv');

alertVanished.addEventListener('click', function(){
    alertVanished.classList.add('hidden');
    alertVanisheddiv.classList.add('hidden');
})
