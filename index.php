<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>HomeWork 6</h1>

<div class="video-container">
    <video id="homeVideo" playsinline controls width="640" height="360">
        <source src="your-video-file.mp4" type="video/mp4">
        <!-- Add additional source elements for different video formats if needed -->
        Your browser does not support the video tag.
    </video>
</div>

<div class="highlights-container">
    <h2>Last Week Highlights</h2>
    <div id="highlightSlideshow" class="slideshow">
        <!-- Add your image elements with alt text for accessibility -->
        <img src="highlight1.jpg" alt="Highlight 1">
        <img src="highlight2.jpg" alt="Highlight 2">
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
