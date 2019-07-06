

 

//reusable class toggle function:
function classToggle(id, className) {
    return document.getElementById(id).classList.toggle(className);
}

window.onscroll = function() { scrollBackground() };

function scrollBackground() {
    const navbar = document.getElementById("navbar");
   
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.classList.add("blue");
    } else {
        navbar.classList.remove("blue");
    }
}

//collapse dropdown if user clicks outside box
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      const dropdowns = document.getElementsByClassName("dropdown-content");
      for (let i = 0; i < dropdowns.length; i++) {
        let e = dropdowns[i];
        if (e.classList.contains('toggle-reveal')) {
          e.classList.remove('toggle-reveal');
       
        }
      }
      
    }
  } 