<?php
	$host = "ec2-54-235-86-101.compute-1.amazonaws.com";
	$user = "exfbqmxjugzkns";
	$pass = "debbfe78cd4cf3d712d026844af20511794b4a587d307c526e5112ffed0266ef";
	$port = "5432";
	$dbname = "d759llilpdk0ec";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>