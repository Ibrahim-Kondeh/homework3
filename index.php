<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>HomeWork 6</h1>

<div class="highlights-container">
    <h2>Last Week Highlights</h2>
    <div class="slideshow-container">
        <!-- Add your image elements with alt text for accessibility -->
        <div class="mySlides fade"><img src="https://dynaimage.cdn.cnn.com/cnn/c_fill,g_auto,w_1200,h_675,ar_16:9/https%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F221104122416-arsenal-celebrate-card.jpg" alt="Highlight 2"></div>
        <div class="mySlides fade"><img src="https://icibeyrouth.com/wp-content/uploads/2022/05/mbape.jpg" alt="Highlight 2"></div>
        <div class="mySlides fade"><img src="https://i2-prod.mirror.co.uk/sport/article30851283.ece/ALTERNATES/s1200d/0_GettyImages-1655137419.jpg" alt="Highlight 1"></div>
        <div class="mySlides fade"><img src="https://www.mpl.live/blog/wp-content/uploads/2021/09/man-city-1.jpg" alt="Highlight 2"></div>
        <!-- Add more images as needed -->
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
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
    /* Add your styles for highlights container and slideshow container as needed */
    .highlights-container {
        margin-top: 20px;
        max-width: 800px; /* Set the maximum width of the highlights container */
        margin-left: auto;
        margin-right: auto;
    }

    .slideshow-container {
        max-width: 100%;
        position: relative;
        margin: auto;
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
