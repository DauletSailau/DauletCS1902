<?php    // require"dB.php";

 include "User.php";
$object= new User();
echo $object->getAllUsers();
 
 
session_start();?>
<!DOCTYPE html>
<html>



<?php
$dbHost = "localhost";
$dbUser = "week_5";
$dbPassword = "12345";
$dbName = "week10";

try {
  $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $dbUser, $dbPassword);
  	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "DB Connection Failed: " . $e->getMessage();
}finally{
	echo"it is okay";
}

 function on_error($error_no, $error, $filename, $linenumber)
{
      $error_levels = array(
        "1" => "Fatal error",
        "2" => "Warning",
        "8" => "Error",
        "1024" => "Custom error"
    );
    $str = $error_levels[$error_no] . ": ";
    $str .= $error . " in " . $filename;
     $str .= " at " . $linenumber;
     $str .= "\n";
    echo $str;  
}
 
 set_error_handler("on_error");
  
 
 
$status = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(!empty($username) && !empty($email) && !empty($password)) {
    $status = "All fields are compulsory.";
   
      $sql = "INSERT INTO clients (Name, Email, Password) VALUES ('$username','$email', '$password')";

      $stmt = $pdo->prepare($sql);
      
      $stmt->execute(['Name' => $username, 'Email' => $email, 'Password' => $password]);
      $status = "Your message was sent";
      $username = "";
      $email = "";
      $password = "";
    }else{echo "empty";}
  

}



 /*if(isset($_GET["submit"])){
	$username=mysqli_real_escape_string( $connect,trim($_GET['username']));
		$password=mysqli_real_escape_string( $connect,trim($_GET['password']));
			$email=mysqli_real_escape_string( $connect,trim($_GET['email']));
}
if(!empty($username) && !empty($password) &&!empty($email)){
	$query="SELECT 'Name' FROM clients where Name='$username'";
	$data=mysqli_query($connect, $query);
	if(mysqli_num_rows($data)==0){
	$query="INSERT INTO clients (Name, Email ,Password) Values('$username','$email','$password' )";	
	mysqli_query($connect, $query);
echo "New record has been added successfully !";
mysqli_close($connect);
exit();
 
	}else{
		echo "It Exists!
		Change Name";}
}*/
		


?>
  <title>Simple Sign up</title>
  <head>
 
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      }
	  
      input[type=text],[type=email], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #4286f4;
      }
      button {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
    
      
    </style>
  </head>
  <body>
    <form method="post" action=" " >
      <h1>SIGN UP</h1>
      <div class="icon">
        <i class="fas fa-user-circle"></i>
      </div>
      <div class="formcontainer">
      <div class="container">
        <label for="username"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $username ?>" required>
        <label for="email"><strong>E-mail</strong></label>
        <input type="email" placeholder="Enter E-mail" name="email" id="email"   value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $email ?>"required>
        <label for="password"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="password" id="password"  value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $password ?>"required>
      </div>
      <button type="submit" name="submit" id="submit"><strong>SIGN UP</strong></button>
      <div class="container" style="background-color: #eee">
        <label style="padding-left: 15px">
        <input type="checkbox"  checked="checked" name="remember"> Remember me
        </label>
        <span class="psw"><a href="#">Forgot password?</a></span>
      </div>
	   <div class="form-status">
        <?php echo $status ?>
      </div>
    </form>
  </body>
</html>