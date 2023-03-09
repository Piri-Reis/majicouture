import '../styles/index.css';

let btnToggle =  document.querySelectorAll('.btn-toggle');
let navMobile = document.getElementById('nav-menu-mobile');

btnToggle[0].addEventListener( 'click', function (){
  console.log('hello')
  navMobile.classList.toggle('hidden')
})

btnToggle[1].addEventListener( 'click', function (){
  console.log('hello')
  navMobile.classList.toggle('hidden')
})

