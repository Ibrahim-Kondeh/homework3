<?php
$pageTitle = "Home";
include "view-header.php";
?>
<style>
    /* Your existing styles */
    body {
        background-image: url('https://img.freepik.com/premium-photo/football-soccer-green-grass-field-conner_256301-166.jpg?w=2000');
       
        background-size: cover;
        COLOR: red;
    
    }
</style>

<h1>RAISE THE GAME</h1>

<div class="container">
    <div class="row">
        <!-- Video Section -->
        <div class="col-md-6">
            <h2>Last Week Highlights</h2>
            <div class="card-group">
                <!-- Video 1 -->
                <div class="card">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/gFr0zD8Ofqg" frameborder="0" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title">Highlight 1</h5>
                        <!-- Add video description here -->
                    </div>
                </div>
                <!-- Video 2 -->
                <div class="card">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/nq2zdQGV2g0" frameborder="0" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title">Highlight 2</h5>
                        <!-- Add video description here -->
                    </div>
                </div>
                <!-- Video 3 - Replace with embeddable link -->
                <div class="card">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/bIk8vbbuAAw" frameborder="0" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title">Highlight 3</h5>
                        <!-- Add video description here -->
                    </div>
                </div>
                <!-- Video 4 - Replace with embeddable link -->
                <div class="card">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/dZUvGs4xQkA" frameborder="0" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title">Highlight 4</h5>
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
