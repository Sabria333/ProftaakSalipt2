const buttons = document.querySelectorAll("[data-carousel-button]");

const nextBtn = document.querySelector('[data-carousel-button="next"]');

setInterval(() => {
  nextBtn.click();
}, 2500);

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    // Get current possition of the picture in html
    const offset = button.dataset.carouselButton === "next" ? 1 : -1;
    const slides = button
      .closest("[data-carousel]")
      .querySelector("[data-slides]");
    const activeSlide = slides.querySelector("[data-active]");
    let newIndex = [...slides.children].indexOf(activeSlide) + offset;
    // If at last index of photo start from the beingin
    if (newIndex < 0) newIndex = slides.children.length - 1;
    if (newIndex >= slides.children.length) newIndex = 0;
    // Put the new image in html body
    slides.children[newIndex].dataset.active = true;
    // Delete the old image that was in the body.
    delete activeSlide.dataset.active;
  });
});
