<?php

if(!isset($_POST['logout-submit']))
{
  header("Location: ../");
  die();
}

session_start();
session_destroy();
echo "<script type='text/javascript'>alert(\"You have logged out successfully!\");
window.location.href = \"../\";</script>";
