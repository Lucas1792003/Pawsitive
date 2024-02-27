<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your database (replace these values with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "singin_singup";

    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$email = $_POST['email'];
$password = $_POST['password'];

// Query to fetch user from database
$sql = "SELECT * FROM profile_info WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User found, verify password
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Login successful!";
        // Redirect or do something after successful login
    } else {
        echo "Invalid email or password";
    }
} else {
    echo "User not found";
}

$conn->close();
}
?>
