<?php
session_start();
session_unset();
session_destroy();
header('Location: login.php');
exit();
?>
Create a directory call admin and create a file call index.php put the code below into the
file
<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
header('Location: ../login.php');
exit();
}
?>
