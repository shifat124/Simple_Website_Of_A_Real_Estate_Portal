<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> SK Real Estate </title>
    
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
                                <a href="registar.php" style="margin-left: 20px;"> Registar  </a> 
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"><p style="color:black;">SIGN IN</p> </div>
		
		<form action="signin.php" class="form_design" method="post">
                      
			<p style="color:black;">Username: </p> <input type="text" name="fname"> <br/>
			<p style="color:black;">Password: </p><input type="password" name="pass"> <br/> <br/>
			<input type="submit" value="Sign In">
                        
		</form>
                <form action="admin signin.php" class="form_design" method="post">
                      
			<p style="color:black;">Adminname: </p><input type="text" name="fname"> <br/>
			<p style="color:black;">Password: </p><input type="password" name="pass"> <br/> <br/>
			<input type="submit" value="Sign In">
                        
		</form>
     
                
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

