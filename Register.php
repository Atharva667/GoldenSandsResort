<?php
session_start(); // Start session at the beginning
error_reporting(E_ALL); // Enable error reporting
ini_set('display_errors', 1); // Display errors

include 'connect.php';

if (isset($_POST['Register'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password securely

    // Prepare statement to check for existing email
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        // Prepare statement for insertion
        $insertStmt = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $insertStmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

        if ($insertStmt->execute()) {
            header("Location: homepage.php"); // Use relative path
            exit(); // Stop script execution
        } else {
            echo "Error: " . $insertStmt->error;
        }
        $insertStmt->close();
    }
    $stmt->close();
}

if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare statement to retrieve user
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify the password
        if (md5($password, $row['password'])) {
            $_SESSION['email'] = $row['email'];
            header("Location: homepage.php"); // Use relative path
            exit(); // Stop script execution
        } else {
            echo "Not Found, Incorrect Email or Password";
        }
    } else {
        echo "Not Found, Incorrect Email or Password";
    }
    $stmt->close();
}
?>
