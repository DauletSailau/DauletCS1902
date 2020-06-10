<?php
    require("dB.php");
    session_start();
	?>
	<?php
if(!isset($_COOKIE['username'])){
	if(isset($_POST['submit'])){
	$username=mysqli_real_escape_string( $connect,trim($_POST['username']));
	$password=mysqli_real_escape_string( $connect,trim($_POST['password']));
	
 if(!empty($username) && !empty($password) ){
	$query="select 'name','password' from clients where name='$username' AND password='$password'";
$data=mysqli_query($connect,$query);
if(mysqli_num_rows($data)!=0){
	$row=mysqli_fetch_assoc($data);
	$_SESSION['passw']=setcookie('password',$row['password'], time()+(60*60));
	$_SESSION['usern']=setcookie('username',$row['name'], time()+(60*60));
		 	$home_url='application form.php';
header('Location:'.$home_url);
}else{
	echo "please double-check the data 
	<br>";
	echo "<a href='works.php' value='Registerform.php'>Registration Form</a>";
	
}

}

	}
}
	  var_dump($_COOKIE);
if(isset($_COOKIE["username"]))
{
  echo "Hi " . $_COOKIE["username"];
}
else
{
  echo "Eid Mubarak Guest!";
}
?>
	<!DOCTYPE html>
<html>
  <head>
    <title>Simple login form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      height: 100%;
      }
      body, div, h1, form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #666;
      }
      h1 {
      padding: 10px 0;
      font-size: 32px;
      font-weight: 300;
      text-align: center;
      }
      p {
      font-size: 12px;
      }
      hr {
      color: #a9a9a9;
      opacity: 0.3;
      }
      .main-block {
      max-width: 340px; 
      min-height: 460px; 
      padding: 10px 0;
      margin: auto;
      border-radius: 5px; 
      border: solid 1px #ccc;
      box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
      background: #ebebeb; 
      }
      form {
      margin: 0 30px;
      }
      .account-type, .gender {
      margin: 15px 0;
      }
      input[type=radio] {
      display: none;
      }
      label#icon {
      margin: 0;
      border-radius: 5px 0 0 5px;
      }
      label.radio {
      position: relative;
      display: inline-block;
      padding-top: 4px;
      margin-right: 20px;
      text-indent: 30px;
      overflow: visible;
      cursor: pointer;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 9px;
      height: 4px;
      top: 8px;
      left: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      input[type=text], input[type=password] {
      width: calc(100% - 57px);
      height: 36px;
      margin: 13px 0 0 -5px;
      padding-left: 10px; 
      border-radius: 0 5px 5px 0;
      border: solid 1px #cbc9c9; 
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #fff; 
      }
      input[type=password] {
      margin-bottom: 15px;
      }
      #icon {
      display: inline-block;
      padding: 9.3px 15px;
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #1c87c9;
      color: #fff;
      text-align: center;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 100%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #26a9e0;
      }
    </style>
  </head>
  <body>
  <a href="exit.php">Exit</a>
    <div class="main-block">
      <h1>Login</h1>
      <form method="post" >
 
        <label id="icon" for="username"><i class="fas fa-user"></i></label>
        <input type="text" name="username" id="name" placeholder="Name" required/>
        <label id="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
        <input type="password" name="password" id="name" placeholder="Password" required/>
        <hr>
        <div class="gender">
          <input type="radio" value="MAle" id="male" name="gender" checked/>
          <label for="male" class="radio">Male</label>
          <input type="radio" value="FEmale" id="female" name="gender" />
          <label for="female" class="radio">Female</label>
        </div>
        <hr>
        <div class="btn-block">
           <button type="submit" name="submit" >Submit</button>
        </div>
		
		 
      </form>
    </div>
  </body>
</html>