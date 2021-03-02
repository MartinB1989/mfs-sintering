let navItems = document.getElementById("nav-items"),
vof = false,vof2 = false,
emergente = document.getElementById("emergente"), 
nodo = document.getElementById("formulario-emergente"),
nuevo = nodo.cloneNode(true),
burgerDiv = document.querySelectorAll(".burger-div"),
cross = document.querySelectorAll(".cross");



document.addEventListener("click", e =>{
    if(e.target.matches(".nav-item")){ 
        navItems.classList.remove("nav-in");
        navItems.classList.add("nav-out");
        cross.forEach(el =>{
          el.classList.add("no")
        });
        burgerDiv.forEach(el =>{
          el.classList.remove("no")
        })
        vof=false;
    }
    else if(e.target.matches("#btn-burger") || e.target.matches(".burger")){

      if(!vof){
          navItems.classList.remove("nav-out");
          navItems.classList.add("nav-in");
          burgerDiv.forEach(el =>{
            el.classList.add("no")
          });
          cross.forEach(el =>{
            el.classList.remove("no")
          })
          vof=true
      }
      else{
          navItems.classList.remove("nav-in");
          navItems.classList.add("nav-out");
          cross.forEach(el =>{
            el.classList.add("no")
          });
          burgerDiv.forEach(el =>{
            el.classList.remove("no")
          })
          vof=false;
      }   
    }
    else if(e.target.matches(".sp")){
      window.scrollTo({
          behavior:"smooth",
          top: document.documentElement.scrollHeight
      })
    }
    else if(e.target.matches(".down-guia")){  
      emergente.classList.remove("emergente-no")
      emergente.appendChild(nuevo)
      
    }
    else if(e.target.matches(".emergente")){
      emergente.removeChild(nuevo)
      emergente.classList.add("emergente-no")
      
    }


    
})


// CARROUSEL
const items = document.querySelectorAll('.slider-img');
const itemCount = items.length;
const nextItem = document.querySelectorAll('.next');
const previousItem = document.querySelectorAll('.previous');
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

nextItem.forEach(el => el.addEventListener('click', showNextItem));
previousItem.forEach(el => el.addEventListener('click', showPreviousItem));
document.addEventListener('keydown', keyPress);


// AGREGA CLASE "ACTIVE" A LA SECCIÓN VISIBLE DEL MENU DE NAVEGACIÓN

const pantalla = () => (screen.width < 1024) ? "-5000px" : "-320px";
        
const scrollSpy = () =>{
    const section = document.querySelectorAll("section[data-scroll-spy]");
    const header = document.querySelectorAll("header[data-scroll-spy]");
    const cb = (entries) =>{
        

        entries.forEach(entry =>{
            const id = entry.target.getAttribute("id") ;
            
            if(entry.isIntersecting){
                document.querySelector(`a[data-scroll-spy][href="#${id}"]`).classList.add("active")
            } else{
                document.querySelector(`a[data-scroll-spy][href="#${id}"]`).classList.remove("active")
            }

        })
    };
    
    const observer = new IntersectionObserver(cb, {
        rootMargin: pantalla(),
        // threshold:[0.5,0.75]
    
    });    

    section.forEach(el => observer.observe(el))
    header.forEach(el => observer.observe(el))
}

scrollSpy()




 
