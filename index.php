<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>HomeWork 6</h1>

<div class="highlights-container">
    <h2>Last Week Highlights</h2>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Add your image elements with alt text for accessibility -->
            <div class="swiper-slide"><img src="highlight1.jpg" alt="Highlight 1"></div>
            <div class="swiper-slide"><img src="highlight2.jpg" alt="Highlight 2"></div>
            <!-- Add more images as needed -->
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize Swiper for image slideshow
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 5000, // Change slide every 5 seconds (adjust as needed)
            },
        });
    });
</script>

<style>
    /* Add your styles for highlights container and Swiper container as needed */
    .highlights-container {
        margin-top: 20px;
        max-width: 800px; /* Set the maximum width of the highlights container */
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-container {
        width: 100%;
        height: 100%;
    }
</style>

<?php
include "view-footer.php";
?>
