<?php
	$con = mysqli_connect("localhost","root","","bhumi");
	$id=$_REQUEST['id'];
	$sql=" DELETE FROM `pic` WHERE `id`='$id'";
	$res=mysqli_query($con ,$sql);
	header("location:upload.php");
	
?>