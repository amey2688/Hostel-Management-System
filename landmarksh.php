<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	//else if(isset($_SESSION['username'])) {
	//	header('location: sellermenu.php');
		
	//}

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
    <meta name="description" content="">
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
              <h3 class="masthead-brand"><img src="images/hostellogo.png" width="50%" id="logo" class=" img-responsive"></h3>
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

          <div class="inner cover">
		   <CENTER><H3>ADMIN PORTAL</H3></CENTER>
            <div class="row" id="inputform">
           <div class="col-lg-6 col-md-6 col-sm-6" id="inputform">
		  
           <h2><small>Enter Landmark  details</small></h2>
          
           
           
           <form role="form" action="landmarksdatainsert.php" id="contactform" method='get' class="form-horizontal" name="f1">
           <div class="form-group">
           <label for="name" class="label label-default">Enter Your Name</label>
           <input type="text" class="form-control" name="t1"></div>
		   
		  
           
          
           <div class="form-group"> <label class="label label-default" for="mobile"> Enter your mobile</label>
           <input type="tel" class="form-control" name='t2'>
		   </div>
		    <div class="form-group">
        <label class="label label-default" for="selection">Select property type</label>
		<select class="form-control" name='t3'>
    <option VALUE='hospital'>HOSPITAL</option>
    <option VALUE='office'>GOVERNMENT OFFICE</option>
    <option VALUE='shopping'>SHOPPING MALLS</option>
	<option VALUE='schools'>SCHOOLS</option>
	<option VALUE='hotels'>HOTELS</option>
    <br>
  </select>
      </div>
	  
	  
	  
     <div class="form-group">
           <label for="email" class="label label-default"> Enter Your hostel locality</label>
<input type="text" class="form-control" name='t6'>        <br>  </div>

 <div class="form-group">
           <label class="label label-default"> Enter Your hostel address</label>
<textarea class="form-control" name='t7' rows='5' cols='40'> </textarea>       <br>  </div>


          
           
<div class="form-group">
 <label class="label label-default" for="message">enter hotel description</label>
           <textarea class="form-control"  rows="5" cols="50" name='t9'></textarea>
           </div>
		   
		   
		  <div class="form-group">
		   
    Add photo-1:<input class="form-control" type='file' name='t11'><br>


		   
		   </div>
           <div class="form-group">
          
           <div>
		<input type="submit" value="submit"class="btn btn-primary" name="b1">
		
          
           </div>
         
           </div>
            <div class="form-group">
           <input type="reset" value="reset" class="btn btn-warning">
           </div>
           
           
           </form>
		   
  <?php
  $w=$_GET['city'];
  $_SESSION['cname']=$w;
  echo $w;
  echo "hello ".$_SESSION['username'];
  /*$w=$_GET['city'];
  echo $w;
  $_SESSION['cname']=$w;
     echo "hello ".$_SESSION['username'];
    if(count($_GET)>0)
    { 
	  $u=$_SESSION['username'];
      $a=$_GET['t1'];
      $b=$_GET['t2'];
      $c=$_GET['t3'];
      $f=$_GET['t6'];
      $g=$_GET['t7'];
      $i=$_GET['t9'];
      $k=$_GET['t11'];
	 // $citys=$_GET['city'];
	  
        $result=mysql_connect("localhost","root","");
           if($result)
           {
              $r=mysql_select_db("project",$result);
              $qry="insert into landmarks(l_name,l_moblie,l_type,l_city,l_locality,l_address,l_details,l_image) values('$a','$b','$c','$citys','$f','$g','$i','$k')";
              $res=mysql_query($qry,$result);
              if($res)
              {
                  echo "data inserted!!!";
              }
              else
              {
                    echo "unsuccessful!!!".mysql_error($result);
              }
                           
           }
           else
             echo "alert('database alert!!')"; 
         }
  */?>
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
