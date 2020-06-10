
<?php require_once "dB.php" ?>
 
 <?php 
  $query_1 = "SELECT * FROM ApplicationForm;";
  $results = mysqli_query($connect, $query_1);
  
  if($results===false)
  {
    echo mysql_error($connect);
  }
  else
  {
    $ApplicationForms = mysqli_fetch_all($results, MYSQLI_ASSOC);
  }
?>
 
<?php 
 $Name = "Num";
  $Website = "new item name";
  $FieldOfIndustry = " ";
  $Email="add";
  $ShortDescription=" da ";
    if(
     isset($_POST["Name"]) && isset($_POST["Website"]) &&
     isset($_POST["FieldOfIndustry"]) &&    isset($_POST["Email"]) &&    isset($_POST["ShortDescription"])  
  )
  {
    $Name = $_POST["Name"];
    $Website = $_POST["Website"];
    $FieldOfIndustry = $_POST["FieldOfIndustry"];
	 $Email=$_POST["Email"];
  $ShortDescription=$_POST["ShortDescription"];
  }
  
   if(isset($_POST['Delete'])){
          $query_2 = "DELETE FROM ApplicationForm WHERE Name="."'$Name'";
          $results = mysqli_query($connect, $query_2); 
		  echo 'Object was deleted successfully!';
		  }
		  
          ?>
 