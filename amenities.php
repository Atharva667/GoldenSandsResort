<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amenities</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Roboto', sans-serif;
            background: url('Image/hotel.webp') no-repeat center center fixed;
            background-size: cover; /* Ensures the background covers the entire page */
            color: white;
          
        }

        /* Make navbar transparent and span entire page */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* background-color: transparent; Fully transparent background */
            /* transition: background-color 0.4s ease; Smooth background transition */
            padding: 20px 30px;
            transform: translateZ(0); /* Forces hardware acceleration */
            width: 100%;
            position: absolute; /* Keep navbar at the top */
            will-change: background-color; /* Example for hinting to the browser */
            z-index: 1000; /* Make sure navbar stays on top */
            box-sizing:border-box;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }

        .nav-links li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            padding: 8px 15px;
            border-radius: 25px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .nav-links li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        /* Content styling with background image */
        .content {
            text-align: center;
            padding: 100px 20px; /* Added padding to bring content lower */
            color: white;
        }

        .content h1 {
            font-size: 3rem; /* Larger font size */
            margin-bottom: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .content p {
            font-size: 1.2rem;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
            font-family: 'Roboto', sans-serif;
        }

        /* Amenities Section */
        .amenities-section {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 50px 20px;
           
           
        }

        .amenity-card {
            background-color: rgba(255, 255, 255, 0.9); /* Light background for readability */
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1); /* Lighter shadow */
            border-radius: 10px;
            overflow: hidden;
            margin: 15px;
            flex: 1 1 30%;
            max-width: 30%;
            min-width: 280px;
            color: #333;
        }

        .amenity-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .amenity-card h3 {
            font-size: 1.5rem;
            color: #333;
            padding: 15px;
            font-family: 'Playfair Display', serif;
        }

        .amenity-card p {
            padding: 0 15px 15px 15px;
            color: #555;
            font-family: 'Roboto', sans-serif;
        }

        /* Footer */
        .footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 10px 20px;
           
            text-align: center;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 10px;
            margin-top: 10px;
            font-family: 'Roboto', sans-serif;
            margin-bottom: 0.1rem;
        }

      

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .content h1 {
                font-size: 2.5rem;
            }

            .amenities-section {
                flex-direction: column;
                align-items: center;
            }

            .amenity-card {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar" id="navbar">
        <ul class="nav-links">
            <li><a href="homepage.php">Home</a></li> <!-- Link back to the homepage -->
        </ul>
    </nav>

    <div class="content">
        <h1>Hotel Amenities</h1>
        <p>Experience the luxurious amenities we offer to make your stay comfortable and enjoyable.</p>
    </div>

    <div class="amenities-section">
        <!-- Amenity 1 -->
        <div class="amenity-card">
            <img src="Image/swimmingpool.webp" alt="Swimming Pool" loading="lazy">
            <h3>Swimming Pool</h3>
            <p>Relax by our stunning swimming pool, perfect for unwinding after a long day.</p>
        </div>

        <!-- Amenity 2 -->
        <div class="amenity-card">
            <img src="Image/spa.webp" alt="Spa"  loading="lazy">
            <h3>Spa & Wellness</h3>
            <p>Indulge in a variety of spa treatments designed to rejuvenate and refresh you.</p>
        </div>

        <!-- Amenity 3 -->
        <div class="amenity-card">
            <img src="Image/gym.webp" alt="Gym" loading="lazy" >
            <h3>Fitness Center</h3>
            <p>Stay active in our well-equipped fitness center, available 24/7 for your convenience.</p>
        </div>

        <!-- Amenity 4 -->
        <div class="amenity-card">
            <img src="Image/restaurant.webp" alt="Restaurant" loading="lazy">
            <h3>Restaurant</h3>
            <p>Enjoy gourmet dining with a variety of dishes made from the freshest ingredients.</p>
        </div>

        <!-- Amenity 5 -->
        <div class="amenity-card">
            <img src="Image/conference.webp" alt="Conference Room" loading="lazy">
            <h3>Conference Rooms</h3>
            <p>Host your events in our spacious conference rooms equipped with modern technology.</p>
        </div>

        <!-- Amenity 6 -->
        <div class="amenity-card">
            <img src="Image/lounge.webp" alt="Lounge" loading="lazy">
            <h3>Executive Lounge</h3>
            <p>Relax in our exclusive executive lounge with stunning views and a tranquil atmosphere.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-bottom">
            <p>&copy; 2024 Golden Sands Resort. All rights reserved.</p>
        </div>
    </footer>

    <script>
     
    // Throttle the scroll event to improve performance
    let lastKnownScrollPosition = 0;
let ticking = false;

function handleScroll(scrollPos) {
    const navbar = document.getElementById('navbar');
    if (scrollPos > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
}

window.addEventListener('scroll', function () {
    lastKnownScrollPosition = window.scrollY;

    if (!ticking) {
        window.requestAnimationFrame(function () {
            handleScroll(lastKnownScrollPosition);
            ticking = false;
        });

        ticking = true;
    }
});

</script>

   
</body>

</html>




