$(document).ready(function() {
    let currentIndex = 0;
    const slides = $('.slide');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.hide();
        slides.eq(index).fadeIn();
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    }

    // Initialize slider
    showSlide(currentIndex);

    // Set interval for auto-sliding every 3 seconds
    setInterval(nextSlide, 3000);
});