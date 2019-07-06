"use strict";

//only execute function every 20 milliseconds to prevent performance issues
function debounce(func, wait = 20, immediate = true) {
  var timeout;
  return function() {
      var context = this,
          args = arguments;
      var later = function() {
          timeout = null;
          if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
  };
}

//function to get position of element relative to document
function offset(el) {
  var rect = el.getBoundingClientRect(),
  scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
  scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
}

//slidein function starts here
const images = [...document.querySelectorAll('.slide-in')];

const pageYs = [];

function checkSlide(e) {

    images.forEach((img, i) => {
      const offsetImg = offset(img);
      
      console.log(i + ': ' + offsetImg.top);
        //halfway through image
        const slideInAt = (window.scrollY + window.innerHeight) - img.clientHeight / 2;
        //bottom of image
        const imageBottom = offsetImg.top + img.clientHeight;
        const isHalfShown = slideInAt > offsetImg.top;
        const isNotScrolledPast = window.scrollY < imageBottom;
        if (isHalfShown && isNotScrolledPast) {
            img.classList.add('active');
        } else {
            img.classList.remove('active');
        }
    });


}


window.addEventListener('scroll', debounce(checkSlide));