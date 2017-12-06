<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
    <link rel="icon" href="favicon.png">

    <title></title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/cover.css">
  
   <link rel="stylesheet" type="text/css" href="js/starter-template.css">

   
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
				   <li><a href="sellermenu.php">Seller</a></li>
                 <li><a href="welcome.php?logout='1'">logout</a></li>
                  
                  
                  
                </ul>
              </nav>
            </div>
          </div>

  

</div>
<div id="customerview">
<br>
<h3><center>Hostel Details</center></h3>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner"  id="carouselinner1" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/1.jpg" alt="First slide" id="itemslide" align="middle">
          
        </div>
        <div class="item">
          <img class="second-slide" src="images/2.jpg" alt="Second slide" id="itemslide" align="middle">
         
        </div>
        <div class="item">
          <img class="third-slide" src="images/3.jpg" alt="Third slide" id="itemslide" align="middle">
         
        </div>
      </div>
      <a class="left carousel-control bg-style1" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <?php
      //echo "hello".$_SESSION['username'];
	 echo "<div class='table-responsive'>";
      echo "<table class='table'>";
     $con=mysql_connect("localhost","root","");
           if($con)
           {    //$x=$_SESSION['username'];
		        $y=$_GET['id'];
	            $r=mysql_select_db("project",$con);
                $qry="select * from seller where uinque_id='$y'";
                $result=mysql_query($qry,$con);
               while(($row=mysql_fetch_assoc($result))!=false)
          {
            echo "<tr>";
            echo "<td>Hostel Detais:</td><td>".$row['Text_Area']."</td></tr>";
            echo "<tr><td>Seller Name:</td><td>".$row['seller_username']."</td></tr>";
            echo "<tr><td>Room Type:</td><td>".$row['Type_bhk']."</td></tr>";
            echo "<tr><td>Hostel description:</td><td>".$row['Location']."</td></tr>";
            echo "<tr><td>property  Type:</td><td>".$row['property_type']."</td></tr>"; 
            echo "<tr><td>Hostel Address:</td><td>".$row['Address']."</td></tr>"; 
			echo "<tr><td>Hostel Locality:</td><td>".$row['Locality']."</td></tr>"; 
			echo "<tr><td>Hostel Detais:</td><td>".$row['Text_Area']."</td></tr>"; 
			echo "<tr><td>Seller Contact No.:</td><td>".$row['Mobile_no']."</td></tr>"; 
			echo "<tr><td>Hostel Rent</td><td>".$row['Rent']."</td></tr>"; 
			echo "<tr><td>Are rooms Furnished?:</td><td>".$row['Furnished']."</td></tr>"; 
			echo "<tr><td>property name:</td><td>".$row['property_name']."</td></tr>"; 
			//echo "<tr><td>".$row['uinque_id']."</td></tr>"; 
			echo "<tr><td> <div class='form-group'>";
          
           echo "<div>";
		
		
          
         echo "  </div>";
         
        echo "   </div></td></tr>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		
          }
            }
            else
            {
                echo "alert('connection error')";
            }
      
    echo "</table></td>";
	echo "</div >";
	echo "<br>";
		echo "<br>";
		echo "<br>";
   ?>
  </div>
</div>
</div>
<div
<embed   type="video/mp4" width="30%" ><source src="tedx.mp4"></embed>
<!--<p>hello world</p>-->

</div>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container" id="footer">
        <p class="text-center">Copyright . 2015</p>
      </div>
    </nav>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
   <script src="js/jquery.min.js"></script>
  
  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mycode.js"></script>
   
  </body>
</html>
