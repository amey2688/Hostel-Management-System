<?php session_start();
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
    <meta name="description" content="tag","gaming","vit">
    <link rel="icon" href="favicon.png">

    <title></title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="tect/css" href="css/radio.css">

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
				  <li><a href="Sellermenu.php">Menu</a></li>
                  
                 <li><a href="welcome.php?logout='1'">logout</a></li>
                  
                  
                </ul>
              </nav>
  [          </div>
          </div>

  <div id="sellerdel">

<br>
<br>
<br>
<form name='f1' method='post' action='sellerdelh.php'>
<?php

$dbc = mysqli_connect('localhost','root','','project')
or die('Error connecting to MySQL server');

$query = "select * from seller where name='".$_SESSION['username']."'";

$result = mysqli_query($dbc,$query)
or die('Error querying database');

while ($row=mysqli_fetch_array($result)) {

echo "<br>";
echo "<br>";
//.......................................................
 echo "<table align='center' cellspacing='15' cellpadding='15' class='table' border='1' >";
 echo "<tr><th>Choose</th><th>property_name</th><th>locality</th><th>Location</th><th>owner name</th><th>photo</th></tr>";       
            echo "<tr>";
			echo "<td><input type='radio' name='radio' value='".$row['uinque_id']."'><label for='radio3'>tap to select</label></div></td>";
            //echo "<td>";
			 //echo "<table>";
			  // echo "<tr>";
			   echo "<td>".$row['property_name']."</td>";
			// if(empty($row['Seller_ph1']))
			//	   echo "&nbsp;<td rowspan='5' id='imgshow' >&nbsp;&nbsp;<img src='work.jpg' class='img-thumbnail img-responsive' data-toggle='modal' data-target='#testmodal1' id='modalsimg' height='200' width='200' align='right'>";
            //   else
			   //echo "&nbsp;<td rowspan='5' id='imgshow' >&nbsp;&nbsp;<img src='".$row['Seller_ph1']."' class='img-thumbnail img-responsive' data-toggle='modal' data-target='#testmodal1' id='modalsimg' height='200' width='200' align='right'>";
				 //echo "&nbsp;&nbsp;</td></tr>";
			     //echo "<tr><td>Property name:</td><td>".$row['Address']."</td><td rowspan='5'><img src='".$row['Seller_ph1']."' height='200' width='200'></td></tr>";
				  echo "<td>".$row['Locality']."</td>";
				  echo "<td>".$row['Location']."</td>";
				  echo "<td>".$row['seller_username']."</td>";
				  //echo "<tr><td>owner contact no:</td><td>".$row['Mobile_no']."</td><td></td></tr>";
				//  echo "<tr><td rowspan='5'></td><td></td><td></td></tr>";
			 //echo "</table>";
			//echo "</td></tr>";
			echo "<td ><img src='".$row['Seller_ph1']."' height='200' class='img-thumbnail img-responsive' width='200'></td></tr>";
			
          echo "<tr><td colspan='6' align='center'><input type='submit' name='delete' value='delete'>&nbsp;&nbsp;<a href='selleredit.php?id=".$row['uinque_id']."' class='btn btn-default'>edit</a></td></tr>";			
			echo "</table>";
		   }
?>
</form>
<br>
<br>





<?php
if(isset($_POST['delete']))
{
    $radio = $_POST['radio'];

    
     $sql = "DELETE FROM seller WHERE uinque_id='$radio'";
     $result = mysqli_query($dbc,$sql);
	 
	  if($result){
        echo "delete successful!!!";
    }
    }
    // if successful redirect to delete_multiple.php 
  
 
 
mysqli_close($dbc);

?>
<br>
<br>
<br>
<br>
<br>
  </div>

</div>

</div>
</div>


    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container" id="footer">
        <p class="text-center">Copyright@2017</p>
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
