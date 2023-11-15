<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>HomeWork 6</h1>

<div class="video-container">
    <iframe width="640" height="360" src="https://www.youtube.com/watch?v=EuNGR4JoJsY" frameborder="0" allowfullscreen></iframe>
</div>

<div class="highlights-container">
    <h2>Last Week Highlights</h2>
    <div id="highlightSlideshow" class="slideshow">
        <!-- Add your image elements with alt text for accessibility -->
        <img src="https://e0.365dm.com/23/10/768x432/skysports-arsenal-saka-jesus_6308558.jpg?20231004120130" alt="Highlight 1">
        <img src="https://media.gq-magazine.co.uk/photos/640b02e70a046f0156dd5365/16:9/w_2560%2Cc_limit/GettyImages-1247252693.jpg" alt="Highlight 2">
        <!-- Add more images as needed -->
    </div>
</div>

<script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css">

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize Plyr for video playback
        const player = new Plyr('#homeVideo');

        // Initialize the image slideshow
        const highlightSlideshow = document.getElementById('highlightSlideshow');
        let currentIndex = 0;

        function showNextImage() {
            const images = highlightSlideshow.children;

            if (images.length > 1) {
                images[currentIndex].classList.remove('visible');
                currentIndex = (currentIndex + 1) % images.length;
                images[currentIndex].classList.add('visible');
                setTimeout(showNextImage, 5000); // Change slide every 5 seconds (adjust as needed)
            }
        }

        // Show the first image and start the slideshow
        if (highlightSlideshow.children.length > 0) {
            highlightSlideshow.children[currentIndex].classList.add('visible');
            setTimeout(showNextImage, 5000); // Change slide every 5 seconds (adjust as needed)
        }
    });
</script>

<style>
    /* Add your styles for video and highlights container as needed */
    .video-container {
        margin-top: 20px;
        max-width: 800px; /* Set the maximum width of the video container */
        margin-left: auto;
        margin-right: auto;
    }

    .highlights-container {
        margin-top: 20px;
    }

    .slideshow {
        display: none;
    }

    .visible {
        display: block;
    }
</style>

<?php
include "view-footer.php";
?>
