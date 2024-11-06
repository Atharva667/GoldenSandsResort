<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Sands Resort</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
     /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Fullscreen Setup */
body,
html {
    height: 100%;
    width: 100%;
    font-family: 'Poppins', sans-serif;
    color: #fff;
    background-color: #000;
    display: flex; /* Use flexbox */
    flex-direction: column; /* Column layout */
}

.fullscreen-image {
    background-image: url("Image/hotel.webp"); /* Correct path */
    background-size: cover;
    background-position: center;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 0; /* Behind other content */
}

       /* Navbar Styling */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.56);
    backdrop-filter: blur(10px); /* Adjust the blur value as needed */
    transition: background-color 0.3s; /* Optional: for smooth transitions */
    padding: 20px 30px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 2;
}
        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px;
            transition: background-color 0.3s;
            border-radius:20px;
        }

        .nav-links li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Book Now Button */
        .book-now a {
            background-color: transparent;
            color: whitesmoke;
            padding: 8px 20px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            font-size: 0.9rem;
            transition: background-color 0.3s;
        }

        .book-now a:hover {
            background-color: #661abd;
        }

        /* Main Container */
        .container {
    position: relative;
    text-align: center;
    padding-top: 100px; /* Adjusted padding to prevent overlap with navbar */
    z-index: 1; 
    margin-bottom: 40px; /* Add margin to create space before footer */
}

        /* Headline Section */
        .container h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .container p {
            font-size: 1.5rem;
            margin-bottom: 40px;
        }

        /* Booking Form Styling */
.booking-form {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    max-width: 800px;
    margin: 40px auto 0 auto; /* Adjusted margin for spacing */
}

        .booking-form input[type="date"],
        .booking-form select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        .booking-form button {
            background-color: #73b826;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .booking-form button:hover {
            background-color: #c0912d;
        }

        /* Footer Styling */
.footer {
    background-color: rgba(0, 0, 0, 0.9);
    color: white;
    padding: 20px;
    text-align: center;
    position: relative;
    bottom: 0;
    width: 100%;
    margin-top: 40%; /* Push footer to the bottom */
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    padding-top: 10px;
    margin-top: 10px;
}

        .footer .container {
            max-width: 1170px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .footer .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .footer-col {
            flex: 1;
            padding: 0 10px;
            min-width: 200px;
            margin-bottom: 30px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 25px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            background-color: #e91e63;
            height: 2px;
            width: 50px;
        }

        .footer-col ul {
            list-style: none;
            padding: 0;
        }

        .footer-col ul li {
            margin-bottom: 8px;
        }

        .footer-col ul li a {
            font-size: 16px;
            color: #bbbbbb;
            text-decoration: none;
            font-weight: 300;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 5px;
        }

        .footer-col .social-links {
            display: flex;
            align-items: center;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 35px;
            width: 35px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 8px 8px 0;
            text-align: center;
            line-height: 35px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;
        }

        /* Responsive Styles */
        @media(max-width: 767px) {
            .footer .row {
                flex-direction: column;
                align-items: center;
            }

            .footer-col {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="fullscreen-image">
    <img src="Image/hotel.webp" alt="Hotel" style="width: 100%; height: auto;">
    </div> <!-- Fixed the class name here -->

    <!-- Navbar -->
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="rooms.php">Rooms & Suites</a></li>
            <li><a href="amenities.php">Amenities</a></li>
            <li><a href="location.php">Location</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="book-now">
            <a href="#">Book Now</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h1>Welcome to Golden Sands Resort</h1>
        <p>Experience the ultimate luxury getaway.</p>

        <div class="booking-form">
            <form action="#" method="post">
                <input type="date" name="checkin" required>
                <input type="date" name="checkout" required>
                <select name="guests" required>
                    <option value="">Select Guests</option>
                    <option value="1">1 Guest</option>
                    <option value="2">2 Guests</option>
                    <option value="3">3 Guests</option>
                    <option value="4">4 Guests</option>
                </select>
                <button type="submit">Check Availability</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        
                       
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="rooms.php">Rooms and Suites</a></li>
                        <li><a href="amenities.php">Amenities</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">Email Us</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com"target=_b><i class="fa fa-facebook"></i></a>
                        <a href="https://www.x.com"target=_b><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com"target=_b><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Golden Sands Resort. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
