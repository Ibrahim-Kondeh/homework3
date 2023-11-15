<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>HomeWork 6</h1>

<div class="highlights-container">
    <h2>Last Week Highlights - Glide Carousel</h2>
    <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <!-- Add your Glide carousel image elements with alt text for accessibility -->
                <li class="glide__slide"><img src="https://media.gq-magazine.co.uk/photos/640b02e70a046f0156dd5365/16:9/w_2560%2Cc_limit/GettyImages-1247252693.jpg" alt="Highlight 1"></li>
                <li class="glide__slide"><img src="https://www.mpl.live/blog/wp-content/uploads/2021/09/man-city-1.jpg" alt="Highlight 2"></li>
                <!-- Add more images as needed -->
            </ul>
        </div>
    </div>
</div>

<div class="slideshow-container">
    <h2>Last Week Highlights - Manual Slideshow</h2>
    <!-- Add your manual slideshow image elements with alt text for accessibility -->
    <div class="mySlides fade"><img src="https://dynaimage.cdn.cnn.com/cnn/c_fill,g_auto,w_1200,h_675,ar_16:9/https%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F221104122416-arsenal-celebrate-card.jpg" alt="Highlight 2"></div>
    <div class="mySlides fade"><img src="https://i.eurosport.com/2023/11/13/3825443-77741788-2560-1440.jpg" alt="Highlight 2"></div>
    <div class="mySlides fade"><img src="https://icibeyrouth.com/wp-content/uploads/2022/05/mbape.jpg" alt="Highlight 2"></div>
    <div class="mySlides fade"><img src="https://i2-prod.mirror.co.uk/sport/article30851283.ece/ALTERNATES/s1200d/0_GettyImages-1655137419.jpg" alt="Highlight 1"></div>
    <div class="mySlides fade"><img src="https://www.mpl.live/blog/wp-content/uploads/2021/09/man-city-1.jpg" alt="Highlight 2"></div>
    <!-- Add more images as needed -->
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
            animationDuration: 800, // Animation duration in milliseconds
        }).mount();
        
        // Initialize the manual slideshow
        let slideIndex = 0;
        function showSlides() {
            const slides = document.getElementsByClassName("mySlides");

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 5000); // Change slide every 5 seconds (adjust as needed)
        }
        showSlides();
    });
</script>

<style>
    /* Add your styles for highlights container and Glide container as needed */
    /* Add your styles for manual slideshow container as needed */
    .highlights-container,
    .slideshow-container {
        margin-top: 20px;
        max-width: 800px; /* Set the maximum width of the containers */
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

    .mySlides {
        display: none;
        width: 100%; /* Make images fill the container */
        height: auto;
    }
</style>

<?php
include "view-footer.php";
?>
