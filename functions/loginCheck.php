<?php 

$username = $_POST['username'];
$password = $_POST['password'];

require 'connect.php';

$selectLogin = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$queryLogin = $conn -> query($selectLogin);

$user = $queryLogin -> fetch_assoc();
$id = $user['id'];

if ($queryLogin -> num_rows > 0) {

	session_start();
	$_SESSION['login_id'] = $id;
	header("location: ../index.php");

}else{

	header("location: ../loginSystem/login.php");

}