<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House - Contact Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="all.min.css" rel="stylesheet" />
	<link href="frontend-style.css" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Simple House</h1>
								<h6 class="tm-site-description">new restaurant template</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="http://localhost/home.php" class="tm-nav-link">Home</a></li>
								<li class="tm-nav-li"><a href="http://localhost/index.php" class="tm-nav-link active">Login</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Login Page</h2>
			</header>

			<div class="tm-container-inner-2 tm-contact-section " style="text-align:center;">
				<div class="row">
					
                <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
           
        <div class="form-group tm-contact-form">
					          <input type="text" name="user" id="user" class="form-control" placeholder="User" required="" />
					      
					        
					      
					          <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required="" />
					     
		  </div>
					        <div class="form-group tm-d-flex tm-contact-form ">
                            <p>     
                <input type =  "submit"   class="tm-btn tm-btn-success " style="margin-left:100px;" id = "btn" value = "Login" />  
            </p>  
					         
					        </div>
</form>
					
				</div>
			</div>
		</main>

		<footer class="tm-footer text-center">
		
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			var acc = document.getElementsByClassName("accordion");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight) {
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    }
			  });
			}	
		});
	</script>
</body>
</html>