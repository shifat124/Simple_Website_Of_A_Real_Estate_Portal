<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Information About Users </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> SK Real Estate </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="#"> Home </a> 
				<a href="#" style="margin-left: 20px;"> Users </a> 
				<a href="#" style="margin-left: 20px;"> Admins  </a> 
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"><p style="color:black;">All Users List</p> </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
			<div class="row" style="padding:10px;"> 
				
				<div class="col-md-3">  Username </div>
				<div class="col-md-3">  Email </div>
				<div class="col-md-3">  Address </div>
                                <div class="col-md-3">  Contact No </div>
                                
		
			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("dbconnect.php");
			$sql = "SELECT * FROM users";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			<div class="row" style="padding:5px;"> 
				<div class="col-md-3">  <?php echo $row[1]; ?> </div>
				<div class="col-md-3">  <?php echo $row[3]; ?> </div>
				<div class="col-md-3">  <?php echo $row[4] ?> </div>
				<div class="col-md-3">  <?php echo $row[5] ?> </div>
                                
			</div>
			
			<?php 
				}					
			}
			?>
			
		</div>
		
		
		
		
		
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

