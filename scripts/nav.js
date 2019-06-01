const navs = document.querySelectorAll('.nav-list');

function classToggle() {
    navs.forEach(nav => nav.classList.toggle('toggle-reveal'));
}

document.querySelector('#menu-toggle')
    .addEventListener('click', classToggle, false);
 

//reusable class toggle function:
function classToggle(id, className) {
    return document.getElementById(id).classList.toggle(className);
}

window.onscroll = function() { scrollBackground() };

function scrollBackground() {
    const navbar = document.getElementById("navbar");

    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.classList.add("blue");
        navs.forEach(nav => nav.classList.add("blue"));
    } else {
        navbar.classList.remove("blue");
        navs.forEach(nav => nav.classList.remove("blue"));
    }
}

//collapse dropdown if user clicks outside box
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      const dropdowns = document.getElementsByClassName("dropdown-content");
      for (let e of dropdowns) {
        if (e.classList.contains('toggle-reveal')) {
          e.classList.remove('toggle-reveal');
       
        }
      }
      
    }
  } 