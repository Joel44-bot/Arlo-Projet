<!-- For more projects: Visit codeastro.com  -->
<?php

   session_start();

   include("../dbcon.php");

  if(!isset($_SESSION['user_session'])){
    
      header("location:../index.php");

  }

  //****SELECTINg FROM stock******

$id = $_GET['id'];

$invoice_number = $_GET['invoice_number'];

$select_sql = "SELECT * FROM utilisateur where code_user = '$id' ";
  
$select_query = mysqli_query($con,$select_sql);

  while($row = mysqli_fetch_array($select_query)):



?>
<body>  
    <form method="POST" action="update.php?invoice_number=<?php echo $invoice_number?>">
    	<?php
	        include("../dbcon.php");

 $sql2="SELECT code_service, libelle_service FROM  service";
        $query2=mysqli_query($con,$sql2);
$sql3="SELECT code_user, nom_user FROM utilisateur ";
        $query3=mysqli_query($con,$sql3);

?>	     



		 <table id="table" style="width: 400px; margin: auto;">
		 <tr>
		 <td>Numero:</td>
         <td><input type="hidden" name="num" value="<?php echo $row['code_user']?>"></td>
		 </tr>
<tr>
         
          </tr>


         

        <tr>
                   <td> nom:</td>

          <td><input type="text"  name="nom" id="reg_date" size="5" value="<?php echo $row['nom_user']?>"  required>  </td>
        </tr>
        <tr>
                   <td> prenom:</td>

          <td><input type="text"  name="prenom" id="reg_date" size="5" value="<?php echo $row['prenom_user']?>"  required>  </td>
        </tr>
		<tr>
                   <td> Date naissance:</td>

          <td><input type="date"  name="datenais" id="reg_date" size="5" value="<?php echo $row['date_naissance']?>"  required>  </td>
        </tr>
		
		<tr>
                   <td>Session:</td>

          <td><input type="text" name="session" id="company" size="10" value="<?php echo $row['mot_de_passe']?>"></td>
        </tr>
		<tr>
                   <td>filiere:</td>

          <td><input type="text" name="filiere" id="company" size="10" value="<?php echo $row['filiere']?>"></td>
        </tr>
        
        
        <tr>
            <td>Statut:</td>
            <td>
                <select style="width: 230px; height: 35px; border-color: #000080" name="statut"> 
                 <option  disabled><?php echo $row['statut']?></option>
                 <option value="ADMIS">Admis</option>
                 <option value="AJOURNER">Ajourner</option>
                 </select></td>
        </tr>
      <?php endwhile; ?>
        <tr>
          <td></td>
          <td> <input type="submit" name="update" class="btn btn-success btn-md" style="width: 225px" value="Modifier"> </td>
        </tr>

         </table> 
        <br>
         </form><br>
</body>

<script type="text/javascript">
    $(document).ready(function(){//***AUTO CALCULATION****

        $(document).on('keyup','#med_name', 

        function(){
             var med_name_cap = $("#med_name").val();
              
              $("#med_name").val(med_name_cap.charAt(0).toUpperCase()+med_name_cap.slice(1));
      
        });


      $(document).on('keyup','#category', 

        function(){
             var category_cap = $("#category").val();
              
              $("#category").val(category_cap.charAt(0).toUpperCase()+category_cap.slice(1));
      
        });


      $(document).on('keyup','#actual_price', 

        function(){
             var act_price = $("#actual_price").val();
      var sell_price = $("#selling_price").val();
      var pro_price = parseInt(sell_price) - parseInt(act_price);
	var percentage = Math.round((parseInt(pro_price)/parseInt(act_price))*100);
	var output = pro_price.toString().concat("(")+percentage.toString().concat("%)");
        $("#profit_price").val(output);
        });

       $(document).on('keyup','#selling_price', 
        function(){
      var act_price = $("#actual_price").val();
      var sell_price = $("#selling_price").val();
      var pro_price = parseInt(sell_price) - parseInt(act_price);
	var percentage = Math.round((parseInt(pro_price)/parseInt(act_price))*100);
	var output = pro_price.toString().concat("(")+percentage.toString().concat("%)");
        $("#profit_price").val(output);
            });
});
    
  </script>
</html>

