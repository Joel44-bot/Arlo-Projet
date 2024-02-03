<!-- For more projects: Visit codeastro.com  -->
<?php
error_reporting(1);
session_start();
include("dbcon.php");
if(isset($_SESSION['user_session'])){
  
  $invoice_number="CA-".invoice_number();
	header("location:home.php?invoice_number=$invoice_number");
}

   if(isset($_POST['submit'])){  //******Login Form*******
  $username =$_POST['username'];

  $password = $_POST['password'];

  $password = sha1($password);

  $select_sql = "SELECT * FROM users ";

  $select_query = mysqli_query($con,$select_sql);
   
  if($select_query){

  	while ($row =mysqli_fetch_array($select_query)) {
  		$s_username = $row['user_name'];
  		$s_password = $row['password'];
  	}
  }

 if($s_username == $username && $s_password == $password){
          
         $_SESSION['user_session'] = $s_username;
         $invoice_number="CA-".invoice_number();
 	       header("location:home.php?invoice_number=$invoice_number");


 }else{
	 

	$connect=new PDO('mysql:host=localhost;dbname=baseinptic','root','');
function nbreligne($connect, $query){
	$stmt=$connect->prepare($query);
	$stmt->execute();
	return $stmt->rowCount();
}


	

	$matri=$_POST['username'];
	$mdpp=$_POST['password'];
	$mdpp2="Gestionnaire";
$sql2="SELECT * FROM utilisateur where nom_user='$matri' and mot_de_passe='$mdpp' and code_profil='$mdpp2'";
	
	$nbre=nbreligne($connect, $sql2);
if($nbre>0){
	
	$_SESSION['user_session'] = $matri;
         $invoice_number="CA-".invoice_number();
 	       header("location:home.php?invoice_number=$invoice_number");
	
}
else{
	 $error_msg = "<center><font color='red'>Login Failed</font></center>";
 	}
	 
	 
	 
 	  	   
 }

}                  //******Login Form*******



 //******Login Form*******

  function invoice_number(){   //********Outputting Random Number For Invoice Number********

    $chars = "09302909209300923";

    srand((double)microtime()*1000000);

    $i = 1;

    $pass = '';

    while($i <=7){

      $num  = rand()%10;
      $tmp  = substr($chars, $num,1);
      $pass = $pass.$tmp;
      $i++;
    }
    return $pass;
                        //********Outputting Random Number For Invoice Number********
  }                       
?>

<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
<!-- For more projects: Visit codeastro.com  -->
	<title>SPMS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
</head>
<body>

	<center>
			            <img src="" alt="" class="img-md-fluid">

		<h1>INSCRIPTION AU CONCOURS INPTIC </h1>
          <div class="col-md-7">
            <img height="500" width="700" src="images/img18.jpg" alt="" class="img-md-fluid">
          </div>
	</center>



		
	
		

  
  
  
 		<form method="POST">
				<table class="table table-bordered table-responsive " >

 <tr>
			  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>
			  			  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>
			  <td><a href="">NOM UTILISATEUR</a></td>
			  <td><input type="text" autocomplete="off" name="username" class="form-group" required></td>
			  			  <td><label for="username"> </label></td>
						  <td><label for="username"> </label></td>
						  <td><label for="username"> </label></td>
						  			  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>

			</tr>
			<tr>
						  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>
						  <td><label for="username"> </label></td>
<td><label for="username"> </label></td>
<td><label for="username"> </label></td>
				<td><a href="">MOT DE PASSE</a></td>
				<td><input type="password" name="password" required></td>
							  <td><label for="username"> </label></td>
							  <td><label for="username"> </label></td>
							  <td><label for="username"> </label></td>
							  			  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>

			</tr>
			
			
			<tr>
						  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>
						  <td><label for="username"> </label></td>
<td><label for="username"> </label></td>
<td><label for="username"> </label></td>
				<td><input type="submit" name="submit" class="btn btn-success btn-large" value="Login"></td>
				<td>
				<p>
                                    Vous avez pas encore un compte?
                                    <a href="inscription.php">Inscrivez-vous ici</a>
									
                                </p>
				</td>
							  <td><label for="username"> </label></td>
							  <td><label for="username"> </label></td>
							  <td><label for="username"> </label></td>
							  			  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>
			  <td><label for="username"> </label></td>

			</tr>			
      <input type="hidden" aucomplete="off" name="invoice_number" value="<?php echo 'CA-'.invoice_number()?>">

		</table>
    

		

    <?php echo $error_msg;?>

 
	</form>

  
 
</body>
</html>
<!-- For more projects: Visit codeastro.com  -->