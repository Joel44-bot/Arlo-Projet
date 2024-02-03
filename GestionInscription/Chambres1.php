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
                <a class="nav-link active" href="index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="Chambres.php">Médecins</a>

              </li>
              
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Client.php">Patient</a>
              </li>
                  
              <li class="nav-item cta">
                <a class="nav-link" href="inscription.php"><span>S'inscrire</span></a>
              </li>
                 <li class="nav-item ">
                <a class="nav-link" href="compte.php">Programmer</a>
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

            <div class="col-md-12">
            <h2 class="mb-5 text-center">QUELLE SPECIALITE ?</h2>
            
  <form enctype="multipart/form-data" class="contact-form" action="" method="post" >
              <div class="row">
                <div class="col-md-6 form-group">
                      <label for="room">SPECIALITE</label>
                      <select name="categorie" id="room" class="form-control">
                        <option value="PEDIATRE">PEDIATRE</option>
                        <option value="ANESTHESISTE">ANESTHESISTE</option>
                        <option value="GENERALISTE">GENERALISTE</option>
                        <option value="DENTISTE">DENTISTE</option>
                        <option value="CARDIOLOGUE">CARDIOLOGUE</option>
                       <option value="DERMATHOLOGUE">DERMATHOLOGUE</option>
                      </select>
                    </div>
                <div class="col-md-6 form-group">
                  <br>
                  <input type="submit" name="Afficher" value="Afficher" class="btn btn-primary">
                </div>+
              </div>
            </form>
     
    
      
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="site-section">
      <div class="container">
        <div class="row">

 <?php 
  require'connexion.php';
  if (isset($_POST['Afficher'])) {
    
      //RECUPERER L'IMAGE
      

      $nom=htmlspecialchars($_POST['categorie']);
      
      if (!empty($nom)) {
        $sql2="SELECT m.idmedecin,m.nom,m.prenom,m.specialite,m.telephone,s.nom as ns,s.commune,s.quartier,s.adresse,s.horaire,m.photo FROM  medecin m,structure s WHERE m.specialite='$nom' AND m.idstructure=s.idstructure";
        $query2=mysqli_query($conn,$sql2);
       while($ligne=mysqli_fetch_assoc($query2)){

echo '
<div class="col-md-4 mb-4">
            <div class="media d-block room mb-0">
              <figure>
<img height="165" width="140" src="data:image;base64,'.$ligne['photo'].'">
 <div class="overlap-text">
                  <span>
                    MEDECIN :  '.$ligne['specialite'].'
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                </div>
              </figure>
              <div class="media-body">
                <h5 class="mt-0"><a href="#">'.$ligne['nom'].'</a></h5>
                <ul class="room-specs">
                  <li><span class="ion-ios-people-outline"></span> '.$ligne['prenom'].'</li>
                  <li><span class="ion-ios-crop"></span>TEL : '.$ligne['telephone'].'</li>
                </ul>
                
                <p><a href="" class="btn btn-primary btn-sm">STRUCTURE  : '.$ligne['ns'].' </a></p>
				 <p><a href="" class="btn btn-primary btn-sm">'.$ligne['horaire'].' </a></p>
                <p><a href="" class="btn btn-primary btn-sm">COMMUNE: '.$ligne['commune'].' </a></p>
				 <p><a href="" class="btn btn-primary btn-sm">QUARTIER: '.$ligne['quartier'].' </a></p>

              </div>
			  		<form enctype="multipart/form-data" class="contact-form" action="rendezvous.php" method="post" >
                  <div class="row">
                    <div class="col-md-6">
                              <input type="hidden" name="idmedecin" value="'.$ligne['idmedecin'].'">
							                        <input type="submit" value="Prendre Rendez-vous" name="rendezvous" class="btn btn-info">

                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </form>




            </div>
          </div>





';



       } 
      }
    
  }
 ?>          
          
        </div>
      </div>
    </section>

   
   

    <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/img_7.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-9 text-center element-animate">
            <h2>Contacter votre medecin</h2>
            <div class="btn-play-wrap"><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn-play popup-vimeo "><span class="ion-ios-play"></span></a></div>
          </div>
        </div>
      </div>
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