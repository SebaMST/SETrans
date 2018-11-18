<?php

if(!isset($_POST['messageid']))
{
  header("Location: ../");
  die();
}

session_start();
require '../conectare.php';

if(isset($_SESSION['account_type']))
  if($_SESSION['account_type']=='USER')
  $sql = "DELETE FROM contactus WHERE messageid='".$_POST['messageid']."' AND email='".$_SESSION['email']."'";
  else if($_SESSION['account_type']=='ADMIN')
  $sql = "DELETE FROM contactus WHERE messageid='".$_POST['messageid']."'";
$result = mysqli_query($conn, $sql);

echo "<script type='text/javascript'>alert(\"Deleted message (ID=".$_POST['messageid'].") successfully.\");
window.location.href = \"../\";</script>";
