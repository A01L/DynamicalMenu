<?php
session_start();
unset($_SESSION['system']);
header('Location: ../login.php');
?>