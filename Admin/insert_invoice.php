<?php

session_start();

if(!isset($_SESSION['user_session'])){

    header("location:index.php");
}

include("dbcon.php");

if(isset($_POST['submit'])){
 
      //RECUPERER L'IMAGE
      
$invoice_number= $_GET['invoice_number'];
$nom =$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse= $_POST['adresse'];
$tel= $_POST['tel'];
$email= $_POST['email'];
$mdp= $_POST['mdp'];
$sexe= $_POST['sexe'];
$annee=htmlspecialchars($_POST['daten']);
      $date1=strtotime($annee);
      $date2=date('Y-m-d',$date1);


               $insert_sql ="INSERT INTO utilisateur(date_naissance,nom_user,prenom_user,tel,adresse,email,mot_de_passe, sexe )values('$date2','$nom','$prenom','$tel','$adresse','$email','$mdp','$sexe' )";//*****INSERTING INTO on_HOLD TABLE*******

                   // $date = date("Y-m-d");

             //  $insert_sql2 ="INSERT INTO sales(invoice_number,medicines,quantity, total_amount,total_profit, date )values('$consult','$consult','$clinik','$locals','$standard','$date')";//*****INSERTING INTO on_HOLD TABLE*******

	   	   	$insert_query = mysqli_query($con,$insert_sql);
//$insert_query2 = mysqli_query($con,$insert_sql2);
	 



	if($insert_query){

     header("location:home.php?invoice_number=$invoice_number");
  
     // echo "<script type='text/javascript'>window.location.href = home.php?invoice_number=$invoice_number '</script>";
	}else{

	}

  }
 
?>