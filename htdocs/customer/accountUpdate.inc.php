<?php

if(!isset($_POST['accountUpdate-submit']))
{
  header("Location: ../");
  die();
}

session_start();
require '../conectare.php';

$username = $_SESSION['username'];
$email = $_SESSION['email'];
$password=$_POST['password'];

$sql = "SELECT * FROM accounts WHERE username=\"$username\" AND email=\"$email\"";
$result = mysqli_query($conn,$sql);

$account = mysqli_fetch_assoc($result);
$hash = $account['password'];
if(!password_verify($password,$hash))
{
  echo "<script type='text/javascript'>alert(\"The entered password is invalid!\");
  window.location.href = \"../\";</script>";
  die();
}

if(!empty($_POST['fullname']))
{$fullname= $_POST['fullname'];
  if(!preg_match('/^([a-zA-Z ]){2,}$/',$fullname))
  {
    echo "<script type='text/javascript'>alert(\"Wrong full name format. It may only contain at least two letters, and \" \"!\");
    window.location.href = \"../\";</script>";
    die();
  }
}
else $fullname=$_SESSION['fullname'];
if(!empty($_POST['phone']))
{$phone= $_POST['phone'];
  if(!preg_match('/^[0-9]{3,20}$/',$phone))
  {
    echo "<script type='text/javascript'>alert(\"Wrong phone number format. It must have at least 3 digits!\");
    window.location.href = \"../\";</script>";
    die();
  }
}
else $phone=$_SESSION['phone'];
if((!empty($_POST['newpassword']))&&(!empty($_POST['confirm-newpassword'])))
{$newpassword=$_POST['newpassword'];
$confirmnewpassword=$_POST['confirm-newpassword'];
  if($newpassword!==$confirmnewpassword)
  {
    echo "<script type='text/javascript'>alert(\"New password must be identical to confirm new password!\");
    window.location.href = \"../\";</script>";
  }
  else{
    if(!preg_match('/^.{8,}$/',$newpassword))
    {
      echo "<script type='text/javascript'>alert(\"Wrong password format. Passwords must be at least 8 characters long!\");
      window.location.href = \"../\";</script>";
      die();
    }
    $passwordHashed= password_hash($newpassword,PASSWORD_DEFAULT);
  }
}
else if((empty($_POST['newpassword'])&&(!empty($_POST['confirm-newpassword'])))||(!empty($_POST['newpassword'])&&(empty($_POST['confirm-newpassword']))))
{
  echo "<script type='text/javascript'>alert(\"New password must be identical to confirm new password!\");
  window.location.href = \"../\";</script>";
}
else
{
  $passwordHashed=$hash;
}

$sql = "UPDATE accounts SET fullname='".$fullname."',
                            phone='".$phone."',
                            password='".$passwordHashed."'
                      WHERE username='".$username."' AND email='".$email."'";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE bookings SET name='".$fullname."',
                            phone='".$phone."'
                      WHERE email='".$email."'";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE contactus SET name='".$fullname."',
                            phone='".$phone."'
                      WHERE email='".$email."'";
$result = mysqli_query($conn, $sql);

$_SESSION['fullname']=$fullname;
$_SESSION['phone']=$phone;

echo "<script type='text/javascript'>alert(\"Account information updated successfully.\");
window.location.href = \"../\";</script>";
