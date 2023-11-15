<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>HomeWork 6</h1>

<div class="highlights-container">
    <h2>Last Week Highlights</h2>
    <div class="slick-carousel">
        <!-- Add your image elements with alt text for accessibility -->
        <div><img src="https://media.gq-magazine.co.uk/photos/640b02e70a046f0156dd5365/16:9/w_2560%2Cc_limit/GettyImages-1247252693.jpg" alt="Highlight 1"></div>
        <div><img src="https://www.mpl.live/blog/wp-content/uploads/2021/09/man-city-1.jpg" alt="Highlight 2"></div>
        <!-- Add more images as needed -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize Slick carousel for image slideshow
        $('.slick-carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000, // Change slide every 5 seconds (adjust as needed)
        });
    });
</script>

<style>
    /* Add your styles for highlights container and Slick carousel as needed */
    .highlights-container {
        margin-top: 20px;
        max-width: 800px; /* Set the maximum width of the highlights container */
        margin-left: auto;
        margin-right: auto;
    }

    .slick-carousel {
        width: 100%;
    }

    .slick-carousel img {
        width: 100%; /* Make images fill the container */
        height: auto;
    }
</style>

<?php
include "view-footer.php";
?>
