<!DOCTYPE html>
<html>

<head>
<title> CALCULATOR </title>
</head>

<body>
<form action = "calculator.php" method= "post">
<input type = "text" name= "v1"><br><br>
<input type = "text" name= "v2"><br><br>
<input type = "submit" name= "add" value = "+">
<input type = "submit" name= "subtract" value = "-">
<input type = "submit" name= "multiply" value = "*">
<input type = "submit" name= "divide" value = "/">
<input type = "submit" name= "modulo" value = "%"><br>



<?php


    if(isset($_POST[ 'add' ])){
		
      $a= $_POST['v1'];
	  $b= $_POST['v2'];
	  $c= ((int) $a+(int)$b);
      echo "ANSWER: ", $c;
	  
      }
      
    else if(isset($_POST[ 'subtract' ])){
		
      $a = $_POST['v1'];
	  $b = $_POST['v2'];
	  $c =  ((int) $a-(int)$b);
      echo "ANSWER:", $c;
	} 
	else if(isset($_POST[ 'multiply' ])){
		
      $a = $_POST['v1'];
	  $b = $_POST['v2'];
	  $c =  ((int) $a*(int)$b);
      echo "ANSWER:", $c;
	}  
	else if(isset($_POST[ 'divide' ])){	
      $a = $_POST['v1'];
	  $b = $_POST['v2'];
	  $c =  ((int) $a/(int)$b);
      echo "ANSWER:", $c;
	  if ($a=="" || $b=="")
	  {
		  echo "ERROR";
	  }
	}
	else if(isset($_POST[ 'modulo' ])){
		
      $a = $_POST['v1'];
	  $b = $_POST['v2'];
	  $c =  ((int) $a%(int)$b);
      echo "ANSWER:", $c;
	  if ($a=="" || $b=="")
	  {
		  echo "ERROR";
	  }
	  
	}	  
	  
    ?> 
	<body>
	<html>
