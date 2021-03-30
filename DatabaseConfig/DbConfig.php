<?php
$servername="eu-cdbr-west-01.cleardb.com";
$DBusername="bc022dadd684d2";
$DBpass="d66c09f7";
$DBname="heroku_0235c4bd791f42d";

$conn= mysqli_connect($servername,$DBusername,$DBpass,$DBname);
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

?>
