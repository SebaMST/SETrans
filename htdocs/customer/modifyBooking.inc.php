<?php

if(!isset($_POST['booking-id']))
{
  header("Location: ../");
  die();
}

session_start();
require '../conectare.php';

$bid = $_POST['booking-id'];
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

$sql = "UPDATE bookings SET pickup='".$bpickup."',
                            destination='".$bdestination."',
                            date='".$bdatetime."',
                            seats='".$bseats."',
                            comfort='".$bcomfort."',
                            details='".$bdetails."'
                      WHERE id='".$bid."'";
$result = mysqli_query($conn, $sql);

echo "<script type='text/javascript'>alert(\"Modified booking (ID=".$bid.") successfully.\");
window.location.href = \"../\";</script>";
