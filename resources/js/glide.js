import Glide from '@glidejs/glide'

var glideElement = document.querySelector('.glide');

// If the element exists, initialize Glide
if (glideElement) {
    var glide = new Glide('.glide', {
        type: 'carousel',
        autoplay: false
    }).mount();
} else {
    // Handle the case where the element does not exist
    console.error("Element with class 'glide' not found.");
}