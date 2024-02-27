<?php
// insert.php

// Check if the form is submitted



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your database (replace these values with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "singin_singup";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert data into the database (replace 'your_table_name' with your actual table name)
    $sql = "INSERT INTO profile_info (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $successMessage = "Record inserted successfully";
        
    } else {
        $errorMessage = "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!-- ------------------------------------- -->


<!DOCTYPE html>
<html>
<head>
    <title>Insert Result</title>
</head>
<body>

<?php
// Display success or error message
if (isset($successMessage)) {
    echo "<p>$successMessage</p>";
    // Display the return button
    echo '<form method="post" action="http://localhost/testweb/index.html">
            <input type="submit" value="Return">
          </form>';
} elseif (isset($errorMessage)) {
    echo "<p>$errorMessage</p>";
    // You can provide a different message or redirect the user to an error page
}
?>

</body>
</html>
