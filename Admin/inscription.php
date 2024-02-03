
<!DOCTYPE html>
<html>
<head>
  <title>SPMS</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/jquery.css">
  <link rel="stylesheet" type="text/css" href="src/facebox.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">

  </style>
    
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/jquery_ui.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="src/facebox.js"></script>

 
    <script type="text/javascript">
       jQuery(document).ready(function($) {
    $("a[id*=popup]").facebox({
      loadingImage : 'src/img/loading.gif',
      closeImage   : 'src/img/closelabel.png'
    })
  })
    </script>

<script type="text/javascript">


//GET Medicine Name And Expire Date

  $(document).ready(function(){

       $("#qty").focus(

            function(){

              var medicine_name = $("#product_hidden").val();
              var expire_date   = $("#date_hidden").val();

            $.ajax({
              type:'POST',
              url :'auto.php',
              dataType:"json",
              data:{medicine_name:medicine_name,expire_date:expire_date},
              success:function(data){

                $("#avai_qty").val(data);
              },

            });
    });

//GET Medicine Name And Expire Date

         //Disabled Button If Quantity Not Available

          $("#qty").blur(function(){

             var avai_qty = $("#avai_qty").val();
             var in_qty = parseInt($("#qty").val());
             var avai_qty_int = parseInt($("#avai_qty").val());
             if(avai_qty == "" ||  in_qty > avai_qty_int || in_qty <= 0){
                    
                    $("#btn_submit").attr('disabled','disabled');
                    alert("Something went wrong!!");

             }
             else{

              $("#btn_submit").removeAttr('disabled');

             }

          });

         //Disabled Button If Quantity Not Available
});
     </script>

     <script language="javascript" type="text/javascript">

      //Clock

 
   //Clock
       
     </script>
    

</head>
<body>
 <div class="navbar navbar-inverse navbar-fixed-top"><!--*****Header******-->

      <div class=" navbar-inner">
        <div class="container-fluid">

          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
          </a>

          <a class="brand" href="#"><b>Gestion des CONCOURS INPTIC</b></a>
           <div class="nav-collapse">

            <ul class="nav pull-right">
               


               <li>

               
        <?php 
        include("dbcon.php");

          $quantity = "10";
          $select_sql1 = "SELECT * FROM stock where remain_quantity <= '$quantity' and status='Available2212'";
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
              $date = date('d-m-Y');    
        $inc_date = date("Y-m-d", strtotime("+6 month", strtotime($date))); 
        $select_sql = "SELECT  * FROM stock WHERE expire_date <= '$inc_date' and status='Available' ";
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
         
          <li><a href="index.php"><span class="icon-bar-chart"></span>Quitter</a></li>   
         
       </ul>
         </div>
        </div>
      </div>
  </div><!--*****Header******-->

 
 <div class="container">

    <div class="row">
      <div class="pull-right">
        <h3><font>INPTIC:</font></h3>
		<div class="post-entry" align="center">
              <img height="300" width="400" src="images/img17.jpg" alt="Image placeholder" class="img-fluid">
              </div>
                  <strong></strong>  
        </div>
      <div class="post-entry" >
              <img height="300" width="400" src="images/img17.jpg" alt="Image placeholder" class="img-fluid">
              </div>
                
				
				<br><br>
     

     <form name="clock" method="POST" action="index.php"><!--*****Clock******-->
     <input style="width:50px;background: #000;color: #fff;border-radius: 5px;height: 30px;" readonly type="submit" class="trans" name="face" value="">
      </form><!--*****Clock******-->

      
    </div>
  </div>
   
   <div class="container">
     <div class="row">
      <div class="contentheader">
        <h1> FORMULAIRE INSCRIPTION</h1>
       </div> <hr>
     
    <center>
      <div class="col-md-12">
	  <?php

include("dbcon.php");

if(isset($_POST['submit2'])){

$nom =$_POST['nom'];
$prenom =$_POST['prenom'];
$tel =$_POST['tel'];
$adresse =$_POST['adresse'];
$email =$_POST['email'];
$passe =$_POST['passe'];
$sexe =$_POST['sexe'];
$exp_date= strtotime($_POST['datenais']); 
$datenais = date('Y-m-d',$exp_date);
$profil ="Gestionnaire";



               $insert_sql ="INSERT INTO utilisateur(date_naissance,nom_user, prenom_user,tel, adresse, email,mot_de_passe,sexe,code_profil)values('$datenais','$nom','$prenom','$tel','$adresse','$email','$passe','$sexe','$profil')";//*****INSERTING INTO on_HOLD TABLE*******

                   // $date = date("Y-m-d");

             //  $insert_sql2 ="INSERT INTO sales(invoice_number,medicines,quantity, total_amount,total_profit, date )values('$consult','$consult','$clinik','$locals','$standard','$date')";//*****INSERTING INTO on_HOLD TABLE*******

	   	   	$insert_query = mysqli_query($con,$insert_sql);
//$insert_query2 = mysqli_query($con,$insert_sql2)
	if($insert_query){

     echo "COMPTE CREE AVEC SUCCES";
  
     // echo "<script type='text/javascript'>window.location.href = home.php?invoice_number=$invoice_number '</script>";
	}else{

	}

  }

