<?php
// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullName = $_POST['full-name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone-number'];
$pincode = $_POST['pincode'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashed password

// SQL query to insert data
$sql = "INSERT INTO users (full_name, email, phone_number, pincode, password) 
        VALUES ('$fullName', '$email', '$phoneNumber', '$pincode', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "SignUp successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
