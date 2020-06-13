<!DOCTYPE html>
   <?php require("Database.php"); 
       session_start();
?>
<?php 
if(isset($_POST['Cart'])){
	$guess=$_POST['Price'];
	$_SESSION['guess']=$guess;
	if($guess==200){
	$_SESSION['message']='Great job';}else if($guess<200){
		$_SESSION['message']='Not so bad';
	}else{$_SESSION['message']='Well dome';}
	header("Location: about.php");
return;
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
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

   <link href="css/style.css" rel="stylesheet">
<script> 
        $(document).ready(function(){
            $(".hidde").click(function(){
                 $(".h").hide("slow");
   
         });
              
			  $(".sshow").click(function(){
              $(".h").css("background-color","blue"); 
			 $(".h").css("width","80%");
                $(".h").show();
            });
        });
    </script>
</head>

<body>
 
   <br>

<button class="hidde" >Hide</button>
  <br>
<button class="sshow" value="">Show</button>



    <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top" >
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
          <h4>SHOP</h4>
          <p>Enjoy Life</p>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!--  bluewrap -->
  
     <div id="b1">
 
<div class="container content">
 <div class="row">
 <div class="col-md-4">
 <div class="list-group">
 <a href="#" class="list-group-item">Smartphones</a>
 <a href="#" class="list-group-item">Laptop</a>
 <a href="#" class="list-group-item">Bags</a>
 <a href="#" class="list-group-item">Components Parts</a>
 <a href="#" class="list-group-item">HouseHold Appliances</a>
 </div>
 
 
 </div>
 
 
  

<div class="col-md-8 products">
 <div class="row">
 <form action="services.php" method="post">
 <div class="col-sm-4">
 <div class="product">
 <div class="product-img">
 <a href="services.php"><img src="https://sc02.alicdn.com/kf/H6966ddf01afe45e186a6c0cf731bb96b6/Factory-supply-low-price-Android-9-0.jpg" alt=""></a>
 </div>
 <p class="product-title">
 <a href="services.php">iPhone 11</a>
   <input  class="h"name="Company" value="Apple">
 <input  class="h"name="Price" value="810.00">
  <input  class="h"name="Device" value="Smartphone"
 </p>
 <p class="product-desc">The latest iPhone, with 10x zoom, A13 processor, 512 GB, 8 GB of RAM, 6.5 Inch with 2K screen</p>
 <p class="product-price" >Price: €810.00</p>

 <input type="submit" name="Cart" value="Add to Cart"  > 
 </div>
 </div>
 </form>
 
  <form action="services.php" method="post">
  <div class="col-sm-4">
 <div class="product">
 <div class="product-img">
 <a href="services.php"><img src="http://www.iline.com.ua/public/files/images/cat/iPhone6.png" alt=""></a>
 </div>
 <p class="product-title">
 <a href="services.php" >iPhone 12</a>
   <input  class="h" name="Company" value="Apple">
 <input  class="h"name="Price" value="910.00">
  <input  class="h"name="Device" value="Smartphone"
 </p>
 <p class="product-desc">Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br></p>
 <p class="product-price" >Price: €910.00</p>

  <input type="submit" name="Cart" value="Add to Cart"  > 
 </div>
 </div>
 </form>
 
  <form action="services.php"  method="post">
  <div class="col-sm-4">
 <div class="product">
 <div class="product-img">
 <a href="services.php"><img src="https://i.ebayimg.com/images/i/153057628192-0-1/s-l1000.jpg" alt=""></a>
 </div>
 <p class="product-title">
 <a href="services.php" >Samsung</a>
  <input class="h" name="Company" value="Samsung">
 <input  class="h"name="Price" value="1100.00">
  <input  class="h"name="Device" value="Smartphone">
 </p>
 <p class="product-desc">Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br></p>
 <p class="product-price">Price:<span>€1100.00</span></p>
 
  <input type="submit" name="Cart" value="Add to Cart"  > 
 </div>
 </div>
 </form>
 
  <form  action="services.php" method="post">
  <div class="col-sm-4">
 <div class="product">
 <div class="product-img">
 <a href="services.php"><img src="https://xn--80aa3apibga0d.xn--90ais/images/products/1140310/original/15d6c6e0c3eb95994e96669dad01591a.jpg" alt=""></a>
 </div>
 <p class="product-title">
 <a href="services.php">Laptop Lenovo</a>
  <input  class="h"name="Company" value="Lenovo">
 <input class="h" name="Price" value="925.00">
  <input  class="h"name="Device" value="Laptop">
 </p>
 <p class="product-desc">Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br></p>
 <p class="product-price" >Price: €925.00</p>
 
  <input type="submit" name="Cart" value="Add to Cart"  > 
 </div>
 </div>
 </form>
 
  <form action="services.php"  method="post">
  <div class="col-sm-4">
 <div class="product">
 <div class="product-img">
 <a href="services.php"><img src="https://cdn1.ozone.ru/s3/multimedia-m/6005298106.jpg" alt=""></a>
 </div>
 <p class="product-title">
 <a href="services.php " >Laptop Acer</a>
 <input  class="h"name="Company" value="Acer">
 <input  class="h"name="Price" value="700.00">
  <input  class="h"name="Device" value="Laptop">
 </p>
 <p class="product-desc">Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br></p>
 <p class="product-price"  >Price: €700.00</p>
 
  <input type="submit" name="Cart" value="Add to Cart"  > 
 </div>
 </div>
 </form>
 
  <form  action="services.php" method="post">
  <div class="col-sm-4">
 <div class="product">
 <div class="product-img">
 <a href="services.php"><img src="https://cdn1.technopark.ru/technopark/photos_resized/product/1000_1000/149369/1_149369.jpg" alt=""></a>
 </div>
 <p class="product-title">
 <a href="services.php" name="Company" value="Hmm">Grey Bag </a>
 <input  class="h" name="Company" value="Addidas">
 <input   class="h"name="Price" value="70.00">
  <input  class="h"name="Device" value="Grey Bag">
 </p>
 <p class="product-desc">Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br></p>
 <p class="product-price" >Price: €70.00</p>
 
  <input type="submit" name="Cart" value="Add to Cart"  > 
 </div>
 </div>
 </form>
 
  <form  action="services.php" method="post">
  <div class="col-sm-4">
 <div class="product">
 <div class="product-img">
 <a href="services.php"><img src="https://www.luggage-uk.co.uk/media/catalog/product/cache/2/image/9df78eab33525d08d6e5fb8d27136e95/7/6/763701090_pd_be_5197f81a-e625-4a02-961e-a69e00d5c66d.jpg" alt=""></a>
 </div>
 <p class="product-title">
 <a href="services.php" >Heavy Bag</a>
  <input class="h" name="Company" value="Addidas">
 <input class="h" name="Price" value="110.00">
  <input  class="h"name="Device" value="Heavy Bag">
 </p>
 <p class="product-desc">Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br></p>
 <p class="product-price "name="Price" value="110.00">Price: €110.00</p>
 
  <input type="submit" name="Cart" value="Add to Cart"  > 
 </div>
 </div>
 </form>
 
  <form  action="services.php" method="post">
  <div class="col-sm-4">
 <div class="product">
 <div class="product-img">
 <a href="services.php"><img src="https://komfortbyt.spb.ru/images/thumbnails/1083/947/detailed/25/60_cz95-yd.jpg" alt=""></a>
 </div>
 <p class="product-title">
 <a href="services.php"  >Coffee Maker</a>
  <input  class="h"name="Company" value="LG">
 <input class="h" name="Price" value="225.00">
  <input  class="h"name="Device" value="Coffee Maker">
 </p>
 <p class="product-desc">Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br></p>
 <p class="product-price" >Price: €225.00</p>
 
  <input type="submit" name="Cart" value="Add to Cart"  > 
 </div>
 </div>
 </form>
 
  <form action="services.php"  method="post">
  <div class="col-sm-4">
 <div class="product ">
 <div class="product-img">
 <a href="services.php"><img src="https://main-cdn.goods.ru/hlr-system/1658889529/100024702561b0.jpg" alt=""></a>
 </div>
 <p class="product-title">
 <a href="services.php">RAM</a>
  <input class="h" name="Company" value="Sony">
 <input class="h" name="Price" value="80.00">
  <input  class="h" name="Device" value="RAM">
  </p>
 <p class="product-desc">Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br>Bla Bla Bla<br></p>
 <p class="product-price"  >Price: €80.00</p>
 
  <input type="submit" name="Cart" value="Add to Cart"  > 
 </div>
 </div>
 </form>
 
 </div>
</div>
  </div>
</div>
 
  
 
 </div>
 
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
