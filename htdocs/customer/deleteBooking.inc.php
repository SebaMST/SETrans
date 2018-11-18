<?php

if(!isset($_POST['id']))
{
  header("Location: ../");
  die();
}

session_start();
require '../conectare.php';

if(isset($_SESSION['account_type']))
  if($_SESSION['account_type']=='USER')
  $sql = "DELETE FROM bookings WHERE id='".$_POST['id']."' AND email='".$_SESSION['email']."'";
  else if($_SESSION['account_type']=='ADMIN')
  $sql = "DELETE FROM bookings WHERE id='".$_POST['id']."'";
$result = mysqli_query($conn, $sql);

echo "<script type='text/javascript'>alert(\"Deleted booking (ID=".$_POST['id'].") successfully.\");
window.location.href = \"../\";</script>";
