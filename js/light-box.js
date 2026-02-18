// light-box.js
const lightBox = (function() {
    let images;
    let currentImageIndex = 0;

    function init() {
        console.log("Lightbox module loaded");

        images = document.querySelectorAll('.clickableImage');
        if (!images.length) return;

        images.forEach((img, index) => {
            img.addEventListener('click', () => enlargeImage(img, index));
        });

        document.getElementById("previous-btn").addEventListener('click', showPreviousImage);
        document.getElementById("next-btn").addEventListener('click', showNextImage);
        document.getElementById("close-btn").addEventListener('click', hideImage);
        document.getElementById("enlarged-image").addEventListener('click', hideImage);
    }

    function enlargeImage(img, index) {
        currentImageIndex = index;
        const enlargedImg = document.getElementById("enlarged-img");
        enlargedImg.src = img.getAttribute('data-fullsize') || img.src;
        document.getElementById("enlarged-image").style.display = "flex";
    }

    function showPreviousImage(event) {
        event.stopPropagation();
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        updateEnlargedImage();
    }

    function showNextImage(event) {
        event.stopPropagation();
        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateEnlargedImage();
    }

    function hideImage() {
        document.getElementById("enlarged-image").style.display = "none";
    }

    function updateEnlargedImage() {
        const enlargedImg = document.getElementById("enlarged-img");
        enlargedImg.src = images[currentImageIndex].getAttribute('data-fullsize') || images[currentImageIndex].src;
    }

    return { init };
})();
