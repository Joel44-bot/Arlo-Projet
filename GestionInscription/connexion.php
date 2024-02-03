<?php 
	$servername="localhost";
	$database="baseinptic";
	$username="root";
	$userpwd="";
	$conn=mysqli_connect($servername,$username,$userpwd,$database);
	if (!$conn) {
		die("La connexion a échoué: ".mysql_connect_error());
	}
 ?>