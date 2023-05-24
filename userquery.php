<?php
$conn = mysqli_connect('localhost','root');

mysqli_select_db($conn,'seoboost');
$user = $_POST['user'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];


$query = "insert into userqueries (name,country,mobile,email,message) values ('$user','$country','$phone','$email','$message')";
mysqli_query($conn,$query);

// this header statement will redirect user to homepage after submiting data 
header('location:index.html');

?>