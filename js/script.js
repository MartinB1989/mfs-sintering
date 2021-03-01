let navItems = document.getElementById("nav-items"),
btnBurger = document.getElementById("btn-burger"), vof = false;


btnBurger.addEventListener("click", e =>{
    if(!vof){
        navItems.classList.remove("nav-out");
        navItems.classList.add("nav-in");
        vof=true
    }
    else{
        navItems.classList.remove("nav-in");
        navItems.classList.add("nav-out");
        vof=false;
    }
})

const items = document.querySelectorAll('.slider-img');
const itemCount = items.length;
const nextItem = document.querySelector('.next');
const previousItem = document.querySelector('.previous');
let count = 0;

function showNextItem() {
  items[count].classList.remove('active');

  if(count < itemCount - 1) {
    count++;
  } else {
    count = 0;
  }

  items[count].classList.add('active');
  console.log(count);
}

function showPreviousItem() {
  items[count].classList.remove('active');

  if(count > 0) {
    count--;
  } else {
    count = itemCount - 1;
  }

  items[count].classList.add('active');
  console.log(count);
}

function keyPress(e) {
  e = e || window.event;
  
  if (e.keyCode == '37') {
    showPreviousItem();
  } else if (e.keyCode == '39') {
    showNextItem();
  }
}

nextItem.addEventListener('click', showNextItem);
previousItem.addEventListener('click', showPreviousItem);
document.addEventListener('keydown', keyPress);

let btnSolicitarPre = document.querySelector(".btn-solicitar-presupuesto");

btnSolicitarPre.addEventListener("click", e =>{
        window.scrollTo({
            behavior:"smooth",
            top: document.documentElement.scrollHeight
        });

        
})