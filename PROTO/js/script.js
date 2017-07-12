// set up var

const navItems = document.querySelectorAll('h3');
const theInfo = document.querySelectorAll('.sub');
const artist = document.querySelectorAll('.example');
const modal = document.querySelector('.modal');
const close = document.querySelector('.close');

console.log(navItems);
const display = 'block';
function handleClick() {
  console.log(this);
  var theState = this.nextElementSibling.style.display;
  if (display == theState) {
    console.log(this.nextElementSibling.classList);
    this.nextElementSibling.classList.remove('show');
    this.nextElementSibling.style.display = 'none';
    navItems.forEach(navItem => navItem.style.color = 'white');
    console.log(navItems);
  } else {
    navItems.forEach(navItem => navItem.nextElementSibling.style.display = 'none');
    this.nextElementSibling.classList.add('show');
    this.nextElementSibling.style.display = 'block';
    navItems.forEach(navItem => navItem.style.color = 'gray');
  }
}

function openModal() {
  console.log(modal.classList);
  modal.style.transition ="width 1s";
  modal.classList.add('showModal');

}

function closeMe(){
  modal.classList.remove('showModal');
}


navItems.forEach(navItem => navItem.addEventListener('click',handleClick));
artist.forEach(artist => artist.addEventListener('click', openModal));
close.addEventListener('click',closeMe);
