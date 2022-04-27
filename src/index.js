class Slideshow {
  constructor(element) {
    this.element = element;
    this.slides = element.getElementsByClassName('slides');
    this.element.firstElementChild.className = 'slides showing';
    this.currentSlide = 0;
    this.bindEvents();
  }
  bindEvents() {
    this.element.addEventListener('click', (event) => {
      event.preventDefault();
      this.slides[this.currentSlide].className = 'slides';
      this.currentSlide = (this.currentSlide + 1) % this.slides.length;
      this.slides[this.currentSlide].className = 'slides showing';
    });
  }
}
const slideshows = document.getElementsByClassName('slideshow');

for (const slideshow of slideshows) {
  new Slideshow(slideshow);
}
