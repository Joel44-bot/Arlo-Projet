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
<a class="navbar-brand" href="index.php">Santé+</a>
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
              <h1>Afficher les rendez_vous</h1>
              <p>Retrouvez les informations sur vos patients.</p>
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
	          <form enctype="multipart/form-data" class="contact-form" action="medecin.php" method="post" >
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
 <?php           
		if (isset($_POST['recherche'])) {
$idclient=$_POST['chercher'];
$rec=mysqli_query($conn,"SELECT s.nom as struct, m.nom, m.prenom, m.specialite, m.telephone, m.photo, m.mdp FROM medecin m, structure s where m.idmedecin='$idclient' and s.idstructure=m.idstructure");
$resresult=mysqli_fetch_array($rec);

$rec2=mysqli_query($conn,"SELECT r.motif,r.date,r.date_rendezvous,r.heure,r.statut,r.idmedecin,r.idpatients,m.nom as med,m.specialite,p.photo,s.nom as struct,s.idstructure  FROM patriens p,medecin m,structure s,rendez_vous r where r.idmedecin='$idclient' and r.idpatients=p.idpatients and r.idmedecin=m.idmedecin and m.idstructure=s.idstructure");

$nom=$resresult['nom'];
$prenom=$resresult['prenom'];
$date2=$resresult['specialite'];
$tel=$resresult['telephone'];
$phto=$resresult['photo'];
$mdp=$resresult['mdp'];
$struct=$resresult['struct'];



	
?>


		
			<h2 class="mb-5 text-center">Information du Medecin</h2>
            <div class="row">
              
              <div class="col-md-6">
	          <form enctype="multipart/form-data" class="contact-form" action="medecin.php" method="post" >
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="nom">Nom:</label>
                      <input type="texte" name="nom" id="nom" class="form-control " value="<?php echo $nom ?>">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="arrival_date">Prénom:</label>
                      <input type="texte" name="prenom" id="prenom" class="form-control " value="<?php echo $prenom ?>">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label for="date">Specialité: </label>
                      <div style="position: relative;"> 
                          <input type='texte' name="specialite" class="form-control" id='date' value="<?php echo $date2 ?>">
                      </div>
                    </div>
                    <div class="col-sm-6 form-group">
                      <label for="date">Structure: </label>
                      <div style="position: relative;"> 
                          <input type='texte' name="structure" class="form-control" id='date' value="<?php echo $struct ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="col-md-6 form-group">
                      <label for="telephone">Telephone:</label>
                      <input type="texte" id="telephone" name="tel" class="form-control " value="<?php echo $tel ?>">
                    </div>
					<div class="col-md-6 form-group">
                      <label for="telephone">Mot de Passe:</label>
                      <input type="texte" id="telephone" name="mdp" class="form-control " value="<?php echo $mdp ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="image">Photo:</label>
                      <input type="file" id="image" name="foto" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                      <br>
                      <input type="submit" value="Modifier" name="modifier" class="btn btn-info">
                    </div>
                  </div>
				  <div class="col-md-6 form-group">
                      <input type="hidden" name="idclient" id="idclient" class="form-control " value="<?php echo $idclient ?>">
                    </div>
                </form>
              </div>
              <div class="col-md-6">
                	<img height="225" width="200" src="data:image;base64,<?php echo $phto; ?>">

              </div>
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