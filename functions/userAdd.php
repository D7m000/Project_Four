<?php

echo "<pre>";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

require 'connect.php';

$insertUser = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";

$query = $conn -> query($insertUser);

if($query){
	header("location: ../loginSystem/login.php");
}else{
	header("location: ../loginSystem/register.php");
}
