<?php
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your actual database password
$dbname = "schoolproject";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<h1>Connection established</h1><br>";

if (isset($_POST['submit'])) {
    // Validate and sanitize form inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $Message = mysqli_real_escape_string($conn, $_POST['Message']);

    // Additional validation (e.g., check email format)

    // Use prepared statements to insert data
    $sql = "INSERT INTO portfoliodata (name, email, Message) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $Message);

        if (mysqli_stmt_execute($stmt)) {
            echo "<h1>Your request is inserted successfully</h1>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
