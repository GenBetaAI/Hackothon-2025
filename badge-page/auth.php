<?php
session_start();

$action = $_GET['action'] ?? '';

if ($action === 'login') {
  // Simulate login
  $_SESSION['user'] = 'JohnDoe';
  header('Location: index.php');
  exit();
} elseif ($action === 'register') {
  // Simulate registration
  $_SESSION['user'] = 'NewUser';
  header('Location: index.php');
  exit();
} else {
  header('Location: index.php');
  exit();
}
?>