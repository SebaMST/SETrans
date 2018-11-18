<?php


if(!isset($_POST['contact-submit']))
{
  header("Location: ../");
  die();
}

require 'conectare.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$time_sent = date("Y-m-d H:i:s");

$sql = "INSERT INTO contactus (name,email,phone,message,date) VALUES ('$name','$email','$phone','$message','$time_sent')";
$result = mysqli_query($conn, $sql);

echo "<script type='text/javascript'>alert(\"Message sent. We will contact you soon!\");
window.location.href = \"../\";</script>";
