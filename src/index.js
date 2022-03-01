console.log("It's working!");
// this is the data for holding which image is on air
let pageNumber = 0;

const slider = document.querySelector('.slide');

slider.dataset.slide;
console.log(slider.dataset.slide);

// have the content for these slides
const slides = [
  {
    title: 'img.title 01',
    image: '<img src="assets/img/1.jpg" alt="1"/>',
  },
  {
    title: 'img.title 02',
    image: '<img src="assets/img/2.jpg" alt="2"/>',
  },
  {
    title: 'img.title 03',
    image: '<img src="assets/img/3.jpg" alt="3"/>',
  },
  {
    title: 'img.title 04',
    image: '<img src="assets/img/4.jpg" alt="4"/>',
  },
];

// pick the relevant tags
const nextTag = document.querySelector('section');
const titleTag = document.querySelector('section h1');
const outputTag = document.querySelector('section .slide');

// looping over the images
const next = function () {
  pageNumber = pageNumber + 1;

  if (pageNumber > slides.length - 1) {
    pageNumber = 0;
  }

  updateSection();
};

// take the of the arrays and push it
const updateSection = function () {
  titleTag.innerHTML = slides[pageNumber].title;
  outputTag.innerHTML = slides[pageNumber].image;
};

// on click of nextTag(image), run this
nextTag.addEventListener('click', function () {
  next();
});
