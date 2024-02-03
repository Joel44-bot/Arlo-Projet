<!-- For more projects: Visit codeastro.com  -->



<body>
 	 	<form method="POST" action="enregistrer.php">
	<?php
	        include("dbcon.php");

 
?>	
		
		
  	  	  <table id="table" style="width: 400px; margin: auto;overflow-x:auto; overflow-y: auto;">


<tr>
                   <td>NOM:</td>
        <!-- For more projects: Visit codeastro.com  -->
        <td><input type="text" style="width: 95px;" name="nom">

         </td>
        
        </tr> 

<tr>
                   <td>PRENOM:</td>
        <!-- For more projects: Visit codeastro.com  -->
        <td><input type="text" style="width: 95px;" name="prenom">

         </td>
        
        </tr>

	<tr>
                   <td>TELEPHONE:</td>
        <!-- For more projects: Visit codeastro.com  -->
        <td><input type="text" style="width: 95px;" name="tel">

         </td>
        
        </tr>	
<tr>
                   <td>ADRESSE:</td>
        <!-- For more projects: Visit codeastro.com  -->
        <td><input type="text" style="width: 95px;" name="adresse">

         </td>
        
        </tr>	
<tr>
                   <td>EMAIL:</td>
        <!-- For more projects: Visit codeastro.com  -->
        <td><input type="text" style="width: 95px;" name="email">

         </td>
        
        </tr>		
        
		<tr>
                   <td>Mot de Passe:</td>

          <td><input type="password" name="passe" id="company" size="10"></td>
        </tr>
		
             
      
        <tr>
          <td></td>
          <td> <input type="submit" name="submit" class="btn btn-success btn-large" style="width: 225px" value="Sauvegarder"> </td>
        </tr>

  	  	 </table> 
        <br>
  	  	 </form><br>
</body>

<script type="text/javascript">
		$(document).ready(function(){

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
<!-- For more projects: Visit codeastro.com  -->
