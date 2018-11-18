<?php

if(!isset($_POST['login-submit']))
{
  header("Location: ../");
  die();
}

session_start();
require 'conectare.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM accounts WHERE username=\"$username\"";
$result = mysqli_query($conn,$sql);
$row_cnt = mysqli_num_rows($result);
if($row_cnt<1)
{
  echo "<script type='text/javascript'>alert(\"Authentication data is wrong!\");
  window.location.href = \"../\";</script>";
  die();
}
else {
  $account = mysqli_fetch_assoc($result);
  $hash = $account['password'];
  if(!password_verify($password,$hash))
  {
    echo "<script type='text/javascript'>alert(\"Authentication data is wrong!\");
    window.location.href = \"../\";</script>";
    die();
  }
  else {
    $_SESSION['fullname']=$account['fullname'];
    $_SESSION['username']=$account['username'];
    $_SESSION['email']=$account['email'];
    $_SESSION['phone']=$account['phone'];
    $_SESSION['account_type']=$account['account_type'];
  }

}

echo "<script type='text/javascript'>alert(\"You have logged in successfully!\");
window.location.href = \"../\";</script>";
