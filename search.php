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
							<!--	h1 class="tm-site-title">Simple House</h1 -->
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
				<h2 class="col-12 text-center tm-section-title">NIS SQL Injection Project</h2>
			
			</header>
<?php
if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "javapoint");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } 
    else 
    {
        /*prevention
         $stmt = $con->prepare('SELECT * FROM mobiles WHERE BRAND=? AND RELEASED=1');
         $stmt->bind_param('s', $searchValue);
         $stmt->execute();
         $result = $stmt->get_result();
         echo "Sql Attack prevented";
         */



        //attack
       $sql = "SELECT * FROM mobiles WHERE BRAND='$searchValue' AND RELEASED=1";
       $result = $con->query($sql);
                  
        echo "<table width='75%' border='1' style='margin-left:150px'>
        <tr>
        <th>BRAND</th>
        <th>MODEL</th>
        <th>PRICE</th>
        </tr>";
        while ($row = $result->fetch_assoc())
        {
        echo "<tr>";
        echo "<td>" . $row['BRAND'] . "</td>";
        echo "<td>" . $row['MODEL'] . "</td>";
        echo "<td>" . $row['PRICE'] . "</td>";
        echo "</tr>"; 
        
        }
        echo "\r\n";
       // echo "<footer class='tm-footer'>";
       // echo "</footer>";
	}   
}
?>
		

</body>

</html>