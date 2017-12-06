<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="tag","gameing","vit">
    <meta name="author" content="AmeyYadav">
    <link rel="icon" href="favicon.png">

    <title></title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Bootstrap  -->
	
	<!-- Theme style  -->
	


  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/cover.css">
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
   <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><img src="images/hostellogo.png" width="50%" class=" img-responsive" id="logo"></h3>
              <nav>
                <ul class="nav masthead-nav">
				<li class="active"><a href="index.php">Home</a></li>
                 
                  <li><a href="#">Contact</a></li>
                 
                  <li><a href="welcome.php?logout='1'">logout</a></li>
                 
                  
                  
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <div class="row">
           
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item" id="portals1" align="left">
						<a href="sellerupload.php">
							<img src="images/sell.png" alt="x" class="img-responsive">
							<h5 class="fh5co-work-title" id="clickcolor"><center><b>Add new hostels<b><center></h3>
							<center><p id="clickcolor"><b> Enter ADD PORTAL</b></p></center>
						</a>
					</div>
					
					  <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item" id="portals2" align="right">
						<a href="sellerdelh.php">
							<img src="images/edit.jpg" alt="x" class="img-responsive">
							<h5 class="fh5co-work-title" id="clickcolor"><center><b>Edit hostel details<b><center></h3>
							<center><p id="clickcolor"><b>Enter Edit PORTAL</b></p></center>
						</a>
					</div>
            <!---->
         <!--   <audio src="offo.mp3" controls autoPlay="False"> -->
            
            
           
          

        </div>

      </div>

    </div>
  

    <!-- Fixed navbar -->
     <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container" id="footer">
        <p class="text-center"><marquee>Copyright . 2017 </marquee></p>
      </div>
    </nav>


    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
   <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
