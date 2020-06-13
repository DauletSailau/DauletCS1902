
<!DOCTYPE html>
   <?php require("Database.php"); 
 ?>
<?php
 if(isset($_GET["submit"])){
	$username=mysqli_real_escape_string( $connect,trim($_GET['username']));
		$password=mysqli_real_escape_string( $connect,trim($_GET['password']));
			$email=mysqli_real_escape_string( $connect,trim($_GET['email']));
}
if(!empty($username) && !empty($password) &&!empty($email)){
	$query="SELECT * FROM cients where username='$username'";
	$data=mysqli_query($connect, $query);
	if(mysqli_num_rows($data)==0){
	$query="INSERT INTO cients (username, password, email) Values('$username','$password', '$email')";	
	mysqli_query($connect, $query);
echo "New record has been added successfully !";
mysqli_close($connect);
exit();
	}else{
		echo "It Exists!";}
}

?>
<head>
  <meta charset="utf-8">
  <title>Daulet Sailau</title>
   
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

   <link href="css/style.css" rel="stylesheet">

   <style>
   input{
	   background-color:white;
	   color: black;
 
    }
   #Reg{
	   margin-left:30%;
 
    }
	
   </style>
   
</head>

<body>

  
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
     
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-center">
          <li class="active"><a href="index.php">HOME</a></li>
          <li><a href="about.php">ITEMS</a></li>
          <li><a href="services.php">CHECKOUT</a></li>
          <li><a href="works.php">AUTHORIZATION</a></li>
          <li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
         </ul>
      </div>
     </div>
  </div>

  <div id="blue">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h4>AUTHORIZATION</h4>
          <p>Enjoy Life</p>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!--  bluewrap -->
  
 

 <div id="Reg">
 <form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>" >
  <br>
     <div class="row ">
	      <div class="container ">
       <div class="col-sm-2">
 <label for="username">Вводи логин </label>
  <br>  <br>  <br>

 <label for="password">Вводи пароль</label>
  <br>  <br>   <br>
 <label for="email">Вводи почту </label>
 </div>
 
<div class="col-sm-2">
<input type="text" name="username" >
 <br>  <br>

  <input type="password" name="password">
  <br>  <br>

 <input type="email" name="email">
  </div>
  <br>
</div>
</div>
 <button type="submit" name="submit">Регистрация</button>
 

 </FORM>
 
 </div>
 
 
  
  <br>

  <!-- FOOTER -->
  <div id="f" style="bottom:auto;">
    <div class="container">
      <div class="row centered">
        <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- Footer -->

     <?php require_once("Login.php"); ?>


   

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/chart/chart.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>