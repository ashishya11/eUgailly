<?php

$conn = new mysqli("localhost","root","password","eUgailly");
if($conn->connect_error)
{
    echo "connection failed";
}

// define ('ACTIVE',1);
// define('INACTIVE',0);
// define('DELETED',1);
// define('NOTDELETED','0');
?>