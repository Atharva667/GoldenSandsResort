<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden sands resort</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper" id="Register" style="display:none;">
        <form method="POST" action="Register.php">
            <h1>Sign Up</h1>
            <div class="input-box">
                <input type="text" name="fName" placeholder="" required>
                <label class="pop-up-label">First Name</label>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" name="lName" placeholder="" required>
                <label class="pop-up-label">Last Name</label>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="" required>
                <label class="pop-up-label">Email</label>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="" required>
                <label class="pop-up-label">Password</label>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" name="Register" class="btn">Sign Up</button>
            <div class="register-link">
                <p>Already have an account? <button type="button" id="LoginButton" class="SignInButton">Sign In</button></p>
            </div>
        </form>
    </div>

    <div class="wrapper" id="Login" style="display:block;">
        <form method="POST" action="Register.php">
            <h1>Login
            </h1>
            <div class="input-box">
                <input type="text" name="email" placeholder="" required>
                <label class="pop-up-label">Email</label>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password"placeholder="" required>
                <label class="pop-up-label">Password</label>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" name="Login" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have an account? <button type="button" id="RegisterButton">Sign Up</button></p>
            </div>
        </form>
    </div>
    <footer style="text-align: center; padding: 0.1rem; background-color: #131212; color: #ffffff;">
        <p>&copy; <span id="year"></span>  Golden Sands Resort. All Rights Reserved.</p>
    <script src="javascript/script.js/script.js"></script>
    
    
</footer>

</body>
</html>


