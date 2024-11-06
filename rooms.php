<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms & Suites</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }

        body {
    background-image: url('Image/hotel.webp'); /* Add the hotel.webp image */
    background-size: cover; /* Cover the whole page */
    background-position: center; /* Center the image */
    background-attachment: fixed; /* Make the image stay fixed when scrolling */
    font-family: Arial, Helvetica, sans-serif;
    color: white; /* Change text to white to ensure visibility over the image */
}

        * {
    box-sizing: border-box; /* Ensure padding and borders are included in the total width/height */
}


.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgb(0 0 0 / 41%); /* Slightly transparent navbar */
    backdrop-filter: blur(10px);
    padding: 10px 30px;
    width: 100%;
    position: sticky; /* Sticky navbar */
    top: 0;
    z-index: 10; /* Ensure the navbar is always on top */
}

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1rem;
        }

        .nav-links li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem; /* Adjusted font size */
            border-radius:25px;
            padding: 10px 10px; /* Added padding to links */
            transition: background-color 0.3s ease, color 0.3s ease;

        }

        .nav-links li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color:#fff;
            
        }


        .book-now a {
    background-color:#286ca7; /* Green background for a fresh look */
    color: white; /* White text color for contrast */
    padding: 10px 25px; /* Slightly increased padding for comfort */
    text-decoration: none; /* No underline */
    border-radius: 30px; /* Slightly more rounded corners */
     font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: bold; /* Bold text */
    font-size: 1rem; /* Slightly larger font size */
    
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
    transition: background-color 0.3s, transform 0.2s; /* Transition effects for hover */
}

.book-now a:hover {
    background-color: #7f72ca; /* Darker green on hover */
    border-color: #51218800; /* Change border color on hover */
    transform: scale(1.05); /* Slightly enlarge on hover */
}

p{
    font-family: Arial, Helvetica, sans-serif;
    /* font-weight: bold; */
    color:white;
    font-size:19px;
}


        h1 {
            display: block;
            font-size: 2em;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            unicode-bidi: isolate;
        }

        .container {
            text-align: center;
            padding: 10%;
            color: #333;
            margin: 0 auto;
        }

        .room-section {
            padding: 50px;
            text-align: center;
            background-color: #f5f5f5;
        }

        .room-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-family: Arial, Helvetica, sans-serif;
            color:black;
        }

        .room-section p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: #555;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        
        }

        .rooms {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .room-card {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin: 15px;
            flex: 1 1 30%;
            max-width: 30%;
            min-width: 280px;
        }

        .room-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .room-card h3 {
            font-size: 1.5rem;
            color: #333;
            padding: 15px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .room-card p {
            padding: 0 15px 15px 15px;
            color: #555;
        }

        .room-card .room-details {
            font-size: 0.9rem;
            color: #777;
            padding: 0 15px;
        }

        .book-room-btn {
    display: block;
    text-align: center;
    background-color: #914cff; /* Main background color */
    color: white; /* Text color */
    padding: 12px 20px; /* Increased padding for better appearance */
    margin: 15px auto; /* Centered with auto left and right margins */
    border-radius: 25px; /* Increased border radius for a smoother button */
    text-decoration: none; /* Removes underline from the link */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold; /* Bold text */
    font-size: 1rem; /* Font size */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds depth with a shadow */
    transition: background-color 0.3s, transform 0.2s; /* Smooth transitions for hover effects */
}

.book-room-btn:hover {
    background-color: #a320c4; /* Darker shade on hover */
    transform: translateY(-2px); /* Slight lift effect on hover */
}


        .footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="homepage.php">Back To Homepage</a></li>
        </ul>
        <div class="book-now">
            <a href="#">Book Now</a>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="container">
        <h1>Rooms & Suites</h1>
        <p>Discover the perfect room or suite for your stay, tailored to meet your every need. Enjoy luxurious
            accommodation with first-class amenities.</p>
    </div>

    <!-- Rooms & Suites Section -->
    <div class="room-section">
        <h2>Our Rooms & Suites</h2>
        <p>From standard rooms to deluxe suites, every accommodation option offers exceptional comfort and style.</p>

        <div class="rooms">
            <!-- Room 1 -->
            <div class="room-card">
                <img src="Image/standardroom.webp" alt="Standard Room">
                <h3>Standard Room</h3>
                <p>Our Standard Rooms offer a cozy and relaxing space, perfect for solo travelers or couples looking for
                    comfort and affordability.</p>
                <div class="room-details">
                    <p><strong>Size:</strong> 25 m²</p>
                    <p><strong>View:</strong> City view</p>
                    <p><strong>Bed:</strong> Queen-size</p>
                </div>
                <a href="#" class="book-room-btn">Book Now</a>
            </div>

            <!-- Room 2 -->
            <div class="room-card">
                <img src="Image/deluxeroom.webp" alt="Deluxe Room">
                <h3>Deluxe Room</h3>
                <p>Upgrade your stay with our Deluxe Rooms, featuring additional space and luxury amenities for an
                    elevated experience.</p>
                <div class="room-details">
                    <p><strong>Size:</strong> 35 m²</p>
                    <p><strong>View:</strong> Garden view</p>
                    <p><strong>Bed:</strong> King-size</p>
                </div>
                <a href="#" class="book-room-btn">Book Now</a>
            </div>

            <!-- Room 3 -->
            <div class="room-card">
                <img src="Image/luxurysuite.webp" alt="Suite">
                <h3>Luxury Suite</h3>
                <p>Our Luxury Suites offer the ultimate experience in comfort and opulence, with separate living areas
                    and breathtaking views.</p>
                <div class="room-details">
                    <p><strong>Size:</strong> 55 m²</p>
                    <p><strong>View:</strong> Ocean view</p>
                    <p><strong>Bed:</strong> King-size, separate living area</p>
                </div>
                <a href="#" class="book-room-btn">Book Now</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-bottom">
            <p>&copy; 2024 Golden Sands Resort. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>


