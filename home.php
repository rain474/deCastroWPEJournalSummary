<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="format1.css">
    <link rel="icon" type="image/x-icon" href="homeicon.png">
</head>
<body>
    <div class="image-container">
        <div class="content">
            <header class="navbar">
                <div class="logo" style="color: white; margin-left: 20px;">
                    <!-- Displaying the username dynamically -->
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo "WELCOME " . htmlspecialchars($_SESSION['username']);
                    }
                    ?>
                </div>
                <nav>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="dumaguete.php">Dumaguete</a></li>
                        <li><a href="Classroom.html">Gallery</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                    </ul>
                </nav>
            </header>

            <div class="main-text">
                <div class="text-and-carousel">
                    <div class="dumaguete-container">
                        <h1 class="dumaguete-header">Hello There!</h1>
                        <p class="dumaguete-paragraph">Welcome to Gentle Getaway, your ultimate guide to exploring the vibrant charm of the City of Gentle People! 
                            This tourism website highlights Dumaguete's rich culture, stunning natural attractions, and exciting activities. From its iconic landmarks 
                            and serene beaches to its delicious local cuisine and welcoming community, our site is your gateway to discovering why Dumaguete is a must-visit 
                            . Let us help you plan an unforgettable journey through the heart of Negros Oriental!</p>

                            <a href="more-details.html" class="read-more">Learn More</a>
                    </div>
                    <div class="carousel-container">
                        <div class="carousel">
                            <div class="carousel-item"><img src="SUBUS.jpeg" alt="Image 1"></div>
                            <div class="carousel-item"><img src="SUCHURCH (1).jpg" alt="Image 2"></div>
                            <div class="carousel-item"><img src="SULUCE.jpg" alt="Image 3"></div>
                            <div class="carousel-item"><img src="belltower.png" alt="Image 4"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="blog-section">
                <h2>CITY HIGHLIGHTS</h2>
                <p></p>
                <img src="SUBUS.jpeg">
                <img src="SUCHURCH (1).jpg">
                <img src="SULUCE.jpg">
              
                <div class="blog-post">
                    <p>ADADASDADASDSAD.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
