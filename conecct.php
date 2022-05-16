<?php

$server = "sql209.epizy.com";
$username = "epiz_31731003";
$password = "vpfmv9MFUEpIJ";
$dbname = "epiz_31731003_packetcodeoffical";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}

?>