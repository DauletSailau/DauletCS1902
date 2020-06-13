<!DOCTYPE html>
   <?php require("Database.php");
    session_start();
   ?>
   
<?php
if(!isset($_COOKIE['username'])){
	if(isset($_POST['submit'])){
	$username=mysqli_real_escape_string( $connect,trim($_POST['username']));
	$password=mysqli_real_escape_string( $connect,trim($_POST['password']));
	$email=mysqli_real_escape_string( $connect,trim($_POST['email']));
if(!empty($username) && !empty($password) && !empty($email)){
	$query="select 'username','email' from cients where username='$username' AND password='$password'";
$data=mysqli_query($connect,$query);
if(mysqli_num_rows($data)==1){
	$row=mysqli_fetch_assoc($data);
	setcookie('email',$row['email'], time()+(86400 * 30));
		setcookie('username',$row['username'], time()+(86400 * 30));
		
		
 }else{
	echo "please double-check the data 
	<br>";
	echo "<a href='works.php' value='Registration Form'></a>";
	
}
	}

	}
}
?>
<?php
  if(isset($_GET["woocommerce_checkout_place_order"])){
	 
	$Name=mysqli_real_escape_string( $connect,trim($_GET["Device"]));
		$Price=mysqli_real_escape_string( $connect,trim($_GET["Price"]));
			$Color=mysqli_real_escape_string( $connect,trim($_GET["color"]));
				$Company=mysqli_real_escape_string( $connect,trim($_GET["Company"]));
	$Quantity=mysqli_real_escape_string( $connect,trim($_GET['quantity']));
	$Final_Price=mysqli_real_escape_string( $connect,trim($_GET['final']));
 
}

if(!empty($Color) && !empty($Final_Price) &&!empty($Quantity)){
	$query="SELECT * FROM order where Name='$Name'";
	$data=mysqli_query($connect, $query);
	if(1){
	$query="INSERT INTO 'order' (Name, Price, Color, Company,Quantity,Final_Price) Values('$Name', '$Price', '$Color', '$Company','$Quantity','$Final_Price')";	
	mysqli_query($connect, $query);
echo "New record has been added successfully !";
mysqli_close($connect);
exit();
	}
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
          <h4>CHECKOUT</h4>
          <p>Enjoy Life</p>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!--  bluewrap -->

    <form method="get" action="services.php">
 <?php if(!empty($_COOKIE['username'])) {?>
                     <div class="product-content-right">
                        <div class="woocommerce">

                                <h3 id="order_review_heading">Your order</h3>

                                <div id="order_review" style="position: relative;">
                                    <table class="shop_table">
                                        <thead>
                                            <tr>
                                                <th class="product-name"><b>Product</b></th>
                                                <th class="product-total"><b>Total</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item" style="background:white; " >
                                                <td class="product-name">
                                                    The product's name   </td>
                                                <td class="product-total">
                                                    <span class="amount" style="background:white; " ><?php  if(isset($_POST["Device"])){ print $_POST["Device"];}else{ echo "NULL";} ?></span> 
													<input style="width:0px; background-color:grey;"name="Device" value="<?php echo $_POST["Device"]; ?>"> 												</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>Product Price</th>
                                                <td><span class="amount"><?php  if(isset($_POST["Cart"])){print $_POST["Price"];}else{echo "NULL";}?></span>
                                                <input style="width:0px; background-color:grey;"name="Price" value="<?php $_POST["Price"]; ?>"> 
												</td>
                                            </tr>

                      


                                            <tr class="order-total">
                                                <th>Model Color</th>
                                                <td><strong>												<input type="color"   name="color" value="#ff0000"></td>
</strong> </td>
                                            </tr>

											 
											
											 <tr class="order-total">
                                                <th>Company name</th>
                                                <td><strong><span class="amount"><?php  if(isset($_POST["Cart"])){ 
											echo $_POST['Company'];	 
 
												}else{ echo "NULL";} ?></span></strong>
<input style="width:0px; background-color:grey;"name="Company" value="<?php echo $_POST["Company"]; ?>"> 												</td>
                                            </tr>
											
											<tr class="order-total">
                                                <th>Quantity</th>
                                                <td>
												<input type="number"   name="quantity" min="0" max="10"></td>
                                            </tr>
											
											 <tr class="order-total">
                                                <th>Final Price</th>
                                                <td><strong><span class="amount">
												<?php 
												$Tax=15;
							$price1;				 
    if(isset($_POST['Cart'])){
 echo  $p=($_POST["Price"]-$_POST["Price"]*$Tax/100); 
}else{ echo "NULL";} ?></span></strong>
<input style="width:30px;"name="final" value="<?php $p?>"> </td>
                                            </tr>
                                        </tfoot>
                                    </table>

									
									    
									 
 

                                    <div id="payment">
 

                                        <div class="form-row place-order" >

                                            <input type="submit" data-value="Place order" value="Place order" id="place_order" name="woocommerce_checkout_place_order" class="button alt">


                                        </div>

 

                                    </div>
									</form>
                                </div>
			              </div>
						  
						  </div>  						  
  
 <?php } else{
	 ?>
 <a href="exit.php">Exit</a>
 <?php } ?>
 
  <!-- FOOTER -->
  <div id="f">
    <div class="container">
      <div class="row centered">
        <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- Footer -->

  
 

  
          <div class="row " style="width: 300px; margin-left: 150px;">
            <p>We are available 24/7, so don't hesitate to contact us.</p>
            <p>
              Somestreet Ave, 987<br/> London, UK.<br/> +44 8948-4343<br/> contact@example.com
            </p>

            <form   action="services.php" method="POST">

              <div class="form-group">
                <label for="contact-name">Your Name</label>
                <input type="text" name="username" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-email">Your Email</label>
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-subject">Password</label>
                <input type="password" name="password" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>

               
 
                 <button type="submit" name="submit" class="btn btn-large">Send Message</button>
 
            </form>
          </div>
        
   <?php var_dump($_COOKIE); ?>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/chart/chart.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>