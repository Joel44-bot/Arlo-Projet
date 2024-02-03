<?php

   session_start();

  if(!isset($_SESSION['user_session'])){
    
      header("location:index.php");

  }

?>
<!DOCTYPE html>
<html>
<head>
 <title>SPMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="src/facebox.css">
  <link rel="stylesheet" type="text/css" href="css/tcal.css">
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/facebox.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
    $("a[id*=popup]").facebox({
      loadingImage : 'src/img/loading.gif',
      closeImage   : 'src/img/closelabel.png'
    })
  }) 
    </script>
    <script type="text/javascript" src="js/tcal.js"></script>
    <script type="text/javascript">

      function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}

      
    </script>


     
</head>
<body>
  <body style="height: 100%">
  <div class="navbar navbar-inverse navbar-fixed-top"><!--*****Header******-->
      <div class="navbar-inner">
        <div class="container-fluid">

          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
          </a>

          <a class="brand" href="#"><b>GABON SANTE+</b></a>

          <div class="nav-collapse">
            <ul class="nav pull-right">
               
               <li>

               
        <?php 
        include("dbcon.php");

          $quantity = "5";
          $select_sql1 = "SELECT * FROM stock where remain_quantity <= '$quantity' and status='ACCORD'";
          $result1 = mysqli_query($con,$select_sql1);
          $row2 = $result1->num_rows;

         if($row2 == 0){

            echo ' <a  href="#" class="notification label-inverse" >
                <span class="icon-exclamation-sign icon-large"></span></a>';

          }else{
            echo ' <a  href="qty_alert.php" class="notification label-inverse" id="popup">
                <span class="icon-exclamation-sign icon-large"></span>
                <span class="badge">'.$row2.'</span></a>';

    
          }


          ?> 
        </li>
          <li>
            <?php
              @$date = date('Y-m-d');    
        $inc_date = date("Y-m-d", strtotime("+6 month", strtotime($date))); 
        $select_sql = "SELECT  * FROM stock WHERE expire_date <= '$inc_date' and status='ACCORD' ";
         $result =  mysqli_query($con,$select_sql); 
          $row1 = $result->num_rows;

            if($row1 == 0){

                 echo ' <a  href="#" class="notification label-inverse" >
                <span class="icon-bell icon-large"></span></a>';

          }else{
            echo ' <a  href="ex_alert.php" class="notification label-inverse" id="popup">
                <span class="icon-bell icon-large"></span>
                <span class="badge">'.$row1.'</span></a>';

            }
            ?>
            
          </li>
        
            <!-- For more projects: Visit codeastro.com  -->
              
        <li><a href="home.php?invoice_number=<?php echo $_GET['invoice_number']?>"><span class="icon-home"></span>Acceuil</a></li>

         <li><a href="product/view.php?invoice_number=<?php echo $_GET['invoice_number']?>"><span class="icon-th"></span> Conges</a></li>

         <li><a href="backup.php?invoice_number=<?php echo $_GET['invoice_number']?>"><span class="icon-folder-open"></span> Retour</a></li>

         <li><a href="logout.php" class="link"><font color='red'><span class="icon-off"></span></font>Quitter</a></li>
       </ul>
      </div>
        </div>
      </div>
  </div><!--*****Header******-->

      <div class="container">


    <div class="row">
      <div class="contentheader">

        <h2>RECHERCHE CONGES</h2>
  
  <div class="pull-right">
        <h3><font>Ministere de la Communication:</font></h3>
		<div class="post-entry" align="center">
              <img src="images/img7.jpg" alt="Image placeholder" class="img-fluid">
              </div>
                  <strong></strong>  
        </div>
      </div><br>
  
  
   <center> <form action="sales_report.php?invoice_number=<?php echo $_GET['invoice_number']?>" method="POST">
  <strong>Du : <input type="date" style="width: 223px; padding:14px;" name="d1" class="tcal" autocomplete="off" value="" /> AU: <input type="date" style="width: 223px; padding:14px;" name="d2" autocomplete="off" class="tcal" value="" />
   <button class="btn btn-info" style="width: 123px; height:50px; margin-top:-8px;margin-left:8px;" type="submit" name="submit"><i class="icon icon-search icon-large"></i> Search</button>
  </strong>
  </form></center>
  
  <center>
    <div class="alert alert-info" role="alert">
      <small><b>Info:</b> Tous vos documents sont enregistres dans " <b>C:/invoices/</b> "</small>
    </div>
  <!-- For more projects: Visit codeastro.com  -->
  </center>
  
              <div style="overflow-x:auto; overflow-y: auto;">
  
  
       <table class="table table-bordered table-striped table-hover">
  
       <thead>
       <tr style="background-color: #383838; color: #FFFFFF;" >
              <tr style="background-color: #383838; color: #FFFFFF;" >
             <th width="3%">Numero</th>
             <th width="3%">service</th>
			              <th width="3%">Nom_Agent</th>

             <th width="1%">photo</th>
             <th width="5%">fonction</th>
             <th width="1%">date demande</th>
             <th  width="1%">debut</th>
             <th width="1%">fin</th>
             <th width="1%">motif</th>
             <th width = "3%" style="background-color: #c53f3f;" width="1%">Status</th>
             <th width = "5%">Actions</th>
            <!--  <th>Action</th>-->
            </tr></thead>
  
          <?php
  
              include("dbcon.php");
              error_reporting(1);
              if(isset($_POST['submit'])){
              $d1=$_POST['d1'];
              $d2=$_POST['d2'];
              $select_sql = "SELECT c.code_conge,s.libelle_service,u.nom_user,u.photo,c.date_demande,c.date_debut,c.date_fin,c.motif,c.fonction,c.statut FROM conge c,utilisateur u,service s where c.code_user=u.code_user and c.code_service=s.code_service and c.date_demande BETWEEN '$d1' and '$d2' order by c.date_demande desc ";
              $select_query = mysqli_query($con,$select_sql);
              while($row = mysqli_fetch_array($select_query)) :
           ?>
            <tbody>
            <tr>
              <td><?php echo $row['code_conge']; ?></td>

            <td><?php echo $row['libelle_service']; ?></td>
            <td><?php echo $row['nom_user']; ?></td>
            <td>                	<img height="225" width="200" src="data:image;base64,<?php echo $row['photo']?>">
</td>
            <td><?php echo $row['fonction'];?></td>              
            <td><?php echo  date("d-m-Y", strtotime($row['date_demande'])); ?></td>
			<td><?php echo date("d-m-Y", strtotime($row['date_debut'])); ?></td>
				<td><?php echo date("d-m-Y", strtotime($row['date_fin'])); ?></td>

            <td><?php echo $row['motif']; ?></td>
            <td><?php $status = $row['statut'];
  
                if($status == 'ACCCORD'){
                  echo '<span class="label label-success">'.$status.'</span>';
                }else{
                  echo '<span class="label label-danger">'.$status.'</span>';
                }
  
            ?></td>
            <td><a id="popup" href="product/update_view.php?id=<?php echo $row['code_conge']?>&invoice_number=<?php echo $_GET['invoice_number']?>"><button class="btn btn-info"><span class="icon-edit"></span></button></a>
  
                                       <?php endwhile;?>
  
            </tr>
            </tbody>
  
            
                 
               
                
                            <?php }else{
  
  
  
  
                            $select_sql = "SELECT * FROM sales where Date = '$date'";
                            $select_query = mysqli_query($con,$select_sql);
                            while($row = mysqli_fetch_array($select_query)) :
  
  
                              ?>
  
                               <tbody>
            <tr> 
              <td><?php echo $row['Date']?>&nbsp;&nbsp;(<font size='2' color='#009688;'> Aujourd'hui</font>)</td>
              <td><?php $invoice_number =  $row['invoice_number'];
  
                   echo $invoice_number;
  
                   ?></td>
            
             <td><?php echo $row['medicines']?></td>
             <td><?php echo $row['quantity']?></td>
  
              <td><?php echo $row['total_amount']?></td>
              <td><?php echo $row['total_profit']?></td>
              <td><a href="download.php?invoice_number=<?php echo $invoice_number?>"><button class="btn btn-success btn-md"><span class="icon-download-alt"></span> Download</button></a>
          </td>
         <?php endwhile;?>
  
            </tr>
            </tbody>
  
             <th colspan="4">Total:</th>
                <th>
                  
				  <!-- For more projects: Visit codeastro.com  -->
                </th>
                <th colspan="2">
                  <?php
  
                  $select_sql = "SELECT sum(total_profit) from sales where Date = '$date'";
  
                  $select_query = mysqli_query($con, $select_sql);
  
                  while($row = mysqli_fetch_array($select_query)){
  
                     echo $row['sum(total_profit)'];
                }
                  ?>
  
                            <?php } ?>
                </th>
  
        </table>
  
     </div>
    </div>
  </div>
  </body>
</html>
<!-- For more projects: Visit codeastro.com  -->

