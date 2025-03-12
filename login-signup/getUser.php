<?php
session_start();
require_once "database.php"; // Include database connection

if (!isset($_SESSION["email"])) { 
    echo json_encode(["error" => "User not logged in"]);
    exit();
}

$email = $_SESSION["email"]; // Assuming user email is stored in session

$sql = "SELECT full_name FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($user) {
    echo json_encode(["full_name" => $user["full_name"]]);
} else {
    echo json_encode(["error" => "User not found"]);
}
?>
