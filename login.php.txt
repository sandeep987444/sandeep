<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['username'];
$password = $_POST['password'];
if ($username === 'Admin' && $password === 'MIT122') {
$_SESSION['user'] = 'admin';
header('Location: admin/index.php');
exit();
} else {
$_SESSION['user'] = 'shopping';
header('Location: shopping/index.php');
exit();
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
