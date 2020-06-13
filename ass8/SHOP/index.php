<!DOCTYPE html>
   <?php require("Database.php"); 
       session_start();
?>

<html lang="en">
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

  <div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h1> <b>Relax and choose a unique product for the soul </b></h1>
          <h2>Best quality and price</h2>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- headerwrap -->

  <div class="container w">
    <div class="row centered">
      <br><br>
      <div class="col-lg-4">
        <i  class="fa fa-heart-o" aria-hidden="true"></i>
        <h4>CONFIDENCE</h4>
        <p>Maecenas eget eros non ipsum molestie consectetur ut id leo. In posuere lacinia felis in egestas. Maecenas mauris nibh, gravida vitae sollicitudin id, suscipit eu dolor. In vel interdum nunc. Donec dignissim sapien nisl, ac ullamcorper velit dignissim vitae. Etiam at libero mi. Integer maximus enim eu vehicula porta. Duis eros eros, semper quis ultricies non, congue vitae mauris.</p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4">
<i class="fa fa-handshake-o" aria-hidden="true"></i>
        <h4>QUALITY</h4>
        <p>Etiam ante nulla, sagittis in ligula ut, maximus volutpat elit. Morbi varius hendrerit dui, a dapibus est laoreet at. Integer eu nunc justo. Proin commodo, nulla vel fringilla facilisis, enim nisi laoreet nibh, ultricies maximus risus neque nec libero. Fusce purus magna, congue eu erat vitae, vehicula scelerisque lectus. Nulla finibus felis sem, vel fringilla arcu euismod in. In hac habitasse platea dictumst. Cras semper odio a velit semper malesuada.</p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4">
<i class="fa fa-microchip" aria-hidden="true"></i>
        <h4>CAPABILITIES</h4>
        <p>Nunc vestibulum erat in nulla vehicula scelerisque. Aliquam erat volutpat. Proin ornare nunc a commodo lacinia. Phasellus lacinia pretium ligula, tincidunt dapibus enim imperdiet ut. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque varius odio risus, id commodo diam varius vitae.</p>
      </div>
      <!-- col-lg-4 -->
    </div>
    <!-- row -->
    <br>
    <br>
  </div>
  <!-- container -->

  <!-- PORTFOLIO SECTION -->
  <div id="dg">
    <div class="container">
      <div class="row centered">
        <h4>LATEST ITEMS</h4>
        <br>
        <div class="col-lg-4">
             <a href="about.php"><img src="https://i.ebayimg.com/images/i/153057628192-0-1/s-l1000.jpg" alt=""></a>
        
        </div>

        <div class="col-lg-4">
             <a href="about.php"><img src="https://sc02.alicdn.com/kf/H6966ddf01afe45e186a6c0cf731bb96b6/Factory-supply-low-price-Android-9-0.jpg" alt=""></a>
         </div>

        <div class="col-lg-4"  >
             <a href="about.php"><img  src="http://www.iline.com.ua/public/files/images/cat/iPhone6.png" alt=""></a>
         </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- DG -->

 

  <div id="lg">
    <div  class="container">
      <div  class="row_centered">
        <h4>OUR AWESOME CLIENTS</h4>
        <div class="col-lg-2 col-lg-offset-1" id="0" >
          <img id="n0" src="https://pdpd.kz/public/files/images/technodom.png" alt="">
        </div>
        <div  class="col-lg-2" id="1" >
          <img id="n1"src="https://lh3.ggpht.com/x5JZmn4sZiFIOoX2uXHuS3QqDgEKs8L2ZYDO1xHotROnbBlzyqBPL157LZsRQNEZ1sE=h500" alt="">
        </div>
        <div  class="col-lg-2"  id="2" >
          <img id="n2" src="https://cdn.picodi.com/kz/files/shop-description/m/mechta/mechta-logo.png?v=9600" alt="">
        </div>
        <div  class="col-lg-2"id="3" >
          <img  id="n3"  src="https://i.ytimg.com/vi/XOixaTKIPmI/maxresdefault.jpg" alt="">
        </div>
        <div class="col-lg-2" id="4" >
          <img  id="n4" src="http://kazteleradio.kz/uploads/file5bbc65b21f8fc.png" alt="">
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- dg -->

  

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
