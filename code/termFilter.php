<?php
session_start();
	include("DatabaseConfig/DbConfig.php");
if (isset($_POST['selectTerm'])) {
    $filterTerm=$_POST['termID'];
    header("Location: ManagerHome.php#stats");
    die("Term filtered");
}
?>

