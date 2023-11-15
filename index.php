<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>HomeWork 6</h1>

<div class="highlights-container">
    <h2>Last Week Highlights</h2>
    <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <!-- Add your image elements with alt text for accessibility -->
                <li class="glide__slide"><img src="https://media.gq-magazine.co.uk/photos/640b02e70a046f0156dd5365/16:9/w_2560%2Cc_limit/GettyImages-1247252693.jpg" alt="Highlight 1"></li>
                <li class="glide__slide"><img src="https://www.mpl.live/blog/wp-content/uploads/2021/09/man-city-1.jpg" alt="Highlight 2"></li>
                <!-- Add more images as needed -->
            </ul>
        </div>
        <!-- Add Navigation -->
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize Glide for image slideshow
        new Glide('.glide', {
            type: 'carousel',
            startAt: 0, // Start at the first slide
            perView: 1, // Show one slide at a time
            autoplay: 5000, // Change slide every 5 seconds (adjust as needed)
            hoverpause: true, // Pause autoplay on hover
        }).mount();
    });
</script>

<style>
    /* Add your styles for highlights container and Glide container as needed */
    .highlights-container {
        margin-top: 20px;
        max-width: 800px; /* Set the maximum width of the highlights container */
        margin-left: auto;
        margin-right: auto;
    }

    .glide {
        width: 100%;
        max-width: 800px; /* Set the maximum width of the Glide container */
        margin: 0 auto;
    }

    .glide__slides img {
        width: 100%; /* Make images fill the container */
        height: auto;
    }
</style>

<?php
include "view-footer.php";
?>
