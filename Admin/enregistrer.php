<!-- For more projects: Visit codeastro.com  -->
<?php

   include("dbcon.php");


	session_start();

	if(!isset($_SESSION['user_session'])){

	    header("location:index.php");
	}


   if(isset($_POST['submit'])){//***INSERTING NEW  MEDICEINES******
	   echo "<h1>....LOADING</h1>";
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];  
$tel= $_POST['tel'];    
$adresse=  $_POST['adresse']; 
$email=  $_POST['email']; 
$passe=  $_POST['passe']; 
$usename=  "gestionaire"; 
$passe= sha1($passe);



 $sql="INSERT INTO utilisateur(code_profil, nom_user, prenom_user,tel,adresse, email, mot_de_passe) 
 VALUES ('$usename','$nom','$prenom','$tel','$adresse','$email','$passe')";

   $result =mysqli_query($con,$sql);

               $insert_sql2 ="INSERT INTO users(user_name,password )values('$usename','$passe')";//*****INSERTING INTO on_HOLD TABLE*******

$insert_query2 = mysqli_query($con,$insert_sql2);

   if($result){

   echo "UTILISATEUR CREE AVEC SUCCES";

}

}
 

?>
<!-- For more projects: Visit codeastro.com  -->