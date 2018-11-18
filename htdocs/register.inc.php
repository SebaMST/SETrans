<?php

if(!isset($_POST['register-submit']))
{
  header("Location: ../");
  die();
}

require 'conectare.php';

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$passwordRepeat = $_POST['confirm-password'];
$time_created = date("Y-m-d H:i:s");
$account_type = 'USER';

$sql = "SELECT username FROM accounts WHERE username=\"$username\"";
$result = mysqli_query($conn,$sql);
$row_cnt = mysqli_num_rows($result);
if($row_cnt>0)
{
  echo "<script type='text/javascript'>alert(\"This username already exists! Please choose another one.\");
  window.location.href = \"../\";</script>";
die();
}
else
{
$passwordHashed = password_hash($password,PASSWORD_DEFAULT);
$sql = "INSERT INTO accounts (fullname,username,email,phone,password,time_created,account_type) VALUES ('$fullname','$username','$email','$phone','$passwordHashed','$time_created','$account_type')";
$result = mysqli_query($conn, $sql);
echo "<script type='text/javascript'>alert(\"Registration was a success. You may login now!\");
window.location.href = \"../\";</script>";
}
