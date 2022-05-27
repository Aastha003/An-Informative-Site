<?php include("sign_up.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional Bootstrap theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    
<style>
   
   		.navbar-brand{
   			font-size:1.8em;
   			
   		}
   		
   		#topContainer{
   			background-image:url("background.jpg");
   			height:400px;
   			width:100%;
   			background-size:cover;	
   		}
   		
   		#topRow {
   			margin-top:100px;
   			text-align:center;	
   		}
   
   		#topRow h1{
   			font-size:300%;
   
   		}
   		
   		.bold{
   			font-weight:bold;
   		}
   
   		.marginTop{
   			margin-top:30px;
   		
   		}
   		
   		.center{
   			text-align:center;
   		
   		}
   		
   		.title {
   			margin-top:100px;
   			font-size:300%;
   			
   		}
   		
   		#footer{
   			background-color: #B0D1FB;
   			padding-top:70px;
   			width:100%;
   		}
   		
   		,marginBottom{
   			margin-bottom:30px;
   			
   		}
   		
   		.appstoreImage{
   			width:250px;
   		
   		}
		div.gallery {
           margin: 10px;
           border: 1px solid #ccc;
           float: left;
           width: 180px;
        }

        div.gallery:hover {
          border: 1px solid #777;
         }

        div.gallery img {
           width: 100%;
           height: auto;
         }

        div.desc {
          padding: 15px;
         text-align: center;
         }
   </style>
    
</head>
<body data-spy="scroll" data-target=".navbar-collapse" background="img6.jpg">
<font color = "white">
<!--
<div class="navbar navbar-default navbar-fixed-top">
  
  	<div class="container">
  	
  		<div class="navbar-header pull-left">
  		
  			
  			
  			<a class="navbar-brand">Subscribe</a>
  			
  		</div>
  		
  		<div class="pull-right">
  			<ul class= "navbar-nav nav">
  				<a class="btn btn-md" href="home.php">Back</a>
  			
  			
  		</div>
  		
  	</div>	
  	
  </div>-->
<div class="container contentContainer" id="TopContainer">
  		<!--<div class="row">-->
  		
  			<div class="col-md-6 col-md-offset-3" id="topRow">
 			 
 			 <!--<h1 class="marginTop">Secret Diary</h1>
 			 
 			 <p class="lead">Your own private diary, with you wherever you go.</p>-->
 			 
 			
    
 			 <div class="alert alert-success">
    
  
 			
 			 
 			 <p class="bold marginTop">For receiving our newsletter please subscribe!!!</p>
 			 
 			 <form class="marginTop" method="post"> 
 			 
 			 	<div class="form-group">
 			 	
  					<label for="email">Email Address</label>
  					
  				<input type="email" name="email" class="form-control" placeholder="Your Email"  />
  																							   
				</div>
				
				<!--<div class="form-group">
 			 	
  					<label for="password">Password</label>
  					
  				<input type="password" name="password" class="form-control" placeholder="Password" />
  																								  
				</div>-->

 			 	<input type="submit" name="submit" class="btn btn-success btn-lg marginTop" value="Subscribe"/> 
 			 	
 			 </form>
 			 <div id="success" class="alert alert-success">
               You have been succesfully signed up!!!
			</div>
 			 </div>
			 </div>
 		 </div>
		<!--</div>-->
 </div>
 </font>
 </body>
 </html>