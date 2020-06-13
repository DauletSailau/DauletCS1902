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
	setcookie('email',$row['email'], time()*(60*60*24*30));
		setcookie('username',$row['username'], time()*(60*60*24*30));
		$home_url='http://'.$_SERVER['HTTP_HOST'];
header('Location:'.$home_url);
}else{
	echo "please double-check the data 
	<br>";
	echo "<a href='works.php' value='Registration Form'>Registration Form</a>";
	
}
	}

	}
}
?>

  <!-- Login -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">contact us</h4>
        </div>
        <div class="modal-body">
          <div class="row centered">
            <p>We are available 24/7, so don't hesitate to contact us.</p>
            <p>
              Somestreet Ave, 987<br/> London, UK.<br/> +44 8948-4343<br/> contact@example.com
            </p>

            <form class="contact-form php-mail-form"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

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

               
 
              <div class="form-send">
                <button type="submit" name="submit" class="btn btn-large">Send Message</button>
              </div>

            </form>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->