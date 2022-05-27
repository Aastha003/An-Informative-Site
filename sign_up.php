<?php

	/*    if(isset($_POST['logout']))  
		{
		    session_start();
		
		    if ($_GET["logout"]==1 AND $_SESSION['id']) 
			{   session_destroy();
		
			    $message="You have been logged out. Have a nice day!";
		        echo $message;
		    }
		}*/
		if(isset($_POST['submit'])) 
		{
		    include("connect.php");
	   
  	   
  		    if ($_POST['submit']=="Subscribe")
			 {
  
			    if (!$_POST['email']) echo "<br />Please enter your email";
				else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) echo "<br />Please enter a valid email"; 
 		
 		
 		     /*   if (!$_POST['password']) $error.="<br />Please enter your password";
 		        else 
			    { 
  
 
 			        if (strlen($_POST['password'])<8) $error.="<br />Please enter at least 8 characters";
 
 			        if(!preg_match('/[A-Z]/', $_POST['password'])) $error.= "<br />Please include min 1 capital letter";
 		        }
			    if ($error) 
			    {  
		            $error.= "There were error(s) in your sign up details:";
			        echo $error;
			    }
			    else 
			    {
			
		
			*/
			        $query= "SELECT * FROM `users` WHERE email ='".mysqli_real_escape_string($link, $_POST['email'])."'";
		
	     		    $result = mysqli_query($link, $query);	
			
		    	    $results = mysqli_num_rows($result);
			
		     	    if ($results) 
			    	{
				        $error = "That email is already registered. ";
				        echo $error;
			        }
			        else 
				    {
			
		        	    $query = "INSERT INTO `users` (`email`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."')";
   
    	     	        mysqli_query($link, $query);
    		
    		            $success="You've been signed up!";
			            echo $success;
    		
    		            $_SESSION['id']= mysqli_insert_id($link);
    		
    		            header("Location:home.php");
			
			        }	
			
		        }
   
	
		    }
  
	        /*if ($_POST['submit'] == "Log In")
	        {	
	
		        $query = "SELECT * FROM `dairy_entry` WHERE `email` ='".mysqli_real_escape_string($link, $_POST['email'])."' AND 
		`       `password`='".md5(md5($_POST['email']).$_POST['password'])."' LIMIT 1";

		        $result = mysqli_query($link, $query);
		
		        $row = mysqli_fetch_array($result);
	
		        if($row)
		        {
		
			        $_SESSION['id']=$row['id'];
			
			        header("Location:mainpage1.php");
			
	            }
		        else 
		        {
		
			        $error = "We could not find a user with that email and password. Please try again.";
			        echo $error;
			
		        }
		
	        }
	
		}*/
		/*if(isset($_POST['button'])) 
		{
		    if ($_POST['button']=="About Us")
			{
		        header("Location:about.php");
			}
			
			if ($_POST['button']=="View Recent Researches")
			{
		        header("Location:recentr.php");
			}
		}*/
?>