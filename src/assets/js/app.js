// Navigation
const bar = document.querySelector('.category-bar');
const btnLeft = document.querySelector('.scroll-btn.left');
const btnRight = document.querySelector('.scroll-btn.right');

function updateArrows() {
    const maxScroll = bar.scrollWidth - bar.clientWidth;

    if (bar.scrollLeft <= 5) {
        btnLeft.style.opacity = "0";
        btnLeft.style.pointerEvents = "none";
    } else {
        btnLeft.style.opacity = "1";
        btnLeft.style.pointerEvents = "all";
    }

    if (bar.scrollLeft >= maxScroll - 5) {
        btnRight.style.opacity = "0";
        btnRight.style.pointerEvents = "none";
    } else {
        btnRight.style.opacity = "1";
        btnRight.style.pointerEvents = "all";
    }
}

bar.addEventListener('scroll', updateArrows);
window.addEventListener('resize', updateArrows);

const scrollAmount = 200;

btnLeft.addEventListener('click', () => {
    bar.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
});

btnRight.addEventListener('click', () => {
    bar.scrollBy({ left: scrollAmount, behavior: 'smooth' });
});

updateArrows();