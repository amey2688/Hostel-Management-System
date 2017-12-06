<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="tag","gaming","vit">
    <meta name="author" content="Amey Yadav","Ameyyadav">
    <link rel="icon" href="favicon.png">

    <title>Blogging Website</title>

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
                  <li><a href="Features.php">Our Events</a></li>
                  <li><a href="contactus.php">Contact</a></li>
                  <li><a href="sponsorus.php">Sponsor Us</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  
                  
                </ul>
              </nav>
            </div>
          </div>

  <div id="sellerdel">

<br>
<br>
<br>

<?php

$dbc = mysqli_connect('localhost','root','','project')
or die('Error connecting to MySQL server');

$query = "select * from seller where name='".$_SESSION['username']."'";

$result = mysqli_query($dbc,$query)
or die('Error querying database');

while ($row=mysqli_fetch_array($result)) {
echo	"<form name='f1' method='post' action='del.php'>";
echo "<table border='1' cellspacing='15' cellpadding='15' >";
echo "<tr>";
echo '<td align="center" ><input name="checkbox[]" type="checkbox" value="'.$row["uinque_id"].'"></td>';
echo'<tr><td>Seller Username:</td><td >'.$row['seller_username'].'</td></tr>';
echo '<tr><td>Hostel Location:</td><td >'.$row['Location'].'</td></tr>';
echo '<tr><td>Hostel Locality</td><td >'.$row['Locality'].'</td></tr>';
echo '<tr><td ><img src="'.$row['Seller_ph1'].'" width="200" height="200"></td></tr>';
echo '</tr>';
echo '<tr>';
echo '<td colspan="4" align="center" ><input name="delete" type="submit" value="Delete">&nbsp;&nbsp;<a href="edit.php?id='.$row["uinque_id"].'" class="btn btn-default">edit</a></td></td>';
echo '</tr>';
echo "<br>";
echo "</form>";
echo "</table>";
echo "<br>";
echo "<br>";
//.......................................................
 echo "<table align='center' cellspacing='15' cellpadding='15' class='table' border='1' >";
           
            echo "<tr>";
			echo "<td><input type='radio' name='radio' value='".$row['uinque_id']."'></td>";
            echo "<td>";
			 echo "<table>";
			  // echo "<tr>";
			   echo "<tr><td>Seller username:</td><td>".$row['seller_username']."</td>";
			// if(empty($row['Seller_ph1']))
			//	   echo "&nbsp;<td rowspan='5' id='imgshow' >&nbsp;&nbsp;<img src='work.jpg' class='img-thumbnail img-responsive' data-toggle='modal' data-target='#testmodal1' id='modalsimg' height='200' width='200' align='right'>";
            //   else
			   echo "&nbsp;<td rowspan='5' id='imgshow' >&nbsp;&nbsp;<img src='".$row['Seller_ph1']."' s data-toggle='modal' data-target='#testmodal1' id='modalsimg' height='200' width='200' align='right'>";
				 echo "&nbsp;&nbsp;</td></tr>";
			     //echo "<tr><td>Property name:</td><td>".$row['Address']."</td><td rowspan='5'><img src='".$row['Seller_ph1']."' height='200' width='200'></td></tr>";
				  echo "<tr><td>Hostel Location:</td><td>".$row['Location']."</td><td></td></tr>";
				  echo "<tr><td>Hostel Locality:</td><td>".$row['Locality']."</td><td></td></tr>";
				  echo "<tr><td>owner name:</td><td>".$row['seller_username']."</td><td></td></tr>";
				  echo "<tr><td>owner contact no:</td><td>".$row['Mobile_no']."</td><td></td></tr>";
				//  echo "<tr><td rowspan='5'></td><td></td><td></td></tr>";
			 echo "</table>";
			echo "</td></tr>"; 
			echo "</table>";
		   }
?>
<br>
<br>





<?php
if(isset($_POST['delete']))
{
    $checkbox = $_POST['checkbox'];

    for($i=0;$i<count($checkbox);$i++){

     $del_id = $checkbox[$i];
     $sql = "DELETE FROM seller WHERE uinque_id='$del_id'";
     $result = mysqli_query($dbc,$sql);
    }
    // if successful redirect to delete_multiple.php 
   if($result){
        echo "delete successful!!!";
    }
 }
 
mysqli_close($dbc);

?>

  </div>

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
