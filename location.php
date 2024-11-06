<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: 'Arial', 'Helvetica', sans-serif; /* Best font family */
            background: url('Image/hotel.webp') no-repeat center fixed;
            background-size: cover; /* Ensure background covers the full viewport */
        }

        * {
            box-sizing: border-box; /* Ensure padding and borders are included in the total width/height */
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: transparent; /* Start fully transparent */
            padding: 10px 30px;
            height: 10%;
            position: fixed; /* Keep navbar fixed on top */
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Keep it above all content */
            transition: background-color 0.3s ease; /* Smooth background color transition */
        }

        /* Navbar background turns solid on scroll */
        

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1rem;
        }

        .nav-links li a {
             
            color: white; /* White text for contrast */
            padding: 10px 15px; /* Padding for comfort */
            border-radius: 30px; /* Rounded corners */
            text-decoration: none; /* Remove underline */
            font-weight: bold; /* Bold text */
            font-size: 1rem; /* Font size */
            transition: background-color 0.3s, transform 0.2s; /* Smooth transition */
        }

        .nav-links li a:hover {
            background-color: #0056b3; /* Darker shade on hover */
            transform: scale(1.05); /* Slightly enlarge on hover */
        }

        .container {
            text-align: center;
            padding: 120px 2% 2%; /* Increased top padding for the fixed navbar */
            color: aliceblue;
            margin: 0 auto;
        }

        h1 {
            font-size: 2.5em; /* Increase font size */
            margin-bottom: 20px; /* Space below heading */
            font-weight: bold; /* Bold text */
          
        }

        p {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 1.1rem; /* Font size */
            margin-bottom: 30px; /* Space below paragraph */
        }

        .location-info {
            font-size: 1.2rem; /* Font size for location details */
            margin-top: 20px;
            padding: 10px;
            background-color: #f5f5f5; /* Light background for emphasis */
            border-radius: 8px; /* Rounded corners */
            display: inline-block; /* Center the location info */
        }

        .map {
            margin-top: 30px;
            text-align: center;
        }

        .hotel-image {
            margin: 30px auto; /* Center hotel image */
            max-width: 800px; /* Set max width for hotel image */
        }

        .hotel-image img {
            width: 100%; /* Responsive image */
            height: auto; /* Maintain aspect ratio */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        .footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 10px 20px;
            text-align: center;
            margin-top:auto;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 10px;
            margin-top: 10px;
        }

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .container {
                padding: 100px 2% 2%; /* Adjust padding for mobile */
            }

            h1 {
                font-size: 2rem; /* Smaller font size */
            }

            .location-info {
                font-size: 1rem; /* Smaller font size for location info */
            }

            .map iframe {
                width: 100%; /* Full width for map on small screens */
                height: auto; /* Auto height */
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="homepage.php">Home</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Our Location</h1>
        <p>We are conveniently located at:</p>
        <div class="location-info">
            <strong style = "color: black;">562 Delhi, India</strong>
        </div>

        <div class="hotel-image">
        </div>

        <div class="map">
            <h2>Find Us on the Map</h2>
            <!-- Embed Google Maps -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224797.41793550943!2d77.06906379029114!3d28.55005866461031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2b7b2610ed1%3A0x949ef71fdedce64f!2s562%20Delhi%2C%20India!5e0!3m2!1sen!2sus!4v1693880656803!5m2!1sen!2sus" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"></iframe>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-bottom">
            <p>&copy; 2024 Golden Sands Resort. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- JavaScript for Navbar Scroll Effect -->
    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
