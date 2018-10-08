<?php

$conn = new mysqli("localhost","root","password","eUgailly");
if($conn->connect_error)
{
    echo "connection failed";
}
?>