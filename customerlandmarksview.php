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
   <th class='active'>Select area</th><th class='active'>Landmark type</th>
 </tr>
 <tr>
 <td>
 <div class='form-group'>
<?php
$w=$_GET['city'];
$_SESSION['cts']=$w;
echo $w;
echo "<SELECT class='form-control' NAME='t1'>";
  $con=mysql_connect("localhost","root","");
           if($con)
           {    //$x=$_SESSION['username'];
	            $r=mysql_select_db("project",$con);
                $qry="select distinct l_locality from landmarks where l_city='$w'";
                $result=mysql_query($qry,$con);
               while(($row=mysql_fetch_assoc($result))!=false)
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
 $w=$_GET['city'];
echo "$w";
	   $con=mysql_connect("localhost","root","");
           if($con)
           {   // $x=$_SESSION['username'];
	            $r=mysql_select_db("project",$con);
                $qry="select * from landmarks where l_city='$w'";
                $result=mysql_query($qry,$con);
               while(($row=mysql_fetch_assoc($result))!=false)
          {
			  // if(empty($row['Seller_ph1']))
				//   echo "machar ke jhaat!!!";
			 echo "<table align='center' cellspacing='15' cellpadding='15' class='table' border='1' >";
            echo "<tr>";
            echo "<td>";
			 echo "<table>";
			  // echo "<tr>";
			   echo "<tr><td>Landmerk name:</td><td>".$row['l_name']."</td>";
			 if(empty($row['l_image']))
				   echo "&nbsp;<td rowspan='5' id='imgshow' >&nbsp;&nbsp;<img src='work.jpg' class='img-thumbnail img-responsive' data-toggle='modal' data-target='#testmodal1' id='modalsimg' height='200' width='200' align='right'>";
               else
			   echo "&nbsp;<td rowspan='5' id='imgshow' >&nbsp;&nbsp;<img src='".$row['l_image']."' class='img-thumbnail img-responsive' data-toggle='modal' data-target='#testmodal1' id='modalsimg' height='200' width='200' align='right'>";
			  //   <!--1st modal-->
      echo " <div class='modal fade' id='testmodal1' role='dialog' tabindex='-1' aria-labelledby='#myModalLabel' aria-hidden='true'> ";
       echo "  <div class='modal-dialog modal-lg' id='contentdialogue'>";
        echo " <div class='modal-content'>";
         echo "<div class='modal-header'>";
        echo "<button type='button' class='close' data-dismiss='modal' aria-hidden='rue'>&times;</button>";
         echo "<h4 class='modal-title' id='myModalLabel2'>Hostel Images</h4>";
       echo  "</div>";
         echo "<div class='modal-body'>";
		echo" <img src='".$row['l_image']."' class='img-thumbnail' height='200' width='200'>";
		echo "&nbsp;";echo "&nbsp;";
		echo "&nbsp;";
		echo "&nbsp;";
		echo "&nbsp;";
		echo" <img src='".$row['l_image']."' class='img-thumbnail' height='200' width='200'>";
			echo "&nbsp;";echo "&nbsp;";
		echo "&nbsp;";
		echo "&nbsp;";
		echo "&nbsp;";
		echo" <img src='".$row['l_image']."' class='img-thumbnail' height='200' width='200'>";
			echo "&nbsp;";echo "&nbsp;";
		echo "&nbsp;";
		echo "&nbsp;";
		echo "&nbsp;";
		echo" <img src='".$row['l_image']."' class='img-thumbnail' height='200' width='200'>";
		
			echo "&nbsp;";echo "&nbsp;";
		echo "&nbsp;";
		echo "&nbsp;";
		echo "&nbsp;";
		echo" <img src='".$row['l_image']."' class='img-thumbnail' height='200' width='200'>";
		echo "</div>";
        echo " <div class='modal-footer'>";
		
		echo "<button class='btn btn-success' data-dismiss='modal'>close</button></div>";
        echo" </div>";
        echo " </div>";
        echo " </div>";
       
     //   <!---->
			   echo "&nbsp;&nbsp;</td></tr>";
			     //echo "<tr><td>Property name:</td><td>".$row['Address']."</td><td rowspan='5'><img src='".$row['Seller_ph1']."' height='200' width='200'></td></tr>";
				  echo "<tr><td>Landmark type:</td><td>".$row['l_type']."</td><td></td></tr>";
				  echo "<tr><td>Landmark address:</td><td>".$row['l_address']."</td><td></td></tr>";
				  echo "<tr><td>Landmark Localty:</td><td>".$row['l_locality']."</td><td></td></tr>";
				  echo "<tr><td>Landmark Mobile Number:</td><td>".$row['l_moblie']."</td><td></td></tr>";
				//  echo "<tr><td>owner contact no:</td><td>".$row['Mobile_no']."</td><td></td></tr>";
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
