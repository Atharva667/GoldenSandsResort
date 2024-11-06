<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: 'Arial', 'Helvetica', sans-serif;
            background: url('Image/gradientcontact.webp') no-repeat center fixed;
            background-size: cover; /* Make sure the background covers the full viewport */
        }

        * {
            box-sizing: border-box;
        }

        /* Transparent Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: transparent; /* Start fully transparent */
            padding: 10px 30px;
            height: 10%;
            width: 100%;
            /* position: fixed; Keep navbar fixed on top */
            top: 0;
            left: 0;
            z-index: 1000; /* Keep it above all content */
            transition: background-color 0.3s ease; /* Smooth background color transition */
        }

      

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1rem;
        }

        .nav-links li a {
            background-color: #000080;
            color: white;
            padding: 10px 15px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            transition: background-color 0.3s, transform 0.2s;
        }

        .nav-links li a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .container {
            text-align: center;
            padding: 10% 2%; /* Increase padding */
            color: #333;
            margin: 0 auto;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: bold;
            color: #000080; /* Modern blue for heading */
        }

        p {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Image Styling */
        .hotel-image {
            margin-top: 70px; /* To adjust for navbar height */
        }

        .hotel-image img {
            width: 100%;
            max-width: 800px; /* Set a max width to keep the image manageable */
            height: auto;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            font-size: 1.2rem;
            margin-top: 30px;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            color: #333;
        }

        .contact-info strong {
            color: #007bff;
        }

        .social-icons {
            margin-top: 30px;
        }

        .social-icons a {
            color: #007bff;
            text-decoration: none;
            padding: 10px;
            font-size: 1.5rem;
        }

        .social-icons a:hover {
            color: #0056b3;
        }

        .footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 30px 20px;
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

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .container {
                padding: 10% 2%;
            }

            h1 {
                font-size: 2rem;
            }

            .hotel-image img {
                width: 100%;
                max-width: 100%;
            }

            .social-icons a {
                font-size: 1.2rem;
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

    <!-- Hotel Image -->
    <div class="hotel-image">
    </div>

    <div class="container">
        <h1>Contact Us</h1>
        <p>If you have any questions or would like to get in touch, please use the information below.</p>

        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p><strong>Phone:</strong> +91 9456845209</p>
            <p><strong>Email:</strong> <a href="mailto:goldensandsresort@gmail.com">goldensandsresort@gmail.com</a></p>
        </div>

        <div class="social-icons">
            <h2>Follow Us</h2>
            <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>
            <a href="https://www.twitter.com" target="_blank" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com" target="_blank" class="fa fa-instagram"></a>
            <a href="https://www.linkedin.com" target="_blank" class="fa fa-linkedin"></a>
            <a href="https://www.youtube.com" target="_blank" class="fa fa-youtube"></a>
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


 