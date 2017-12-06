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
                  <li class="active"><a href="adminmenu.php">Home</a></li>
                  
                  <li><a href="#">Contact</a></li>
				  
				  <li><a href="landmarksh.php">Landmarks</a></li>
				  <li><a href="adminh.php">SELLERS</a></li>
                  
                 <li><a href="welcome.php?logout='1'">logout</a></li>
                  
                  
                </ul>
              </nav>
            </div>
          </div>
 <CENTER><H3>ADMIN PORTAL</H3></CENTER>
  <div id="adminh">

<br>
<br>
<br>
<br>
<br>

<br>


<form name='f1' method='post' action='admin.php'>
<table  width="400" border="0" cellspacing="1" cellpadding="0">
<?php
$city=$_GET['city'];
$dbc = mysqli_connect('localhost','root','','project')
or die('Error connecting to MySQL server');

$query = "select * from seller where location='$city'";

$result = mysqli_query($dbc,$query)
or die('Error querying database');

while ($row=mysqli_fetch_array($result)) {
echo "	<form name='f1' method='post' action='adminh.php'>";
echo "<table align='center' cellspacing='1' cellpadding='0' class='table' border='1' >";
echo "<tr><th>Choose</th><th>Seller Username</th><th>locality</th><th>Property Name</th><th>Mobile No.</th><th>photo</th></tr>";
echo "<tr>";
echo '<td align="center" ><input name="checkbox[]" type="checkbox" value="'.$row["uinque_id"].'"></td>';
echo'<td >'.$row['seller_username'].'</td>';
echo '<td >'.$row['Locality'].'</td>';
echo '<td >'.$row['property_name'].'</td>';
echo '<td >'.$row['Mobile_no'].'</td>';

echo '<td ><img src="'.$row['Seller_ph1'].'" width="200" height="200" class="img-thumbnail img-responsive"></td>';
echo '</tr>';
echo '<tr>';
echo '<td colspan="6" align="center" ><input name="delete" type="submit" value="Delete"></td></td>';
echo '</tr>';


}
?>
</form>
</table>
<br>
<br>
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
