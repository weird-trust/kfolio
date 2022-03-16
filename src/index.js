'use strict';

document.addEventListener('DOMContentLoaded', () => {
  const slideshows = document.getElementsByClassName('slideshow');
  for (const slideshow of slideshows) {
    slideshow.firstElementChild.className = 'slides showing ';
  }
  let currentSlide = 0;
  const slides = document.getElementsByClassName('slides');
  // slides[0].className = 'slides showing ';
  for (const slide of slides) {
    slide.addEventListener('click', (event) => {
      event.preventDefault();
      slides[currentSlide].className = 'slides ';
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].className = 'slides showing';
    });
  }
});
