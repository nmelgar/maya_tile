
const hamburguer = document.getElementById('hamburguer');
const navUL = document.getElementById('list-of-item');

hamburguer.addEventListener('click', ()  =>{
  navUL.classList.toggle('active');

});




//Try comment

// let btn = document.getElementById('hamburguer');
// let div = document.getElementById('list-of-item');
//
// btn.addEventListener('click', () =>{
//   if(div.style.display === 'none'){
//     div.style.display = 'grid';
//   }else{
//     div.style.display = 'none';
//   }
// })
