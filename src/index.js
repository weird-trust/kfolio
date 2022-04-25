const slideshows = document.getElementsByClassName('slideshow');

for (const slideshow of slideshows) {
  const slides = slideshow.getElementsByClassName('slides');
  slideshow.firstElementChild.className = 'slides showing ';
  let currentSlide = 0;

  slideshow.addEventListener('click', (event) => {
    event.preventDefault();
    slides[currentSlide].className = 'slides';
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].className = 'slides showing';
  });
}
