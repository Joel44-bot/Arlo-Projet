<?php 
session_start();
$servername="localhost";
	$database="basehotel";
	$username="root";
	$userpwd="";
	$conn=mysqli_connect($servername,$username,$userpwd,$database);
$idcient="";
$nom="mboumba";	 
$prenom="";	
$datenais="";
$sexe="";
$tel="";
$nation="";
$photo="";
$mdp="";
$sexe1="";
$sexe2="";
$val=0;
if (isset($_POST['reserver'])) {
	
	$annee1=htmlspecialchars($_POST['date1']);
   $date111=strtotime($annee1);
      $dateres=date('Y-m-d');  
	 $annee2=htmlspecialchars($_POST['date2']);
      $date222=strtotime($annee2);
	$date1=new DateTime($_POST['date1']);  
	$date2=new DateTime($_POST['date2']);  
$differ= $date1->diff($date2);
$duree=$differ->d;
      $date11=date('Y-m-d',$date111);
	 $date22=date('Y-m-d',$date222);
	$numcli=$_POST['numclient'];  
		$place=$_POST['place'];  
	$typeprix=$_POST['typeprix'];  
	$categorie=$_POST['categorie'];  
	$statut="En attente"; 

$sql="INSERT INTO reservation(num_client,date_reserve,nbr_personne,date_debut_sejour,date_fin_sejour,dureesejour,categorie_prix,statut,categoriechambre) VALUES ('$numcli','$dateres','$place','$date11','$date22','$duree','$typeprix','$statut','$categorie')";
        if (mysqli_query($conn,$sql)){
          $message="Reservation ajoutee avec succes";
		  $_SESSION['msg']="1";
		  echo "'<script type='text/javascript'>alect('$message')</script>";
        }else{
          $erreure="Operation échouée";
          echo "'<script type='text/javascript'>alect('$erreure')</script>";
        }
header('location:reservation.php');

}
 ?>