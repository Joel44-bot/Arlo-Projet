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

  <!-- CSS FILES -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/bootstrap-icons.css" rel="stylesheet">

  <link href="css/styles.css" rel="stylesheet">

  <link rel="stylesheet" href="css/styles/form.css">
  <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

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
  <!-- END header -->
  <main>
    <section class="text-center news-detail-header-section">
      <div class="section-overlay"></div>

      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-12">
            <h1 class="text-white">Admission</h1>
          </div>

        </div>
      </div>
    </section>
    <br>
    <br>
    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8 form-group">
                <form enctype="multipart/form-data" class="contact-form" action="chambres.php" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="telephone">Année du concours:</label>
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
                    <div class="col-md-4">
                    <button type="search" name="recherche" class="btn btn-primary">Rechercher</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-2"></div>
            </div>
            <br><br><br>
            <?php
            if (isset($_POST['recherche'])) {
              $idclient = $_POST['annee'];
              $rec = mysqli_query($conn, "SELECT * FROM utilisateur where mot_de_passe='$idclient'");
            ?>
              <h2 class="mb-5 text-center">LISTE DES CANDIDATURES SESSION <?php echo " __" . $idclient ?></h2>
              <div class="row">
              </div>
          </div>
        </div>
      </div>

      <div class="row m-t-25">
        <table border="1px" solid="#3c763d" class="table table-borderless table-striped table-earning">
          <thead>
              <tr border="1px" solid="#3c763d" width="100%">
              <th border="1px" solid="#3c763d" width="10%">PHOTO</th>
              <th border="1px" solid="#3c763d" width="10%">NOM</th>
              <th border="1px" solid="#3c763d" width="10%">PRENOM</th>
              <th border="1px" solid="#3c763d" width="10%">DATE NAISSANCE</th>
              <th border="1px" solid="#3c763d" width="10%">TEL</th>
              <th border="1px" solid="#3c763d" width="10%">ADRESSE</th>
              <th border="1px" solid="#3c763d" width="10%">Email</th>
              <th border="1px" solid="#3c763d" width="10%">FILIERE</th>
              <th border="1px" solid="#3c763d" width="10%">SESSION</th>
              <th border="1px" solid="#3c763d" width="10%">STATUT</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($ligne = mysqli_fetch_array($rec)) { ?>
              <tr border="1px" solid="#3c763d" width="100%">
                <td border="1px" solid="#3c763d" width="10%"><img height="125" width="100" src="data:image;base64,<?php echo $ligne['photo'] ?>"></td>
                <td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['nom_user'] ?></td>
                <td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['prenom_user'] ?></td>
                <td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['date_naissance'] ?></td>
                <td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['tel'] ?></td>
                <td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['adresse'] ?></td>
                <td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['email'] ?></td>
                <td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['filiere'] ?></td>
                <td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['mot_de_passe'] ?></td>
                <td border="1px" solid="#3c763d" width="10%"><?php echo $ligne['statut'] ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    <?php } ?>
    </section>
  </main>
  <br>
  <br>
  <br>
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="mb-4 col-lg-3 col-12">
          <img src="img/logoinptic.png" class="logo img-fluid" alt="">
        </div>

        <div class="mb-4 col-lg-4 col-md-6 col-12">
          <h5 class="mb-3 site-footer-title">Quick Links</h5>

          <ul class="footer-menu">
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li>

            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Become a volunteer</a></li>

            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Partner with us</a></li>
          </ul>
        </div>

        <div class="mx-auto col-lg-4 col-md-6 col-12">
          <h5 class="mb-3 site-footer-title">Contact</h5>

          <p class="mb-2 text-white d-flex">
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

          <p class="mt-3 text-white d-flex">
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
            <p class="mb-0 copyright-text">Copyright © 2024 <a href="#"></a>
              Inptic<a href="https://templatemo.com" target="_blank"></a></p>
          </div>

          <div class="mx-auto col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center">
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