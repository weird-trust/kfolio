class Slideshow {
  constructor(element) {
    this.element = element;
    this.slides = element.getElementsByClassName('slides');
    this.outputTag = element.querySelector('.counter span');
    this.outputTag = element.querySelector('.counter span');
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
      this.outputTag.innerHTML = this.currentSlide + 1;
      this.outputTagLength = this.slides.length;
    });
  }
}
const slideshows = document.getElementsByClassName('slideshow');

for (const slideshow of slideshows) {
  new Slideshow(slideshow);
}

const lazyImages = [].slice.call(document.querySelectorAll('.lazy-loaded-image.lazy'));

let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      let lazyImage = entry.target;
      lazyImage.src = lazyImage.dataset.src;
      lazyImage.classList.remove('lazy');
      lazyImageObserver.unobserve(lazyImage);
    }
  });
});

lazyImages.forEach(function (lazyImage) {
  lazyImageObserver.observe(lazyImage);
});
