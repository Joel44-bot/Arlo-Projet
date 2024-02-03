<!-- For more projects: Visit codeastro.com  -->
<?php

session_start();
include("../dbcon.php");

if(!isset($_SESSION['user_session'])){

    header("location:index.php");
}


   $invoice_number = $_GET['invoice_number'];

   if(isset($_POST['update'])){

$id = $_POST['num'];

$nom= $_POST['nom'];
$prenom= $_POST['prenom'];

$session= $_POST['session'];  

$filiere= $_POST['filiere'];  
$statut= $_POST['statut'];  


$reg_date = strtotime($_POST['datenais']);
$daten = date('Y-m-d',$reg_date);









  $sql=" UPDATE utilisateur SET nom_user='$nom',prenom_user='$prenom',date_naissance='$daten', mot_de_passe='$session', filiere= '$filiere',statut='$statut' WHERE code_user = '$id'";

   $result =mysqli_query($con,$sql);

   echo "<h1>...LOADING</h1>";

   if($result){  

    echo "<script type='text/javascript'>window.top.location='view.php?invoice_number=$invoice_number'</script>";
          
   }
}
 
?>