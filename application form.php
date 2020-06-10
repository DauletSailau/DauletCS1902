<?php

    require("dB.php");
    session_start();
	require_once "Delete.php";?>
<!doctype html>
<html>
  <head>
   		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
  <script  src="jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="style.css">
  //AJAX and DB  
  <script>
    
	 $(document).ready(function(){                         
			  $(".button_1").click(function(){
				                  
             $(".f").css("background-color","blue"); 
 			  $(".f").css("height","300px");
			  $(".f").css('border-color', 'Red');
              });        
		  $(".button_2").click(function(){
				                  
                      $("#Delete").css("background-color","green"); 
	  $("#Delete").css("width","200%");
	  	  $("#Delete").css("height","200%");
			  $("#Delete").hide(5000);
             });        
		 
	
		});
		
      </script>
	  <style>
	  .f{
		  border: 20px solid black;
	  }
	  .Delete{
		  width: 60px;
		  background-color: green;
 	  }
	  </style>
	    </head>

  <?php  //TABLE 
         $EmailArr=array();
       $DescriptionArr=array();
       $IndustryArr=array();
      $NameArr=array();
      $WebsiteArr=array();
	  
	  
	  if(isset($_SESSION["passw"])){
	 var_dump($_SESSION["passw"]);
	  }
  ?> 

 
 
 
<body>
 
 <a href="exit.php">Exit</a>
 <br>
 <input class="button_1" type="button" value="FrameColor">
  <input class="button_2" type="button" value="Hide">

	 <div class="f">
             <div class="border">

<table>
  <tr>
    <th>
      CompanyName
    </th>
    <th>
      Website
    </th>
    <th>
      FieldOfIndustry
    </th>	
	 <th>
      Email
    </th>	
	 <th>
      ShortDescription
    </th>	
<th>
	  DELETE
</th>
  </tr>
 
 
   <?php foreach ($ApplicationForms as $ApplicationForm): ?>
    <tr>
  <form   method="post"action="Delete.php">
      <td>
        <input type="text" name="Name" value="<?=$NameArr[]=$ApplicationForm["Name"];?>" readonly>
      </td>
      <td>
        <input type="text" name="Website" value="<?= $WebsiteArr[]=$ApplicationForm['Website']?>">
      </td>
      <td>
        <input type="text" name="FieldOfIndustry" value="<?= $IndustryArr[]=$ApplicationForm['FieldOfIndustry']?>">
      </td> 
	<td>
        <input type="text" name="Email" value="<?= $EmailArr[]=$ApplicationForm['Email']?>">
      </td> 
	<td>
        <input type="text" name="ShortDescription" value="<?= $DescriptionArr[]=$ApplicationForm['ShortDescription']?>">
      </td> 	  
	  
	  <td>
          <input type="submit" id="Delete" name="Delete" value="DELETE"  > 	
		</td>
	
      </form  >
  </tr>  
  
  <?php endforeach; ?>
    <br>
  
      <form  method="post" action="Delete.php">
        <td>
          <input type="text" name="Name" value="" readonly>
        </td>
        <td>
          <input type="text" name="Website" value="">
        </td>
        <td>
          <input type="text" name="FieldOfIndustry" value="">
        </td>
		<td>
        <input type="text" name="Email" value="">
      </td> 
	<td>
        <input type="text" name="ShortDescription" value="">
      </td> 
        <td >	   

          <input type="submit"  name="Delete" id="Delete" value="DELETE"  >		 

		</td>
    </form> 
 
    </br>
</table> 
            </div>

        </div>