<?php 
  require'connexion.php';
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
	
	
	  
	  
$idclient=$_POST['idclient'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$specialite=$_POST['specialite']; 
$tel=$_POST['tel'];
$mdp=$_POST['mdp'];
if (mysqli_query($conn,"UPDATE medecin set nom='$nom',prenom='$prenom',specialite='$specialite',telephone='$tel',photo='$photo',mdp='$mdp' where idmedecin='$idclient'")){
$message="Modification effectuée avec succes";
echo "'<script type='text/javascript'>alect('$message')</script>";
}
}
}
?>
<!doctype html>
<html>
  <head>
    <title>Santé+</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
<a class="navbar-brand" href="index.php"> Santé+</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="administration.php">Accueil</a>
              </li>
              
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Clientliste.php">Mes Patient</a>
              </li>
                 <li class="nav-item">
                <a class="nav-link" href="medecin.php">Medecin</a>
              </li>  
              <li class="nav-item cta">
                <a class="nav-link" href="inscriptionmed.php"><span>S'inscrire</span></a>
              </li>
                 <li class="nav-item ">
                <a class="nav-link" href="compte.php">Se deconnecter</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_3.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>Tout sur nos Médecin</h1>
              <p>Retrouvez vos informations.</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8 form-group">
	          <form enctype="multipart/form-data" class="contact-form" action="Clientliste.php" method="post" >
                  <div class="row">
                    <div class="col-md-6">
                      <input type="search" name="chercher" class="form-control" placeholder="Identifiant du Médecin">
                    </div>
                    <div class="col-md-6">
                      <button type="search" name="recherche" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-2"></div>
            </div>
            <br><br><br>
			
			<h2 class="mb-5 text-center">MES RENDEZ-VOUS</h2>
			
 <?php           
		if (isset($_POST['definir'])) {
$idclient=$_POST['idp'];
$idclient2=$_POST['ids'];
$idclient3=$_POST['mdate'];
$idclient4="Accord";

$rec=mysqli_query($conn,"SELECT s.nom as struct, m.nom, m.prenom, m.specialite, m.telephone, m.photo, m.mdp FROM medecin m, structure s where m.idmedecin='$idclient' and s.idstructure=m.idstructure");

$rec2=mysqli_query($conn,"SELECT r.motif,r.date,r.date_rendezvous,r.heure,r.statut,r.idmedecin,r.idpatients,p.nom as pat,m.specialite,p.photo,s.nom as struct,s.idstructure  FROM patriens p,medecin m,structure s,rendez_vous r where r.idmedecin='$idclient3' and r.idpatients='$idclient' and r.date='$idclient2' and r.idpatients=p.idpatients and r.idmedecin=m.idmedecin and m.idstructure=s.idstructure");
$resresult=mysqli_fetch_array($rec2);

$nom=$resresult['date'];
$prenom=$resresult['motif'];
$prenom2=$resresult['date_rendezvous'];
$prenom3=$resresult['heure'];


	
?>


		
			
          	  <div class="row m-t-25">
						
						
	<div class="row">
              
              <div class="col-md-6">
	          <form enctype="multipart/form-data" class="contact-form" action="modifierrendezvous.php" method="post" >
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="nom">Date demande:</label>
                      <input type="texte" name="nom" id="nom" class="form-control " value="<?php echo $nom ?>">
                    </div>
					<div class="col-md-6 form-group">
                      <label for="nom">Motif:</label>
                      <input type="texte" name="nom" id="nom" class="form-control " value="<?php echo $prenom ?>">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="arrival_date">Date rendez-vous:</label>
                      <input type="date" name="daterend" id="prenom" class="form-control " value="<?php echo $prenom2 ?>">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label for="date">Heure rendez-vous: </label>
                      <div style="position: relative;"> 
                          <input type='texte' name="heure" class="form-control" id='date' value="<?php echo $prenom3 ?>">
                      </div>
                    </div>
                    
                  </div>
                 
                  
				  <div class="col-md-6 form-group">
                      <input type="hidden" name="idclientp" id="idclientp" class="form-control " value="<?php echo $idclient ?>">
					  <input type="hidden" name="idclientd" id="idclientd" class="form-control " value="<?php echo $idclient2 ?>">
                      <input type="hidden" name="idclientm" id="idclientm" class="form-control " value="<?php echo $idclient3 ?>">
					  <input type="hidden" name="acc" id="accord" class="form-control " value="<?php echo $idclient4 ?>">

	<button type="submit" name="accorder" class="btn btn-primary">Accorder</button>

                    </div>
                </form>
              </div>
             
            </div>	
						
						
						
                           
                        </div>  
			
			
			
			
          
	  
	  <div class="row m-t-25">
						
						

						
						
						
                           
                        </div>
	  
 <?php } ?> 				
			
			
 <?php           
		if (isset($_POST['recherche'])) {
$idclient=$_POST['chercher'];
$rec=mysqli_query($conn,"SELECT s.nom as struct, m.nom, m.prenom, m.specialite, m.telephone, m.photo, m.mdp FROM medecin m, structure s where m.idmedecin='$idclient' and s.idstructure=m.idstructure");
$resresult=mysqli_fetch_array($rec);

$rec2=mysqli_query($conn,"SELECT r.motif,r.date,r.date_rendezvous,r.heure,r.statut,r.idmedecin,r.idpatients,p.nom as pat,m.specialite,p.photo,s.nom as struct,s.idstructure  FROM patriens p,medecin m,structure s,rendez_vous r where r.idmedecin='$idclient' and r.idpatients=p.idpatients and r.idmedecin=m.idmedecin and m.idstructure=s.idstructure");

$nom=$resresult['nom'];
$prenom=$resresult['prenom'];
$date2=$resresult['specialite'];
$tel=$resresult['telephone'];
$phto=$resresult['photo'];
$mdp=$resresult['mdp'];
$struct=$resresult['struct'];



	
?>


		
			
          	  <div class="row m-t-25">
						
						
<table border="1px" solid="#3c763d" class="table table-borderless table-striped table-earning">
	    <thead>
	         <tr border="1px" solid="#3c763d" width="100%">
				 <th border="1px" solid="#3c763d" width="10%">DATE</th>
				 <th border="1px" solid="#3c763d" width="10%">MOTIF</th>
				 <th border="1px" solid="#3c763d" width="10%">DATE RENDEZ-VOUS</th>
				 <th border="1px" solid="#3c763d" width="10%">HEURE</th>
				 <th border="1px" solid="#3c763d" width="10%">PATIENT</th>
				 <th border="1px" solid="#3c763d" width="10%">NOM</th>
				 <th border="1px" solid="#3c763d" width="10%">SERVICE</th>
				 <th border="1px" solid="#3c763d" width="10%">STATUT</th>
				 <th border="1px" solid="#3c763d" width="10%">OPERATION</th>
			</tr>
		</thead>
		<tbody>

		<?php while($ligne=mysqli_fetch_array($rec2)){?>
	<tr border="1px" solid="#3c763d" width="100%">
	<td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['date']?></td>
		<td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['motif'] ?></td>
		<td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['date_rendezvous'] ?></td>
		<td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['heure'] ?></td>
	<td border="1px" solid="#3c763d" width="10%"><img height="125" width="100" src="data:image;base64,<?php echo $ligne['photo']?>"></td>
	<td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['pat'] ?></td>
	<td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['specialite'] ?></td>
		<td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['statut'] ?></td>

	<form enctype="multipart/form-data" class="contact-form" action="" method="POST" >

									<input type="hidden" name="idp" value="<?php echo $ligne['idpatients'] ?>" >
									<input type="hidden" name="ids" value="<?php echo $ligne['date'] ?>">
									<input type="hidden" name="mdate" value="<?php echo $ligne['idmedecin'] ?>">


	<td border="1px" solid="#3c763d" width="10%">
	<button type="submit" name="definir" class="btn btn-primary">Définir</button>
</td>
                        </form>
	</tr>
	<?php } ?> 
		</tbody>	
	</table>				
						
						
						
                           
                        </div>  
			
			
			
			
          </div>
        </div>
      </div>
	  
	  <div class="row m-t-25">
						
						

						
						
						
                           
                        </div>
	  
 <?php } ?> 		  
	  
    </section>
    <!-- END section -->
	
	
	
	
	
   
<footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h2>TEL D'URGENCE</h2>
            <p>OUVERT 24/24 7j/7.</p>
            <p class="lead"><a href="tel://"></a></p>
			<p class="lead"><a href="tel://">+ 241 062 24 2908</a></p>
          </div>
          <div class="col-md-4">
            <h2> ECRIVEZ NOUS SUR NOTRE E-MAIL </h2>
            <p>mbelembelemercyve@gmail.com</p>
            <p>
              
            </p>
          </div>
          <div class="col-md-4">
            <h3></h3>
            <p>.</p>
            <form action="#" class="subscribe">
              <div class="form-group">
               
              </div>
              
            </form>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>