<?php
session_start();
 
if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'shopping') {
    header('Location: ../login.php');
    exit();
}
?>