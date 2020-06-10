<?php
    require"dB.php";
    session_start();?>
	<?php
 if(isset($_POST["submit"])){
	$CompanyName=mysqli_real_escape_string( $connect,trim($_POST['CompanyName']));
		$Website=mysqli_real_escape_string( $connect,trim($_POST['Website']));
			$FieldOfIndustry=mysqli_real_escape_string( $connect,trim($_POST['FieldOfIndustry']));
	$email=mysqli_real_escape_string( $connect,trim($_POST['email']));
	$ShortDescription=mysqli_real_escape_string( $connect,trim($_POST['ShortDescription']));
 			}
if(!empty($CompanyName) && !empty($email) &&!empty($FieldOfIndustry)){
	$query="SELECT 'Name' FROM ApplicationForm where Name='$CompanyName'";
	$data=mysqli_query($connect, $query);
	if(mysqli_num_rows($data)==0){
	$query="INSERT INTO `applicationform`(`Name`, `Website`, `FieldOfIndustry`, `Email`, `ShortDescription`) VALUES ('$CompanyName','$Website', '$FieldOfIndustry','$email','$ShortDescription' )";	
	mysqli_query($connect, $query);
echo "New record has been added successfully !";
mysqli_close($connect);
exit();
	
	}else{
		echo 
		"It Exists!
		Change Name";}
}


?>

<?php

//try catch

?>
	
<!DOCTYPE html>
<html>
  <head>
    <title>Student Complaint Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" >
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      margin: 15px 0;
      font-weight: 400;
      }
     
      form {
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 6px);
      }
     
     
      input:hover, select:hover, textarea:hover, .preferred-metod label:hover input {
      box-shadow: 0 0 5px 0 #095484;
      }
    
      button {
      width: 150px;
      padding: 10px;
      border: none;      
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
     
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      
    </style>
  </head>
  <body>
    <div class="testbox">
      <form method='post'>
        <h1>Application Form</h1>
        <h5>Personal Information</h5>
        <div class="item">
          <p>Your Full Legal Name</p>
          <div class="name-item">
            <input type="text" name="CompanyName" placeholder="First" required>
           </div>
        </div>
        <div class="name-item">
          <p>Website</p>
          <input type="text" name="Website"/>
        </div>
        <div class="item">
          <p>Field of Industry</p>
		  <div class="city-item"> 
<select name="FieldOfIndustry" >
 <option value="">Please Choose one</option>
<option  value="science">Science</option>
<option  value="engineering">Engineering</option>
<option    value="Global">Global</option>
</select>
 </div>
        </div>
        <div class="item">
          <p>Address</p>
		     <div class="name-item">
          <input type="text" name="Address" placeholder="Street address">
		  </div>
           <div class="city-item"> 
            <select name="city">
              <option value="">Country</option>
              <option value="1">Russia</option>
              <option value="2">Germany</option>
              <option value="3">France</option>
              <option value="4">Armenia</option>
              <option value="5">USA</option>
            </select>
          </div>
        </div>
        <div class="item">
          <p>Email</p>
          <input type="email" name="email" required>
        </div>
         
       
        <h5>Information about your complaint</h5>
        
        <div class="item">
          <p>Description of your Company</p>
          <textarea name="ShortDescription" rows="5" required></textarea>
        </div>
        
        <div class="btn-block">
          <button name="submit" type="submit"  >SEND</button>
        </div>
      </form>
    </div>
  </body>
</html>