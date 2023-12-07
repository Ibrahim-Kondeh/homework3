<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>RAISE THE GAME</h1>

<div class="container">
    <div class="row">
        <!-- Video Section -->
        <div class="col-md-6">
            <h2>Last Week Highlights</h2>
            <div class="card-group">
                <!-- Video 1 -->
                <div class="card">
                    <video src="..." class="object-fit-contain" autoplay></video>
                    <div class="card-body">
                        <h5 class="card-title">Highlight 1</h5>
                        <!-- Add video description here -->
                    </div>
                </div>
                <!-- Video 2 -->
                <div class="card">
                    <video src="https://www.youtube.com/watch?v=nq2zdQGV2g0" class="object-fit-cover" autoplay></video>
                    <div class="card-body">
                        <h5 class="card-title">Highlight 2</h5>
                        <!-- Add video description here -->
                    </div>
                </div>
                <!-- Video 3 -->
                <div class="card">
                    <video src="..." class="object-fit-fill" autoplay></video>
                    <div class="card-body">
                        <h5 class="card-title">Highlight 3</h5>
                        <!-- Add video description here -->
                    </div>
                </div>
                <!-- Video 4 -->
                <div class="card">
                    <video src="..." class="object-fit-scale" autoplay></video>
                    <div class="card-body">
                        <h5 class="card-title">Highlight 4</h5>
                        <!-- Add video description here -->
                    </div>
                </div>
                <!-- Video 5 -->
                <div class="card">
                    <video src="..." class="object-fit-none" autoplay></video>
                    <div class="card-body">
                        <h5 class="card-title">Highlight 5</h5>
                        <!-- Add video description here -->
                    </div>
                </div>
            </div>
        </div>

           <<div class="col-md-6">
            <h2>Slideshow</h2>
            <div class="card-group">
        <div class="card">
        <div class="mySlides fade"><img src="https://dynaimage.cdn.cnn.com/cnn/c_fill,g_auto,w_1200,h_675,ar_16:9/https%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F221104122416-arsenal-celebrate-card.jpg" alt="Highlight 2"></div>
        <div class="mySlides fade"><img src="https://i.eurosport.com/2023/11/13/3825443-77741788-2560-1440.jpg" alt="Highlight 2"></div>
        <div class="mySlides fade"><img src="https://icibeyrouth.com/wp-content/uploads/2022/05/mbape.jpg" alt="Highlight 2"></div>
        <div class="mySlides fade"><img src="https://i2-prod.mirror.co.uk/sport/article30851283.ece/ALTERNATES/s1200d/0_GettyImages-1655137419.jpg" alt="Highlight 1"></div>
        <div class="mySlides fade"><img src="https://www.mpl.live/blog/wp-content/uploads/2021/09/man-city-1.jpg" alt="Highlight 2"></div>
     </div>
                <!-- Add more slideshow images wrapped in cards as needed -->
            </div>
        </div>
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
    /* Your existing styles */
    .card-group {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: 10px;
    }
    .card {
        width: calc(50% - 10px);
        /* Adjust the card width and gap as needed */
    }
    .card-img-top {
        height: 300px; /* Set a uniform height for the slideshow images */
        object-fit: cover;
    }
</style>

<?php
include "view-footer.php";
?>