?>
        <form method="POST" action="inscription.php" >
    	     
   <!-- </div> -->
   <input type="text" name="nom" id="company" size="10" value="" placeholder="votre nom" style="width:500px;height: 30px;">
      <input type="text" name="prenom" id="company" size="10" value="" placeholder="Votre Prenom" style="width:500px;height: 30px;">
      <input type="text" name="tel" id="company" size="10" value="" placeholder="Votre Telephone" style="width:500px;height: 30px;">
      <input type="text" name="adresse" id="company" size="10" value="" placeholder="Votre Adresse" style="width:500px;height: 30px;">
      <input type="email" name="email" id="company" size="10" value="" placeholder="Votre Email" style="width:500px;height: 30px;">
	        <input type="date" name="datenais" id="company" size="10" value="" placeholder="date naissance" style="width:500px;height: 30px;">

	  <select id="sexe" class="form-control" name="sexe">
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Féminin</option>
                  </select>
      <input type="password" name="passe" id="company" size="10" value="" placeholder="Votre Mot De Passe" style="width:500px;height: 30px;">

   
     <Button type="submit"  name="submit2" class="btn btn-success" id="btn_submit" style="width: 130px; height:40px; margin-top:-8px;"><i class="icon icon-plus-sign"></i> AJOUTER</button>
      </form> 
      </div>
    </center>
     </div>

  </div>

  
  <div class="container">
    <div class="row">
      <table class="table table-bordered table-striped table-hover" id="resultTable" data-responsive="table">
  
        <thead>
        <tr style="background-color: #383838; color: #FFFFFF;" >
            <th> Nom utilisateur </th>
			            <th> Prenom </th>
						            <th> Tel </th>
						            <th> Sexe </th>


            <th style="background: #c53f3f;"> Profil</th>
        
          </tr>
        </thead>
      
               <tbody>
                <?php
            $medicine_name = "";
            $category= "";
            $quantity= "";
      
                include("dbcon.php");
      
                $select_sql = "SELECT * from utilisateur";
      
                $select_query = mysqli_query($con ,$select_sql);
      
                   $i = 0;
                    
      
	  while($row=mysqli_fetch_assoc($select_query)):
                     $i++;
                 ?>
                    
                <tr class="record">
                     <td>
					 <?php echo $row['nom_user']?>
					 </td>
                     <td>
					 					 <?php echo $row['prenom_user']?>

                        
                      </td>
                      <td>
					 					 <?php echo $row['tel']?>

                        
                      </td>
					  <td>
					 					 <?php echo $row['sexe']?>

                        
                      </td>
					  <td>
					 					 <?php echo $row['code_profil']?>

                        
                      </td>
                     
      
                  <?php endwhile; ?>  
                </tr>
                <tr>
              <th colspan="5" ><font size=6><strong> Total:</strong></font></th>
              <td  colspan="2"><strong>
      <?php echo $i?>
               
              </td>
            </tr>
        </tbody>
      </table><br>
      
          <?php
           if($medicine_name && $category && $quantity !=null){
            ?>
      
            <a id="popup" href="checkout.php?invoice_number=<?php echo ""?>&medicine_name=<?php echo $medicine_name?>&category=<?php echo $category?>&ex_date=<?php echo $ex_date?>&quantity=<?php echo $quantity?>&total=<?php echo $grand_total?>&profit=<?php echo $grand_profit?>" style="width:400px;" class="btn btn-info btn-large">Proceed <i class="icon icon-share-alt"></i></a>
      
          <?php
           }else{
      
      
            ?>
      
      <div class="alert alert-danger">
        <h3><center>BIENVENUE!!</center> </h3>
    </div>
      
          <?php
       
                }
      
          ?>
    </div>
      </div>
 
  </body>
 </html>
<script type="text/javascript">


  $(document).ready(function(){

     $("#product").focus(

            function(){

              var bar_code = $("#bar_code").val();

            $.ajax({
              type:'POST',
              url :'bar_code.php',
              dataType:"json",
              data:{bar_code:bar_code},
              success:function(data){

                $("#product").val(data);
              },

            });
    });

      //****AUTO COMPLETE*****
    $("#product").typeahead({

               source: function(drug_result, result){

            $.ajax({

          url : 'autocomplete.php',
          method :'POST',
          data :{drug_result:drug_result},
          dataType:"json",

          success:function(data){

            result($.map(data,function(item){



              return item;

            }));
          },

        });
      },

    });

      //****AUTO COMPLETE*****



     //****Medicine name and Date*****
     $("#product").focusout(function(){
         
               var value = $("#product").val();

               var res= value.split(",");

               var name = res[0];

               var date = res[1];

            $("#product_hidden").val(name);
          $("#date_hidden").val(date);

    });
    //****Medicine name and Date*****

    //*******Qty Update*******
  for(var i=1;i<=100;i++){

  $("a.qty_upd"+i).click(function(){

        for(var i1=1;i1<=100;i1++){

                var med_id=$("#med_id"+i1).val();
                var med_name=$("#med_name"+i1).val();
                var med_cat=$("#med_cat"+i1).val();
                var ex_date=$("#ex_date"+i1).val();
                var hid_qty = $("#hid_quantity"+i1).val();
                var qty=$("#quantity"+i1).val();

                if(qty <= 0){

                  alert("Sorry Error");

                }else{

             $.ajax({
              type:'POST',
               beforeSend:function(){
                 $('.ajax-loader'+i1).css("visibility", "visible");
              },
              url :'quantity_upd.php',
              data:{med_id:med_id,med_name:med_name,med_cat:med_cat,ex_date:ex_date,hid_qty:hid_qty,qty:qty},

              success:function(){

                location.reload();

              },

            });

           }

         }
  });

}
     //*******Qty Update*******

  });
</script>
 