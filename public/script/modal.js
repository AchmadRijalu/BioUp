
const modal = document.querySelector('.modal');
const showModal = document.querySelector('.showModal');
const removeModal = document.querySelector('.removeModal');

const gameovermodal = document.querySelector('.gameovermodal');
// const showGameOverModal = document.querySelector('.showGameOverModal');
const tryagainbutton = document.querySelector('.tryagainbutton');

const wrongmodal = document.querySelector('.wrongmodal');
const removeWrongmodal = document.querySelector('.removewrongmodal');

const tombol = document.querySelector('.tombol');

const finishgamemodal = document.querySelector('.finishgamemodal');
const continuebutton = document.querySelector('.continuebutton');

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

// showGameOverModal.addEventListener('click', function(){
//     gameovermodal.classList.remove('hidden');
// })

tryagainbutton.addEventListener('click', function(){
    gameovermodal.classList.add('hidden');
    history.back();
    // let url = "/character";
        // let join = location.href = url;
        // let join = location.reload();
        // event.returnValue = join;
})


continuebutton.addEventListener('click', function(){
    finishgamemodal.classList.add('hidden');
    window.location.href = "/papan";
})

tombol.addEventListener('click', function(){
    const press = document.getElementById("jawaban");
    // for(let i; i< test.;  i++){




});


// const tombolBack = document.querySelector('.backPreSoalButton');

// tombolBack.addEventListener('click', function () {
//     backmodal.classList.remove('hidden');
// })
