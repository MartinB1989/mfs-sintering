let navItems = document.getElementById("nav-items"),
btnBurger = document.getElementById("btn-burger"), vof = false


// MENÚ DESPLEGABLE
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
});

document.addEventListener("click", e =>{
    if(e.target.matches(".nav-item")){
        
        navItems.classList.remove("nav-in");
        navItems.classList.add("nav-out");
        vof=false;
    }
    
})

// CARROUSEL
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


// BOTÓN QUE DIRIJE AL PIE DE LA PAGINA
// let btnSolicitarPre = document.querySelectorAll(".btn-solicitar-presupuesto");

document.addEventListener("click", e =>{
  if(e.target.matches(".sp")){
        window.scrollTo({
            behavior:"smooth",
            top: document.documentElement.scrollHeight
        });
  }
        
})

// AGREGA CLASE "ACTIVE" A LA SECCIÓN VISIBLE DEL MENU DE NAVEGACIÓN
const pantalla = () => {
        let px ;

        if(screen.width < 768) {
            px = "-185px" 
        } else if(screen.width < 1024){
            px = " -350px"
        }
        else{
            px = "-300px"
        }

        return px
    }
const scrollSpy = () =>{
    const section = document.querySelectorAll("section[data-scroll-spy]");
    const header = document.querySelectorAll("header[data-scroll-spy]");
    const cb = (entries) =>{
        // console.log("entries", entries)

        entries.forEach(entry =>{
            const id = entry.target.getAttribute("id") ;
            // console.log("entry", entry)
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

let nodo = document.getElementById("formulario-emergente"),
  nuevo = nodo.cloneNode(true)
console.log(nuevo)