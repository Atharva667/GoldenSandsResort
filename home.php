<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Sands Resort</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html, body {
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
    font-family: 'Arial', 'Helvetica', sans-serif;
    background: linear-gradient(to bottom right, #f8f9fa, #e9ecef);
    color: #333;
}

body {
    background-image: url('Image/hotel.webp');
    background-size: cover;
    background-position: center;
    background-attachment: scroll;
    color: white;
}

* {
    box-sizing: border-box;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:rgba(0, 0, 0, 0.56); /* Semi-transparent background */
    backdrop-filter: blur(8px); /* Adjust the blur value as needed */
    padding: 10px 30px;
    position: fixed;
    top: 0;
    will-change: background-color; /* Hint to the browser */
    width: 100%;
    filter: blur(0);
    z-index: 2;
    transition: background-color 0.5s; Optional: for smooth transitions
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
    color:
}

/* Hero Section */
.hero {
    /* background-image: url('Image/hotelhome.jpg'); */
    background-size: cover;
    background-position: center;
    height: 80vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

.hero h1 {
    font-size: 4em;
    margin: 0;
}

/* Content Section */
.content {
    text-align: center;
    padding: 50px 20px;
    max-width: 800px;
    margin: 20px auto; /* Adjusted margin */
    background: rgb(22 22 22); /* Changed transparency */
    border-radius: 30px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

p {
    font-size: 1.1rem;
    margin: 20px 0;
    line-height: 1.8;
    color: #9b9b9b;
}

/* Footer */
.footer {
    background-color: rgba(0, 0, 0, 0.9);
    color: white;
    padding: 30px;
    text-align: center;
    position: relative;
    bottom: 0;
    width: 100%;
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    padding-top: 10px;
    margin-top: 10px;
}

/* Scroll Effect */
@media screen and (min-width: 768px) {
    .navbar.scrolled {
        padding: 10px 30px;
    }

    .nav-links li a {
        font-size: 0.9rem;
        padding: 10px 10px;
    }

    .hero h1 {
        font-size: 3.5em;
    }
}

    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="logo">
            <a href="homepage.php" style="color: white; font-size: 1.5em; font-weight: bold; text-decoration: none;">
                Golden Sands Resort
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="rooms.php">Rooms & Suites</a></li>
            <li><a href="amenities.php">Amenities</a></li>
            <li><a href="location.php">Location</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to Golden Sands Resort</h1>
    </div>

    <!-- Content Section -->
    <div class="content">
        <p>Experience luxury and comfort in the heart of the city.</p>
        <p>At Golden Sands Resort, we invite you to escape the ordinary and immerse yourself in a world of luxury and tranquility. Nestled along pristine shores, our resort offers a perfect blend of elegance and comfort, ensuring that every moment spent with us is memorable. Experience unparalleled hospitality, indulge in exquisite dining, and unwind in our beautifully designed accommodations, all while surrounded by breathtaking natural beauty. Your oasis of relaxation awaits.</p>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-bottom">
            <p>&copy; 2024 Golden Sands Resort. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Add class 'scrolled' when scrolling down
        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
