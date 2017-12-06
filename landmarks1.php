<!DOCTYPE html>
<html>
  <body>
     <h2>Enter Landmark  details</h2>
     <form action="landmarks1.php" id="contactform" method='get' name="f1">
      NAME:<input type="text"  name="t1"><br>
      Enter your mobile:<input type="tel" name='t2'><br>
      Select property type:<select name='t3'>
    	<option VALUE='hospital'>HOSPITAL</option>
    	<option VALUE='office'>GOVERNMENT OFFICE</option>
   	 <option VALUE='shopping'>SHOPPING MALLS</option>
	<option VALUE='schools'>SCHOOLS</option>
	<option VALUE='hostels'>HOTELS</option>
      </select><br>
     locality:<input type="text" name='t6'><br>
     Enter Your hostel address:<textarea name='t7' rows='5' cols='40'></textarea><br>       
     enter hotel description:<textarea rows="5" cols="50" name='t9'></textarea><br>
     Add photo-1:<input class="form-control" type='file' name='t11'><br>
     <input type="submit" value="submit" name="b1"><input type="reset" value="reset">
           </form> 
   <?php
   //  echo "hello ".$_SESSION['username'];
    if(count($_GET)>0)
    {  
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
  }
  
  ?>    
</body>
</html>