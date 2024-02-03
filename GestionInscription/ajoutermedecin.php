
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
              <h1>MERCI POUR LA VISITE</h1>
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
            <h2 class="mb-5 text-center">Vos Parametres de connexion!</h2>
            
            <form action="#" method="post">
             
            </form>
	<?php 
  require'connexion.php';
  $id="";
  if (isset($_POST['enregister'])) {
    if (getimagesize($_FILES['foto']['tmp_name'])==false){
      echo "Erreur";
    }else{
      //RECUPERER L'IMAGE
      $image=addslashes($_FILES['foto']['tmp_name']);
      $nomImage=addslashes($_FILES['foto']['tmp_name']);
      $image=file_get_contents($image);
      $image=base64_encode($image);


      $nom=htmlspecialchars($_POST['nom']);
      $prenom=htmlspecialchars($_POST['prenom']);
	  $mdp=htmlspecialchars($_POST['mdp']);

      $struct=htmlspecialchars($_POST['structure']);


      $categ=htmlspecialchars($_POST['categorie']);
      $telephone=htmlspecialchars($_POST['telephone']);
     // if (!empty($nom) AND !empty($prenom) AND !empty($date2) AND !empty($sexe) AND !empty($telephone) AND !empty($mdp)) {
        $sql="INSERT INTO medecin(idstructure,nom,prenom,specialite,telephone,photo,mdp) VALUES ('$struct','$nom','$prenom','$categ','$telephone','$image','$mdp')";
        if (mysqli_query($conn,$sql)){
          $message="Inscription effectuée avec succes";
		  echo "'<script type='text/javascript'>alect('$message')</script>";
        }else{
          $erreure="Inscription échouée";
          echo "'<script type='text/javascript'>alect('$erreure')</script>";
        }
        $sql2="SELECT * FROM medecin WHERE nom='$nom' AND prenom='$prenom' AND telephone='$telephone'";
        $query2=mysqli_query($conn,$sql2);
        $ligne=mysqli_fetch_assoc($query2);
        echo '
	      <div class="container img-thumbnail">
		  <div class="col-md-4 offset-md-4">
		  VOTRE IDENTIFIANT MEDECIN EST : '.$ligne['idmedecin'].' <br />
		  VOTRE MOT DE PASSE EST : '.$ligne['mdp'].' <br />
	<img height="225" width="200" src="data:image;base64,'.$ligne['photo'].'">
	</div>
	</div>';
      
    }
  }
 ?>		
			
			
			
          </div>
        </div>
        </div>
      </div>
    </section>
    <!--END section -->


   
   

    <!--<section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/img_5.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-9 text-center element-animate">
            <h2>Relax and Enjoy your Holiday</h2>
            <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem tempore expedita facere facilis, dolores!</p>
            <div class="btn-play-wrap"><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn-play popup-vimeo "><span class="ion-ios-play"></span></a></div>
          </div>
        </div>
      </div>
    </section>
     END section -->
   
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h2>TEL D'URGENCE</h2>
            <p>OUVERT 24/24 7j/7.</p>
            <p class="lead"><a href="tel://"< </a></p>
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