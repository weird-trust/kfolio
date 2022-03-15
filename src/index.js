'use strict';

document.addEventListener('DOMContentLoaded', () => {
  const slides = document.getElementsByClassName('slides');
  let currentSlide = 0;
  slides[0].className = 'slides showing ';
  for (const slide of slides) {
    slide.addEventListener('click', (event) => {
      slides[currentSlide].className = 'slides ';
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].className = 'slides showing';
    });
  }
});
