<?php
require "includes/common.php";
session_start();

$email = $_POST['eMail'];
$email = mysqli_real_escape_string($con, $email);

$pass = $_POST['password'];
$pass = mysqli_real_escape_string($con, $pass);
$pass = md5($pass);

$first = $_POST['firstName'];
$first = mysqli_real_escape_string($con, $first);

$last = $_POST['lastName'];
$last = mysqli_real_escape_string($con, $last);

$query = "SELECT * from users where email_id='$email'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);
if ($num != 0) {

    $m = "Email Already Exists";
    header('location: index.php?error=' . $m);

} else {
    $quer = "INSERT INTO users(email_id,first_name,last_name,password) values('$email','$first','$last','$pass')";
    mysqli_query($con, $quer);

    // Đặt thông báo đăng ký thành công
    $_SESSION['success_message'] = "Đăng ký thành công! Chào mừng bạn đến với Baker's Mart.";
    header('location: products.php');

}
?>

