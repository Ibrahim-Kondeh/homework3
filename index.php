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
                <li class="glide__slide"><img src="https://example.com/path/to/image3.jpg" alt="Highlight 3"></li>
                <li class="glide__slide"><img src="https://example.com/path/to/image4.jpg" alt="Highlight 4"></li>
                <!-- Add more images as needed -->
            </ul>
        </div>
    </div>
</div>

<div class="sponsors-container">
    <h2>Our Sponsors</h2>
    <div class="slick-sponsors">
        <!-- Add your sponsor elements here -->
        <div><img src="https://miro.medium.com/v2/resize:fit:2400/1*aIdthtYy64DmYxUJ5p-zuA.jpeg" alt="Sponsor 1"></div>
        <div><img src="sponsor2.jpg" alt="Sponsor 2"></div>
        <!-- Add more sponsors as needed -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize Glide for highlights slideshow
        new Glide('.glide', {
            type: 'carousel',
            startAt: 0, // Start at the first slide
            perView: 1, // Show one slide at a time
            autoplay: 5000, // Change slide every 5 seconds (adjust as needed)
            hoverpause: true, // Pause autoplay on hover
            animationDuration: 800, // Animation duration in milliseconds
        }).mount();

        // Initialize Slick for sponsors carousel
        $('.slick-sponsors').slick({
            slidesToShow: 3, // Show 3 sponsors at a time (adjust as needed)
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000, // Change sponsor every 3 seconds (adjust as needed)
        });
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
    }

    .glide__slides img {
        width: 100%; /* Make images fill the container */
        height: auto;
    }

    /* Add your styles for sponsors container and Slick container as needed */
    .sponsors-container {
        margin-top: 20px;
        max-width: 800px; /* Set the maximum width of the sponsors container */
        margin-left: auto;
        margin-right: auto;
    }

    .slick-sponsors {
        width: 100%;
    }

    .slick-sponsors img {
        width: 100%; /* Make sponsor images fill the container */
        height: auto;
    }
</style>

<?php
include "view-footer.php";
?>
