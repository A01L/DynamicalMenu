<?php 
session_start();
if ($_SESSION['system']) {
	header('Location: ../index.php');
}
require_once "db.php";

$login = $_POST['login'];
$password = $_POST['password'];

$check_user = mysqli_query($connect, "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['system'] = [
            "session" => $admin['session'],
        ];

        header('Location: ../index.php');

    } else {
        $_SESSION['msg'] = '<script type="text/javascript">alert("Не верный логин или пароль");</script>';
        header('Location: ../login.php');
    }

 ?>