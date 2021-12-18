
const modal = document.querySelector('.modal');
const showModal = document.querySelector('.showModal');
const removeModal = document.querySelector('.removeModal');


const wrongmodal = document.querySelector('.wrongmodal');
const removeWrongmodal = document.querySelector('.removewrongmodal');

const tombol = document.querySelector('.tombol');

//Elements ID SOal







// window.addEventListener('beforeunload', function(event){
//     let url = "/presoal";
//     let join = location.href = url;
//     event.returnValue = join;

// });



removeModal.addEventListener('click', function () {
    modal.classList.add('hidden');
});
showModal.addEventListener('click', function () {
    modal.classList.remove('hidden');

});


// showModalSalah.addEventListener('click', function () {
//     wrongmodal.classList.remove('hidden');
// });



removeWrongmodal.addEventListener('click', function () {
    wrongmodal.classList.add('hidden');
});

tombol.addEventListener('click', function(){
    const press = document.getElementById("jawaban");
    // for(let i; i< test.;  i++){




});


// const tombolBack = document.querySelector('.backPreSoalButton');

// tombolBack.addEventListener('click', function () {
//     backmodal.classList.remove('hidden');
// })
