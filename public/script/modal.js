const modal = document.querySelector('.modal');
const showModal = document.querySelector('.showModal');
const removeModal = document.querySelector('.removeModal');


showModal.addEventListener('click', function () {
    modal.classList.remove('hidden');
});
removeModal.addEventListener('click', function () {
    modal.classList.add('hidden');
});








// const tombolBack = document.querySelector('.backPreSoalButton');

// tombolBack.addEventListener('click', function () {
//     backmodal.classList.remove('hidden');
// })
