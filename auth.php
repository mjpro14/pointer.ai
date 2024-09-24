<?php
session_start();
header('Content-Type: application/json');
include_once('conn.php');
// Example username and password verification (replace with actual logic)
$input = json_decode(file_get_contents('php://input'), true);
$username = $input['username'];
$password = $input['password'];

// Dummy credentials for example purposes
$check = "SELECT * FROM `user` WHERE  `username`='$username' and `password` = '$password' ";
$status = mysqli_query($conn,$check);
if(mysqli_num_rows($status)>0){ 
    echo json_encode(['success' => true, 'message' => 'Login successful']);

} else {
    echo json_encode(['success' => false, 'message' => 'Invalid username or password']);
}
?>
