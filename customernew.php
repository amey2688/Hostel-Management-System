
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
              <nav >
                <ul class="nav masthead-nav navbar-fixed">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="Features.php">Our Events</a></li>
                  <li><a href="contactus.php">Contact</a></li>
                  <li><a href="sponsorus.php">Sponsor Us</a></li>
                  <li><a href="welcome.php?logout='1'">logout</a></li>
                  
                  
                </ul>
              </nav>
            </div>
          </div>
		 

         <div style="width=50%">
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <div id="filtermenu">
Apply filters
<form name='f1' method='get' action='customer1.php' role='form' class="form-inline" >
<table align='center' class="table-condensed table-hover">
 <tr>
   <th class='active'>Set area</th><th class='active'>Set Range</th><th class='active'>No. of rooms</th><th class='active'>Property type</th><th class='active'>Furnished</th>
 </tr>
 <tr>
 <td>
 <div class='form-group'>
<?php
echo "<SELECT class='form-control' NAME='t1'>";
  $con=mysql_connect("localhost","root","");
           if($con)
           {    //$x=$_SESSION['username'];
	            $r=mysql_select_db("project",$con);
                $qry="select Locality from seller where Location='vellore'";
                $result=mysql_query($qry,$con);
               while(($row=mysql_fetch_assoc($result))!=false)
          {
                            // <OPTION VALUE='vellore'>vellore</OPTION>

            echo "<OPTION VALUE='".$row['Locality']."'>".$row['Locality']."</OPTION>";
           
          }
            }
            else
            {
                echo "alert('connection error')";
            }
      

echo "</select>";
?>
</div>
</td>
<td><div class='form-group'>
<select class='form-control' name='t2'>
                <OPTION VALUE='0'>below 1000</OPTION>
	             <OPTION VALUE='1000'>1000-2000</OPTION>
                 <OPTION VALUE='2000'>2000-3000</OPTION>
                 <OPTION VALUE='3000'>3000-4000</OPTION>
				 <OPTION VALUE='4000'>4000-5000</OPTION>
				 <OPTION VALUE='5000'>5000-6000</OPTION>
	             <OPTION VALUE='6000'>6000-7000</OPTION>
				 <OPTION VALUE='7000'>7000-8000</OPTION>
				 <OPTION VALUE='8000'>8000-9000</OPTION>
				 <OPTION VALUE='9000'>9000-10000</OPTION>
				 <OPTION VALUE='10000'>above 10000</OPTION>
				 </select></div ></td>
  <td><div class="form-group"> <SELECT class='form-control' NAME='t4'>
                 <OPTION VALUE='1bhk'>1bhk</OPTION>
                 <OPTION VALUE='2bhk'>2bhk</OPTION>
                 <OPTION VALUE='3bhk'>3bhk</OPTION>
                 <OPTION VALUE='4bhk'>4bhk</OPTION>
                 </SELECT>
				 </div >
   </td>
   <td><div class='form-group'>
     <SELECT class='form-control' NAME='t5'>
                 <OPTION VALUE='appartment'>Appartment</OPTION>
                 <OPTION VALUE='villa'>villa</OPTION>
                 <OPTION VALUE='bunglow'>bunglow</OPTION>
                 </SELECT>
				 </div>
   </td>
   <td>
   <div class='form-group'>
    <SELECT class='form-control' NAME='t6'>
                 <OPTION VALUE='fully-furnished'>Fully furnished</OPTION>
                 <OPTION VALUE='Semi-furnished'>Semi furnished</OPTION>
                 <OPTION VALUE='unfurnished'>Unfurnished</OPTION>
                 </SELECT>
				 </div >
   </td>
</tr>
<tr>
 <td colspan='6'  class="info" align='center'><input type='submit'  class="btn btn-xs btn-info" name='apply' value='Apply'></td>
</tr>
</TABLE>
<hr width='500' align='center' size='3'>
</form>
</div>
<div class="table-responsive">

<?php
 
	   $con=mysql_connect("localhost","root","");
           if($con)
           {   // $x=$_SESSION['username'];
	            $r=mysql_select_db("project",$con);
                $qry="select * from seller where Location='vellore'";
                $result=mysql_query($qry,$con);
               while(($row=mysql_fetch_assoc($result))!=false)
          {
			 echo "<table align='center' cellspacing='15' cellpadding='15' class='table' border='1' >";
            echo "<tr>";
            echo "<td>";
			 echo "<table>";
			   echo "<tr>";
			   echo "<tr><td>Property name:</td><td><a href='view.php?id=".$row['uinque_id']."'>".$row['property_name']."</a></td>";
			   echo "&nbsp;<td rowspan='5' id='imgshow' ><a href='view.php?id=".$row['uinque_id']."'>&nbsp;&nbsp;<img src='".$row['Seller_ph1']."' class='img-thumbnail' height='200' width='200' align='right'>&nbsp;&nbsp;<img src='".$row['Seller_ph1']."' class='img-thumbnail' height='200' width='200' align='right'></a></td></tr>";
			     //echo "<tr><td>Property name:</td><td>".$row['Address']."</td><td rowspan='5'><img src='".$row['Seller_ph1']."' height='200' width='200'></td></tr>";
				  echo "<tr><td>Property type:</td><td>".$row['property_type']."</td><td></td></tr>";
				  echo "<tr><td>bhk:</td><td>".$row['Type_bhk']."</td><td></td></tr>";
				  echo "<tr><td>owner name:</td><td>".$row['seller_username']."</td><td></td></tr>";
				  echo "<tr><td>owner contact no:</td><td>".$row['Mobile_no']."</td><td></td></tr>";
				//  echo "<tr><td rowspan='5'></td><td></td><td></td></tr>";
			 echo "</table>";
			echo "</td></tr>"; 
			echo "</table>";
          }
            }
            else
            {
                echo "alert('connection error')";
            }
	  
 
   
?>

</div>
 </div>
 <br>
 <br>
 <br>
 <br>
		  </div>
		  </div>
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
  <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
