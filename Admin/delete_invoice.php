<!-- For more projects: Visit codeastro.com  -->
<?php

session_start();

if(!isset($_SESSION['user_session'])){

    header("location:index.php");
}
?>
<?php

include("dbcon.php");

$diagnostic= $_GET['id'];
    

	     $delete_sql = "DELETE FROM `utilisateur` WHERE code_user = '$diagnostic'";//****DELETE on_hold when medicine deleted from Sale ******
	     $delete_query =mysqli_query($con,$delete_sql);

	     if($delete_query){

	     	header("location:home.php?invoice_number=$invoice_number");
	     }else{

	     	echo "Suppressio impossible";
	     }

	  
?><!-- For more projects: Visit codeastro.com  -->