<?php
require 'connexion.php';
?>
<!doctype html>
<html lang="fr-FR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Bienvenue sur le site de l'Institut National de la Poste des Technologies de l'Information et de la Communication, la première école du numérique au Gabon.">
  <meta name="author" content="">

  <title>Institut National de la Poste, des Technologies de l'Information et de la communication</title>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

  <link rel="stylesheet" href="css/styles/bootstrap.css">
  <link rel="stylesheet" href="css/styles/animate.css">
  <link rel="stylesheet" href="css/styles/owl.carousel.min.css">

  <link rel="stylesheet" href="fonts/ionicons/css/styles/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/styles/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles/magnific-popup.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="/css/styles/style.css">

  <!-- CSS FILES -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/bootstrap-icons.css" rel="stylesheet">

  <link href="css/styles.css" rel="stylesheet">

</head>

<body id="section_1">

<header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Feu Rouge Gros-Bouquet, Libreville/Gabon
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="inptic@inptic-ga.org / info@inptic-ga.org">
                            inptic@inptic-ga.org / info@inptic-ga.org
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logoinptic.png" class="logo img-fluid" alt="Kind Heart Charity">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Acceuil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="formation.php">Formations</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="departement.php">Départements</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="chambres.php">Admissions</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="client.php">Résultats</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">Inscription</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
  <main>

    <section class="news-detail-header-section text-center">
      <div class="section-overlay"></div>

      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-12">
            <h1 class="text-white">Concours</h1>
          </div>

        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row">

          <div class="col-lg-10 col-12 text-center mx-auto">
            <h3 class="mb-5">Formulaire d'inscription au concours</h3>
            <br>
            <br>
            <form enctype="multipart/form-data" class="contact-form" action="ajouterclient.php" method="post" autoComplete="off">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="nom">Nom:</label>
                  <input type="text" name="nom" id="nom" class="form-control ">
                </div>

                <div class="col-md-6 form-group">
                  <label for="prenom">Prénom:</label>
                  <input type="text" name="prenom" id="prenom" class="form-control ">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="date">Date Naissance:</label>
                  <input type="date" name="date" id="date" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="sexe">Sexe:</label>
                  <select id="sexe" class="form-control" name="sexe">
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Féminin</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="telephone">Telephone:</label>
                  <input type="number" name="telephone" id="telephone" class="form-control ">
                </div>

                <div class="col-md-6 form-group">
                  <label for="telephone">Adresse:</label>
                  <input type="text" name="adresse" id="adresse" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="telephone">Email:</label>
                  <input type="email" name="email" id="telephone" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="image">Photo:</label>
                  <input type="file" name="foto" id="image" class="form-control" accept="image/*" required="">
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label for="telephone">SESSION:</label>

                <select id="annee" class="form-control" name="annee">
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>

                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>


                </select>
              </div>
              <div class="col-md-6 form-group">
                <label for="telephone">Filiere:</label>

                <select id="filiere" class="form-control" name="filiere">
                  <option value="MMI">Metier du Multimedia et Internet (MMI)</option>
                  <option value="GI">Genie Informatique</option>
                  <option value="RT">Reseaux et Telecom</option>
                  <option value="MTIC">MTIC</option>
                  <option value="MTIC">Audio Visuel</option>





                </select>
              </div>
              <div class="col-md-6 form-group">
                <br>
                <input type="submit" name="enregister" value="enregister" class="btn btn-primary">
              </div>

            </form>
          </div>

        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-12 text-center mx-auto">

          </div>
        </div>
      </div>
      </div>
    </section>
  </main>


  <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="img/logoinptic.png" class="logo img-fluid" alt="">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">Quick Links</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Become a volunteer</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Partner with us</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Contact</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="tel: +241 11 73 81 30 | 11 73 44 16" class="site-footer-link">
                        +241 11 73 81 30 | 11 73 44 16
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:inptic@inptic-ga.org / info@inptic-ga.org" class="site-footer-link">
                        inptic@inptic-ga.org / info@inptic-ga.org
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        Feu Rouge Gros-Bouquet, Libreville/Gabon
                    </p>

                    
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">Copyright © 2024 <a href="#"></a>
                            Inptic<a href="https://templatemo.com" target="_blank"></a></p>
                    </div>

                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>