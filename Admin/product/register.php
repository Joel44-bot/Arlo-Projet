<!-- For more projects: Visit codeastro.com  -->
<?php

   include("../dbcon.php");


	session_start();

	if(!isset($_SESSION['user_session'])){

	    header("location:index.php");
	}


   if(isset($_POST['submit'])){//***INSERTING NEW  MEDICEINES******
      
         $invoice_number = $_GET['invoice_number'];
$invoice_number2 = "CA-9090035";

         //RECUPERER L'IMAGE
         
   
   
         $nom=htmlspecialchars($_POST['nom']);
         $prenom=htmlspecialchars($_POST['prenom']);
        $mdp=htmlspecialchars($_POST['annee']);
         //$mdp = sha1($mdp);
   
         //DATE DE NAISSANCE
         $annee=htmlspecialchars($_POST['date']);
         $date1=strtotime($annee);
         $date2=date('Y-m-d',$date1);
   
   
         $sexe=htmlspecialchars($_POST['sexe']);
         $filiere=htmlspecialchars($_POST['filiere']);
   
         $telephone=htmlspecialchars($_POST['telephone']);
              $adresse=htmlspecialchars($_POST['adresse']);
                       $email=htmlspecialchars($_POST['email']);
   $profil="Client";
   $statut="NON PAYER";
   
   
        // if (!empty($nom) AND !empty($prenom) AND !empty($date2) AND !empty($sexe) AND !empty($telephone) AND !empty($mdp)) {
           $sql="INSERT INTO utilisateur(date_naissance,nom_user,prenom_user,tel,adresse,email,mot_de_passe,sexe,code_profil,filiere,statut) VALUES ('$date2','$nom','$prenom','$telephone','$adresse','$email','$mdp','$sexe','$profil','$filiere','$statut')";


      
	   echo "<h1>....LOADING</h1>";

$total = 1;
 
   $result =mysqli_query($con,$sql);
 

   if($result){

   echo "<script type='text/javascript'>window.top.location='view.php?invoice_number=$invoice_number';</script>";

}

}
 

?>
<!-- For more projects: Visit codeastro.com  -->