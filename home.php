
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Home</title>
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
		 /* Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
   </style>
    
</head>
<body data-spy="scroll" data-target=".navbar-collapse" background="img6.jpg">
<font color = "white">


  <div class="navbar navbar-default navbar-fixed-top">
  
  	<div class="container">
  		<div class="navbar-header" style="position: relative; background-color: rgba(27, 51, 75, 0.95);" >
  	
  			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  			
  				<span class="icon-bar"></span>
  				
  				<span class="icon-bar"></span>
  				
  				<span class="icon-bar"></span>
  					
  			</button>
  			
  			<!--<a class="navbar-brand">Secret Diary</a>--> 			
  		</div>
  		
  		<!--<div class="collapse navbar-collapse">
  		
  			<form class="navbar-form navbar-left" method="post">
               <!-- <input type="button" name="button" class="btn btn-success btn-md" value="About Us"/>--> 
               <!-- <a class="btn btn-md" href="#about">About Us	</a>		
                <a class="btn  btn-md" href="recentr.php">View Recent Researches</a>
				
                <a class="btn  btn-md" href="sports.php">Sports</a>	
                <a class="btn  btn-md" href="medical.php">Medical</a>	
  
               					
                <a class="btn btn-success btn-lg" href="sign_up_page.php">Subscribe</a>
		
  				<!--<input type="button" name="button" class="btn btn-success btn-md" value="View Recent Researches "/>--> 
  				<!--<div class="form-group">
  				
  					<input type="email" name="email" placeholder="Email" class="form-control"  />
  																								   
  				</div>
  				
  				<div class="form-group">
  				
  					<input type="password" name="password" placeholder="Password" class="form-control"  />
  																											
  				</div>
  				
  				<input type="submit" name= "submit" class="btn btn-success btn-lg marginTop" value="Log In">
  			-->	
  		<!--	</form>
  			<form class="navbar-form navbar-right" method="post">
               <!-- <input type="button" name="button" class="btn btn-success btn-md" value="About Us"/>--> 
                		
            <!--    <a class="btn btn-info btn-md" href="Weather1.php">Weather Forecast</a>
				
            </form>
  		</div>-->  	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a class="btn  btn-md" href="#about">About Us</a></li>
	  <li><a class="btn  btn-md" href="recentr.php">View Recent Reseaches</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other Areas
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="btn  btn-md" href="sports.php">Sports</a></li>
          <li><a class="btn  btn-md "href="medical.php">Medical</a></li>
        </ul>
      </li>
 	  
      <li><a class="btn   btn-md" href="weather1.php">Weather Forecast</a></li> 	  
      <li><a class="btn btn-lg" href="sign_up_page.php">Subscribe</a></li> 
	</ul>
  </div>
</nav>

		
  	</div>	
  	
  </div>
   <div class="col-md-8 col-md-offset-2" id="topRow"> >
  <div class="thumbnail">
      <a href="img3.jpg">
        <img src="img3.jpg" alt="img3" style="width:100%">
      </a>
    </div>
  </div>
  
   
 
 
 <!--  <div class="gallery">
  <a target="_blank" href="2-supercompute.jpg">
    <img src="2-supercompute.jpg" alt="2-supercompute" width="600" height="400">
  </a>
  </div>
 <div class="gallery">
  <a target="_blank" href="img1.jpg">
    <img src="img1.jpg" alt="img1" width="600" height="400">
  </a>
  </div>
   
   <div class="gallery">
  <a target="_blank" href="img3.jpg">
    <img src="img3.jpg" alt="img3" width="600" height="400">
  </a>
  </div>
  <div class="gallery">
  <a target="_blank" href="img4.jpg">
    <img src="img4.jpg" alt="img4" width="600" height="400">
  </a>
  </div>
  <div class="gallery">
  <a target="_blank" href="img5.jpg">
    <img src="img5.jpg" alt="img5" width="600" height="400">
  </a>
  </div>-->
  
  <div class="col-md-2 col-md-offset-1" >
  <div class="thumbnail">
      <a href="img5.jpg">
        <img src="img5.jpg" alt="img5" style="width:100%">
      </a>
	   <p class="bold marginTop"><a href="1.php">Cancer cells detected more accurately in hospital with artificial intelligence</a></p>
	   <p class="bold marginTop"><a href="2.php">Supercharging the computers that will save the world</a></p>
    </div>
  </div>
 
    <div class="container contentContainer" id="topContainer">
  		<div  class="row">
  		
  			<div id="about" class="col-md-6 col-md-offset-1" id="topRow">
 			 
 			
 			
 			 <p  class="lead">We give information about the technological advancements which are happening around the globe. </p>
			 <p>Technology ("science of craft", from Greek τέχνη, techne, "art, skill, cunning of hand")
             is the collection of techniques, skills, methods and processes used in the production of goods or services or in 
             the accomplishment of objectives, such as scientific investigation. Technology can be the knowledge of techniques,
             processes, and the like, or it can be embedded in machines which can be operated without detailed knowledge of 
             their workings. </p>
			 <p> Technology has many effects. It has helped develop more advanced economies (including today's global economy)
			 and has allowed the rise of a leisure class. Many technological processes produce unwanted by-products known as 
			 pollution and deplete natural resources to the detriment of Earth's environment. Various implementations of 
			 technology influence the values of a society and raise new questions of the ethics of technology. Examples include 
			 the rise of the notion of efficiency in terms of human productivity, and the challenges of bioethics. </p>
  
             </div>
			 
		</div>
	</div>
   
 <!-- <div class="gallery">
  <a target="_blank" href="img4.jpg">
    <img src="img4.jpg" alt="img4" width="600" height="400">
  </a>
  </div>-->
 
   
  	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</font>
</body>
</html>