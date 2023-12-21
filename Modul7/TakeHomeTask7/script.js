document.addEventListener('DOMContentLoaded', function () {
    const coffeeMenu = [
    ];

    const imageSlides = [
        'coffee1.jpg',
        'coffe2.jpg',
        'croffle.jpg',
    ];

    function displayImageSlideshow() {
        const slideshowContainer = document.querySelector('.slideshow-container');

        const imageSlidesHTML = imageSlides.map(image => `
            <div class="slide">
                <img src="${image}" alt="Coffee Image">
            </div>
        `).join('');

        slideshowContainer.innerHTML = imageSlidesHTML;

        let slideIndex = 0;
        showSlides();

        function showSlides() {
            const slides = document.querySelectorAll('.slide');

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }

            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            slides[slideIndex - 1].style.display = 'block';

            setTimeout(showSlides, 2000); // Change slide every 2 seconds
        }
    }

    // Call the function to display image slideshow
    displayImageSlideshow();
});
