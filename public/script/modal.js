const modal = document.querySelector('.modal');
const showModal = document.querySelector('.showModal');
const removeModal = document.querySelector('.removeModal');

const showModalSalah = document.querySelector('.showModalSalah');
const wrongmodal = document.querySelector('.wrongmodal');
const removeWrongmodal = document.querySelector('.removewrongmodal');





window.addEventListener('beforeunload', function(event){
    let url = "/presoal";
    let join = location.href = url;
    event.returnValue = join;

});



showModal.addEventListener('click', function () {
    modal.classList.remove('hidden');
});
showModalSalah.addEventListener('click', function(){
    wrongmodal.classList.remove('hidden');
})

removeModal.addEventListener('click', function () {
    modal.classList.add('hidden');

});
removeWrongmodal.addEventListener('click', function(){
    wrongmodal.classList.add('hidden');
})









// const tombolBack = document.querySelector('.backPreSoalButton');

// tombolBack.addEventListener('click', function () {
//     backmodal.classList.remove('hidden');
// })
