<?php
	$con = mysqli_connect("localhost","root","","janvi");
	$id = $_GET['id'];
	$sql = "DELETE FROM `stud` WHERE id='$id'";
	mysqli_query($con,$sql);
	header("location:index.php");
?>