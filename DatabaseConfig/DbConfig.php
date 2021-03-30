<?php
$servername="ec2-34-252-251-16.eu-west-1.compute.amazonaws.com";
$DBusername="ykjsyxshexqjyz";
$DBpass="a41db76161b02937b3222bc1d675aaeba4ecbe2e1132a88cdd6f33cc8698281a";
$DBname="comp1640";

$conn= mysqli_connect($servername,$DBusername,$DBpass,$DBname);
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

?>