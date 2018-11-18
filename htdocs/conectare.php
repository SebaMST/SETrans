<?php

$conn =  new mysqli("localhost","root","","setrans-db");
if(!$conn)
{
    die("Connection to database failed: ".mysqli_connect_error());
}
