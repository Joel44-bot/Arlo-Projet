<?php 
session_start();
$servername="localhost";
	$database="rendez_vous";
	$username="root";
	$userpwd="";
	$conn=mysqli_connect($servername,$username,$userpwd,$database);
$idclient="";
$nom="";	 
$prenom="";	
$datenais="";
$sexe="";
$tel="";
$photo="";
$phto="";

$mdp="";
$sexe1="";
$sexe2="";
$val=0;
if (isset($_POST['modifier'])) {
if (getimagesize($_FILES['foto']['tmp_name'])==false){
      echo "Erreur";
    }else{
      //RECUPERER L'IMAGE
      $photo=addslashes($_FILES['foto']['tmp_name']);
      $nomImage=addslashes($_FILES['foto']['tmp_name']);
      $photo=file_get_contents($photo);
      $photo=base64_encode($photo);
	
	
	$annee=htmlspecialchars($_POST['date']);
      $date1=strtotime($annee);
      $datenais=date('Y-m-d');  
	  
$idclient=$_POST['idclient'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe']; 
$tel=$_POST['tel'];
$mdp=$_POST['mdp'];

//mysqli_query($conn,"UPDATE patriens set nom='$nom',prenom='$prenom',date_naissance='$datenais',genre='$sexe',telephone='$tel',photo='$photo',mdp='$mdp' where idpatients='$idclient'");
//$message="Modification effectuée avec succes";
		 // echo "'<script type='text/javascript'>alect('$message')</script>";
echo "Modification effectuée avec succes";		 
header('location:client.php');
}}
 ?>