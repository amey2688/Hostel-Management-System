<?php session_start();?>
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
         
                  <li><a href="contactus.php">Contact</a></li>
                  <li><a href="sellermenu.php">want to sell</a></li>
                 
                  
                  
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
<form name='f1' method='get' action='landmarkfilter.php' role='form' class="form-inline" >
<table align='center' class="table-condensed table-hover">
 <tr>
   <th class='active'>Set area</th><th class='active'>Landmark type</th>
 </tr>
 <tr>
 <td>
 <div class='form-group'>
<?php
$w=$_SESSION['cts'];
echo "<SELECT class='form-control' NAME='t1'>";
  
  $con=mysql_connect("localhost","root","");
           if($con)
           {    //$x=$_SESSION['username'];
	            $r=mysql_select_db("project",$con);
                $qry="select distinct l_locality from landmarks where l_city='$w'";
                $result=mysql_query($qry,$con);
               while(($row=mysql_fetch_assoc($result)))
          {
                            // <OPTION VALUE='vellore'>vellore</OPTION>

            echo "<OPTION VALUE='".$row['l_locality']."'>".$row['l_locality']."</OPTION>";
           
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

  
   <td><div class="form-group">
        
		<select class="form-control" name="t3">
    <option VALUE='hospital'>HOSPITAL</option>
    <option VALUE='office'>GOVERNMENT OFFICE</option>
    <option VALUE='shopping'>SHOPPING MALLS</option>
	<option VALUE='schools'>SCHOOLS</option>
	<option VALUE='hotels'>HOTELS</option>
    <br>
  </select>
      </div>
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
  // echo "hnlkm";
	   $a=$_GET['t1'];
	 //  echo $a;
	   //$b=$_GET['t2'];
	   //echo $b;
	   $c=$_GET['t3'];
	   
	   //$d=$_GET['t4'];
	    //echo $d;
	   //$e=$_GET['t5'];
	   //echo $e;
	   //$f=$_GET['t6'];
	   //echo $f;
	  $con=mysql_connect("localhost","root","");
           if($con)
           {   // $x=$_SESSION['username'];
	            $r=mysql_select_db("project",$con);
				
				    if($c=="hotels")
					{
						$qry="select * from landmarks where l_city='$w' and l_locality='$a' and l_type='$c'";
						$result=mysql_query($qry,$con);
				if (mysql_num_rows($result) > 0) {
               while(($row=mysql_fetch_assoc($result))!=false)
          {
			  echo "<table align='center' cellspacing='10' cellpadding='5' >";
            echo "<tr>";
            echo "<td>";
			 echo "<table>";
			   echo "<tr>";
			     echo "<tr><td>landmark name:</td><td>".$row['l_name']."</a></td><td rowspan='5'><img src='".$row['l_image']."' height='200' width='200'></td></tr>";
				  echo "<tr><td>landmark type:</td><td>".$row['l_type']."</td><td></td></tr>";
				  echo "<tr><td>contact number:</td><td>".$row['l_moblie']."</td><td></td></tr>";
				  echo "<tr><td>Landmark address:</td><td>".$row['l_address']."</td><td></td></tr>";
				  echo "<tr><td>Landmark details:</td><td>".$row['l_details']."</td><td></td></tr>";
				  echo "<tr><td>Landmark locality:</td><td>".$row['l_locality']."</td><td></td></tr>";
				  echo "<tr><td>BOOK HOTEL:</td><td><a href='booking.html'><input type='submit'  class='btn btn-xs btn-info' name='BOOK' value='BOOK'></a></td><td></td></tr>";
				  
				  
				  echo "<tr><td colspan='3' align='center'>-----------------------------------------</td></tr>";
				 
			 echo "</table>";
			echo "</td></tr>";
			echo "</table>";			
          }
					}
					else 
					echo "no entry found";
					}
					
					
					
				else {
					
					
				
                $qry="select * from landmarks where l_city='$w' and l_locality='$a' and l_type='$c'";
               

				$result=mysql_query($qry,$con);
				if (mysql_num_rows($result) > 0) {
               while(($row=mysql_fetch_assoc($result))!=false)
          {
			  echo "<table align='center' cellspacing='10' cellpadding='5' >";
            echo "<tr>";
            echo "<td>";
			 echo "<table>";
			   echo "<tr>";
			     echo "<tr><td>landmark name:</td><td>".$row['l_name']."</td><td rowspan='5'><img src='".$row['l_image']."' height='200' width='200'></td></tr>";
				  echo "<tr><td>landmark type:</td><td>".$row['l_type']."</td><td></td></tr>";
				 
				  echo "<tr><td>contact number:</td><td>".$row['l_moblie']."</td><td></td></tr>";
				  echo "<tr><td>Landmark address:</td><td>".$row['l_address']."</td><td></td></tr>";
				  echo "<tr><td>Landmark details:</td><td>".$row['l_details']."</td><td></td></tr>";
				  echo "<tr><td>Landmark locality:</td><td>".$row['l_locality']."</td><td></td></tr>";
				  echo "<tr><td colspan='3' align='center'>-----------------------------------------</td></tr>";
			 echo "</table>";
			echo "</td></tr>";
			echo "</table>";			
          }
				}
				else 
				echo "no entry found";}
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
        <p class="text-center">Copyright@2017</p>
      </div>
    </nav>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
   <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
