<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="ADMINISTRATEUR">
                            </a>
                        </div>
	<?php
	$connect=new PDO('mysql:host=localhost;dbname=rendez_vous','root','');
function nbreligne($connect, $query){
	$stmt=$connect->prepare($query);
	$stmt->execute();
	return $stmt->rowCount();
}

?>
<?php	
if(isset($_POST['valider'])){
	$matri=$_POST['login'];
	$mdpp=$_POST['password'];
$sql2="SELECT * FROM medecin where idmedecin='$matri' and mdp='$mdpp'";
	
	$nbre=nbreligne($connect, $sql2);
if($nbre>0){?>
	
	<div class="au-btn au-btn--block au-btn--green m-b-20">
			<?php 
			echo "<h4><a href=administration.php?mat=$matri>Bienvenue Cliquez ici</a></h4>";
			?>
         </div>
	
<?php 	}
else{?>
	<div class="au-btn au-btn--block au-btn--green m-b-20">
			<?php 
			echo '<h4><a>Vos parametres sont incorects réessayez</a></h4>';
			?>
         </div>
<?php 	}
}

?>					
						
						
						
                        <div class="login-form">
                            <form action="" method="post" autoComplete="off">
                                <div class="form-group">
                                    <label>Identifiant du Medecin</label>
                                    <input class="au-input au-input--full" type="texte" name="login" placeholder="Login">
                                </div>
                                <div class="form-group">
                                    <label>Mot de Passe </label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Enregistrer le Mot de passe
                                    </label>
                                    <label>
                                        <a href="#">Mot de passe oublié?</a>
										                                    <a href="index.php">ESPACE PATIENTS</a>

                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="valider">Se Connecter</button>
                                
                            </form>
                            <div class="register-link">
                                <p>
                                    Vous avez pas encore un compte?
                                    <a href="inscriptionmed.php">Créer ici</a>
									
                                </p>
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->