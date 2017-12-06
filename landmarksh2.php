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
  

  <body>
   		  
           <h2><small>Enter Landmark  details</small></h2>
          
           
           
           <form action="landmarksh2.php" id="contactform" method='get' name="f1">
           
           NAME:
           <input type="text"  name="t1"><br>
		   
		  
           
          
           Enter your mobile:
           <input type="tel" name='t2'><br>
		 
		    
       Select property type:
		<select name='t3'>
    <option VALUE='hospital'>HOSPITAL</option>
    <option VALUE='office'>GOVERNMENT OFFICE</option>
    <option VALUE='shopping'>SHOPPING MALLS</option>
	<option VALUE='schools'>SCHOOLS</option>
	<option VALUE='hostels'>HOTELS</option>
    
  </select>
     
	  <br>
	  
	  
     locality:
<input type="text" name='t6'><br>

 Enter Your hostel address
<textarea class="form-control" name='t7' rows='5' cols='40'> </textarea><br>       

          
           
enter hotel description
           <textarea class="form-control"  rows="5" cols="50" name='t9'></textarea><br>
             
		   
		 
		   
    Add photo-1:<input class="form-control" type='file' name='t11'><br>


		   
		   
		<input type="submit" value="submit" name="b1">
		
          
           
           <input type="reset" value="reset">
           
           
           
           </form>
		   
  <?php
  $w=$_GET['city'];
  echo $w;
     echo "hello ".$_SESSION['username'];
    if(count($_GET)>0)
    { 
	  $u=$_SESSION['username'];
      $a=$_GET['t1'];
    echo $a;
      $b=$_GET['t2'];
    echo $b;
      $c=$_GET['t3'];
    echo $c;
      $f=$_GET['t6'];
    echo $f;
      $g=$_GET['t7'];
    echo $g;
      $i=$_GET['t9'];
    echo $i;
      $k=$_GET['t11'];
    echo $k;
	  //$citys=$_GET['city']; 
	 // echo $citys;
       /* $result=mysql_connect("localhost","root","");
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
             echo "alert('database alert!!')"; */
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
