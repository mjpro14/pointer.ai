<?php
include 'conn.php'; // Include database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password for security
    $hashedPassword = $password;

    // Check if the username already exists
    $checkUser = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $checkUser->bind_param("s", $username);
    $checkUser->execute();
    $result = $checkUser->get_result();

    if ($result->num_rows > 0) {
        echo 'Username already exists!';
    } else {
        // Insert new user into the database
        $stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashedPassword);

        if ($stmt->execute()) {
            echo 'Signup successful!';
        } else {
            echo 'Error: ' . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();
}
?>
