<?php
require 'connexion.php';
$idclient = "";
$nom = "";
$prenom = "";
$datenais = "";
$sexe = "";
$tel = "";
$photo = "";
$phto = "";

$mdp = "";
$sexe1 = "";
$sexe2 = "";
$val = 0;


if (isset($_POST['modifier'])) {

  //RECUPERER L'IMAGE
  $photo = addslashes($_FILES['foto']['tmp_name']);
  $nomImage = addslashes($_FILES['foto']['tmp_name']);
  $photo = file_get_contents($photo);
  $photo = base64_encode($photo);


  $annee = htmlspecialchars($_POST['date']);
  $date1 = strtotime($annee);
  $datenais = date('Y-m-d');

  $idclient = $_POST['idclient'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $sexe = $_POST['sexe'];
  $adresse = $_POST['adresse'];
  $email = $_POST['email'];

  $tel = $_POST['tel'];
  $mdp = $_POST['mdp'];
  if (mysqli_query($conn, "UPDATE utilisateur set nom_user='$nom',prenom_user='$prenom',date_naissance='$datenais',sexe='$sexe',tel='$tel',photo='$photo',mot_de_passe='$mdp',adresse='$adresse',email='$email' where email='$idclient'")) {
    $message = "Modification effectuée avec succes";
    echo "'<script type='text/javascript'>alect('$message')</script>";
  }
}
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

    <main>
    <section class="news-detail-header-section text-center">
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
            <br>

            <section class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <form enctype="multipart/form-data" class="contact-form" action="client.php" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <input type="email" name="chercher" class="form-control" placeholder="Votre Email Agent" autoComplete="off">
                  </div>
                  <div class="col-md-6">
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
                  <div class="col-md-6">
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
            $idclient = $_POST['chercher'];
            $idclient2 = $_POST['annee'];

            $rec = mysqli_query($conn, "SELECT * FROM utilisateur where email='$idclient'");
            $resresult = mysqli_fetch_array($rec);
            $nom2 = $resresult['filiere'];

            $rec2 = mysqli_query($conn, "SELECT * FROM utilisateur where mot_de_passe='$idclient2' and filiere='$nom2'");

            $nom = $resresult['nom_user'];
            $prenom = $resresult['prenom_user'];
            $date2 = $resresult['date_naissance'];
            $sexe = $resresult['sexe'];
            $tel = $resresult['tel'];
            $phto = $resresult['photo'];
            $mdp = $resresult['mot_de_passe'];
            $adresse = $resresult['adresse'];
            $email = $resresult['email'];
            $email2 = $resresult['filiere'];


            $annee = htmlspecialchars($resresult['date_naissance']);
            $date1 = strtotime($annee);
            $datenais = date('d/m/Y');

            $sexe2 = "";

            $taille = strlen($sexe);
            if ($taille == 8) {
              $sexe1 = $sexe;
              $sexe2 = "Feminin";
              $val = 1;
            } else {
              $sexe1 = $sexe;
              $sexe2 = "Masculin";
              $val = 0;
            }

          ?>


            <h2 class="mb-5 text-center">Information de l'Etudiant</h2>
            <div class="row">

              <div class="col-md-6">
                <form enctype="multipart/form-data" class="contact-form" action="client.php" method="post">
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
                    <div class="col-md-6 form-group">
                      <label for="nom">Adresse:</label>
                      <input type="texte" name="adresse" id="nom" class="form-control " value="<?php echo $adresse ?>">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="arrival_date">Email:</label>
                      <input type="texte" name="email" id="prenom" class="form-control " value="<?php echo $email ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label for="date">Date de naissance: </label>
                      <div style="position: relative;">
                        <input type='texte' name="date" class="form-control" id='date' value="<?php echo $datenais ?>">
                      </div>
                    </div>
                    <div class="col-sm-6 form-group">
                      <label for="sexe">Sexe:</label>
                      <select id="sexe" class="form-control" name="sexe">
                        <option value="<?php if ($val == 1) {
                                          echo "Masculin";
                                        } else {
                                          echo "Feminin";
                                        } ?>"> <?php if ($val == 1) {
                                                                                                        echo "Masculin";
                                                                                                      } else {
                                                                                                        echo "Feminin";
                                                                                                      } ?></option>
                        <option value="<?php if ($val == 1) {
                                          echo "Feminin";
                                        } else {
                                          echo "Masculin";
                                        } ?>"> <?php if ($val == 1) {
                                                                                                        echo "Feminin";
                                                                                                      } else {
                                                                                                        echo "Masculin";
                                                                                                      } ?></option>
                      </select>
                    </div>
                  </div>
                  <div class="row">

                    <div class="col-md-6 form-group">
                      <label for="telephone">Telephone:</label>
                      <input type="texte" id="telephone" name="tel" class="form-control " value="<?php echo $tel ?>">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="telephone">SESSION:</label>
                      <input type="Texte" id="telephone" name="mdp" class="form-control " value="<?php echo $mdp ?>">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="sexe">Filiere:</label>

                      <select name="filiere" id="room" class="form-control">

                        <?php
                        echo '<option value="' . $email2 . '">' . $email2 . '</option> ';
                        ?>
                        <option value="MMI">Metier du Multimedia et Internet (MMI)</option>
                        <option value="GI">Genie Informatique</option>
                        <option value="RT">Reseaux et Telecom</option>
                        <option value="MTIC">MTIC</option>
                        <option value="Audio Visuel">Audio Visuel</option>



                      </select>
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


      <table border="1px" solid="#3c763d" class="table table-borderless table-striped table-earning">
        <thead>
          <tr border="1px" solid="#3c763d" width="100%">
            <th border="1px" solid="#3c763d" width="10%">Photo</th>

            <th border="1px" solid="#3c763d" width="10%">Nom</th>

            <th border="1px" solid="#3c763d" width="10%">Prenom</th>
            <th border="1px" solid="#3c763d" width="10%">Date de naissance</th>
            <th border="1px" solid="#3c763d" width="10%">Téléphone</th>
            <th border="1px" solid="#3c763d" width="10%">Adresse</th>
            <th border="1px" solid="#3c763d" width="10%">Email</th>
            <th border="1px" solid="#3c763d" width="10%">Filière</th>
            <th border="1px" solid="#3c763d" width="10%">Session</th>
            <th border="1px" solid="#3c763d" width="10%">Résultat au concours  </th>

          </tr>
        </thead>
        <tbody>

          <?php while ($ligne = mysqli_fetch_array($rec2)) { ?>
            <tr border="1px" solid="#3c763d" width="100%">
              <td border="1px" solid="#3c763d" width="10%"><img height="225" width="200" src="data:image;base64,<?php echo $ligne['photo'] ?>"></td>

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
  <!-- END section -->
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