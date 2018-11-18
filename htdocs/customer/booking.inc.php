<?php

if(!isset($_POST['booking-submit']))
{
  header("Location: ../");
  die();
}

session_start();
require '../conectare.php';

if(isset($_SESSION['account_type']))
 if($_SESSION['account_type']=='USER')
{
  $bname = $_SESSION['fullname'];
  $bemail = $_SESSION['email'];
  $bphone = $_SESSION['phone'];
}
else if ($_SESSION['account_type']=='ADMIN')
{
  $bname = $_POST['booking-name'];
  $bemail = $_POST['booking-email'];
  $bphone = $_POST['booking-phone'];
}
else {
  alert('This Account Type Doesnt Match');
  die();
}

$sql = "SELECT * FROM accounts WHERE email=\"$bemail\"";
$result = mysqli_query($conn,$sql);
$row_cnt = mysqli_num_rows($result);
if($row_cnt<1)
{
  echo "<script type='text/javascript'>alert(\"Booking has failed because there isn't any registered account having the specified Fullname, Email and Phone!\");
  window.location.href = \"../\";</script>";
  die();
}

$bpickup = $_POST['booking-pickup'];
$bdestination = $_POST['booking-destination'];
$bdate = $_POST['booking-date'];
$bhour = $_POST['booking-hour'];
$bmin = $_POST['booking-min'];
$bseats = $_POST['booking-seats'];
$bcomfort = $_POST['booking-comfort'];
$bdetails = $_POST['booking-details'];

$datearray=explode('-',$bdate);
$bdatetime=mktime($bhour,$bmin,0,$datearray[1],$datearray[2],$datearray[0]);
$bdatetime = date('Y-m-d H:i:s',$bdatetime);

$sql = "INSERT INTO bookings (name,email,phone,pickup,destination,date,seats,comfort,details) VALUES ('$bname','$bemail','$bphone','$bpickup','$bdestination','$bdatetime','$bseats','$bcomfort','$bdetails')";
$result = mysqli_query($conn, $sql);

echo "<script type='text/javascript'>alert(\"Booking done. We will contact you right before pickup!\");
window.location.href = \"../\";</script>";
