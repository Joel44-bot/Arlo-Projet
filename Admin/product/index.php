<!-- For more projects: Visit codeastro.com  -->
<?php
 
    session_start();

    if(!isset($_SESSION['user_session'])){

        header("location:../index.php");
    }
	
?>


<body>
 	 	<form method="POST" action="register.php?invoice_number=<?php echo $_GET['invoice_number']?>">
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
           <input type="submit" name="submit" class="btn btn-success btn-large" style="width: 225px" value="Sauvegarder"> </td>
       
 </div>
  	  	
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
