<?php 
	session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Amey Yadav">
    <link rel="icon" href="favicon.png">

    <title>Hostel booking portal</title>

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
              <h3 class="masthead-brand"><img src="images/hostellogo.png" width="50%" id="logo" class=" img-responsive"></h3>
              <nav>
                <ul class="nav masthead-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                 <li><a href="Sellermenu.php">Menu</a></li>
                  
                  
                 <li><a href="welcome.php?logout='1'">logout</a></li>
              
             
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <div class="row" id="inputform">
			 <div class="col-lg-6 col-md-6 col-sm-6" id="inputform">
			<?php
			echo $_SESSION['username'];
			    $x=$_GET['id'];
				$_SESSION['ide']=$x;
			     $con=mysql_connect("localhost","root","");
           if($con)
           {    $r=mysql_select_db("project",$con);
                $qry="select * from seller where uinque_id='$x'";
                $result=mysql_query($qry,$con);
				echo "<form name='f2' method='get' action='faltu.php' id='contactform' class='form-horizontal'>"; 
               while(($row=mysql_fetch_assoc($result))!=false)
          {
			
         
           echo "<h2><small>Enter hotel details</small></h2>";
          
           
           
         
          echo "<div class='form-group'>";
          echo "<label for='name' class='label label-default'>Enter Your Name</label>";
          echo "<input type='text' class='form-control' value='".$row['seller_username']."'  name='t1'></div>";
		   
		  echo  "<div class='form-group'>";
          echo "<label for='name' class='label label-default'>Enter property name</label>";
         echo  "<input type='text' class='form-control' value='".$row['property_name']."' name='t16'></div>";
           
          
         echo  "<div class='form-group'> <label class='label label-default' for='mobile'> Enter your mobile</label>";
         echo  "<input type='tel'class='form-control' value='".$row['Mobile_no']."' name='t2'>";
		 echo  "</div>";
		 echo  " <div class='form-group'>";
        echo  "<label class='label label-default' for='selection'>Select property type</label>";
		echo  "<select class='form-control' name='t3'>";
  echo  "<option VALUE='appartment'>appartment</option>";
  echo  "<option VALUE='villa'>villa</option>";
   echo "<option VALUE='bunglow'>bunglow</option>";
 echo   "<br>";
 echo "</select>";
     echo "</div>";
	 echo " <div class='form-group'>";
     echo   "<label class='label label-default' for='selection'>Select property bhk</label>";
	echo	"<select class='form-control' name='t4'>";
 echo  "<OPTION VALUE='1bhk'>1bhk</OPTION>";
   echo              "<OPTION VALUE='2bhk'>2bhk</OPTION>";
   echo             " <OPTION VALUE='3bhk'>3bhk</OPTION>";
   echo             " <OPTION VALUE='4bhk'>4bhk</OPTION>";
    echo            " </SELECT><br>";

    echo  "</div>";
	  
	echo " <div class='form-group'>";
    echo   " <label class='label label-default' for='selection'>Select city</label>";
	echo	"<select class='form-control' name='t5'>";
   echo"<OPTION VALUE='vellore'>vellore</OPTION>";
    echo            " <OPTION VALUE='chennai'>chennai</OPTION>";
     echo           " <OPTION VALUE='bhopal'>bhopal</OPTION>";
     echo          "  <OPTION VALUE='amravati'>amravati</OPTION>";
      echo           "</SELECT><br>";

     echo "</div>";
    echo "<div class='form-group'>";
   echo        "<label for='email'class='label label-default'> Enter Your hostel locality</label>";
echo"<input type='text' class='form-control' value='".$row['Locality']."' name='t6'>        <br>  </div>";

echo "<div class='form-group'>";
echo         "  <label class='label label-default'> Enter Your hostel address</label>";
echo"<textarea class='form-control' name='t7' rows='5' cols='40'>".$row['Address']." </textarea>       <br>  </div>";

$zx=$row['Furnished'];
echo          " <div class='form-group'>";
				



if($zx=='unfurnished')
	 {
		 echo        "   <label class='label label-default' for='message'>Select hotel type</label>&nbsp;";
	  echo "<tr><td></td><td><input type='radio' name='t8'  value='unfurnished' checked>unfurnished&nbsp;<input type='radio' name='t8' value='semi-furnished'>semi-furnished&nbsp;<input type='radio' name='t8' value='fully-furnished'>fully-furnished</td></tr>";
	 
	 }
	 elseif($zx=='semi-furnished')
	 {
		 echo        "   <label class='label label-default' for='message'>Select hotel type</label>&nbsp;";
		 echo "<tr><td></td><td><input type='radio' name='t8'  value='unfurnished'>unfurnished&nbsp;<input type='radio' name='t8' value='semi-furnished' checked>semi-furnished&nbsp;<input type='radio' name='t8' value='fully-furnished'>fully-furnished</td></tr>";
	 }
	else
	{
		echo        "   <label class='label label-default' for='message'>Select hotel type</label>&nbsp;";
		 echo "<tr><td></td><td><input type='radio' name='t8'  value='unfurnished'>unfurnished&nbsp;<input type='radio' name='t8' value='semi-furnished'>semi-furnished&nbsp;<input type='radio' name='t8' value='fully-furnished' checked>fully-furnished</td></tr>";
	}
	echo"</div>";
           
echo"<div class='form-group'>";
echo "<label class='label label-default' for='message'>enter hotel description</label>";
     echo     " <textarea class='form-control'  rows='5' cols='50' name='t9'>".$row['Text_Area']."</textarea>";
     echo     " </div>";
		   
		   
		echo   "<div class='form-group'>";
		echo "  <label class='label label-default' for='message' >set hotel rent</label>";
		echo  " <input type='text' class='form-control'  value='".$row['Rent']."' name='t10'><br>";
   echo" Add photo-1:<input class='form-control' type='file' name='t11' value='".$row['Seller_ph1']."'><br>";
  echo  "Add photo-2:<input class='form-control' type='file' name='t12'value='".$row['Seller_ph2']."'><br>";
  echo " Add photo-3:<input class='form-control' type='file' name='t13' value='".$row['Seller_ph3']."'><br>";
  echo  "Add photo-4:<input class='form-control' type='file' name='t14'value='".$row['Seller_ph4']."'><br>";
  echo  "Add photo-5:<input class='form-control' type='file' name='t15'value='".$row['Seller_ph5']."'><br>";

		   
	echo	 "  </div>";
     echo    "  <div class='form-group'>";
          
     echo   "   <div>";
	echo	"<input type='submit' name='edit' value='edit' class='btn btn-primary' >";
		
          
     echo     " </div>";
         
     echo     " </div>";
     echo    "   <div class='form-group'>";
     echo     " <input type='reset' value='reset' class='btn btn-warning'>";
     echo    "  </div>";
           
		  }
      echo     "</form>";
		  

		  /* if(isset($_GET['edit']))
{
	 $u=$_SESSION['username'];
    $a=$_GET['t1'];
      $b=$_GET['t2'];
      $c=$_GET['t3'];
      $d=$_GET['t4'];
      $e=$_GET['t5'];
      $f=$_GET['t6'];
      $g=$_GET['t7'];
      $h=$_GET['t8'];
      $i=$_GET['t9'];
      $j=$_GET['t10'];
      $k=$_GET['t11'];
      $l=$_GET['t12'];
      $m=$_GET['t13'];
      $n=$_GET['t14'];
      $o=$_GET['t15'];
	  $p=$_GET['t16'];
$sql = "update seller set seller_username='".$a."',Mobile_no='".$b."',property_type='".$c."',Type_bhk='".$d."',Location='".$e."',Locality='".$f."',Address='".$g."',Furnished='".$h."',Text_Area='".$i."',Rent='".$j."',Seller_ph1='".$k."',Seller_ph2='".$l."',Seller_ph3='".$m."',Seller_ph4='".$n."',Seller_ph5='".$o."',property_name='".$p."' where uinque_id=$x";
$result1 = mysql_query($sql,$con);
if($result1){
echo "update successful!!!";
}

 else
	 echo "error".mysql_error();
 mysql_close($con);
 }*/
}
// if successful redirect to delete_multiple.php 




            
            else
            {
                echo "alert('connection error')";
            }
      
			  ?>
		   

           </div>
            <div class="col-lg-6 col-md-6 col-sm-6" id="addressbar">
            
            <h2><small> Admin Contact Details</small></h2>
            
           <address class="alert"><p><big>AMEY YADAV</big><br>
amey.yadav2015@vit.ac.in<br>
900369697</p></address>
<address class="alert"><p><big>SHASHWAT KATIYAR
</big><br>shashwat.katiyar2015@vit.ac.in<br>
9790625941</p></address>
<address class="alert"><p><big>ABHINAV SINGHANIA
</big><br>abhinav.singhania2015@vit.ac.in<br>
9790625941</p></address>
</div>
            </div>
          </div>

          

        </div>

      </div>

    </div>
  

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container" id="footer">
        <p class="text-center">Copyright . 2017</p>
      </div>
    </nav>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
   <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 
   
  </body>
</html>
