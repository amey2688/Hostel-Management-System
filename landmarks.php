<?php session_start(); ?>
<html>
  <body>
     
   <form name='f1' method='get' action='landmarks.php'>
     
    name:<input type='text' name='t1'><br>
    contact no.:<input type='text' name='t2'><br>
    property type:<SELECT NAME='t3'>
                 <OPTION VALUE='appartment'>Appartment</OPTION>
                 <OPTION VALUE='villa'>villa</OPTION>
                 <OPTION VALUE='bunglow'>bunglow</OPTION>
                 </SELECT><br>
    locality:<input type='text' name='t6'><br>
    address:<textarea name='t7' rows='5' cols='40'></textarea><br>
    detailed description:<textarea name='t9' rows='8' cols='50'></textarea><br> 
    Add photo-1:<input type='text' name='t11'><br>
	<!--<a href='del.php'>continue</a><br>-->
    <input type='submit' name='b1' value='submit'>&nbsp;&nbsp;<input type='reset' name='b2' value='clear'>   
  </form>
  <?php
     echo "hello ".$_SESSION['username'];
    if(count($_GET)>0)
    { $u=$_SESSION['username'];
      $a=$_GET['t1'];
      $b=$_GET['t2'];
      $c=$_GET['t3'];
      $f=$_GET['t6'];
      $g=$_GET['t7'];
      $i=$_GET['t9'];
      $k=$_GET['t11'];
	  
        $result=mysql_connect("localhost","root","");
           if($result)
           {
              $r=mysql_select_db("project",$result);
              $qry="insert into admin(name,contact_number,property_type,city,area,address,description,phone1) values('$a','$b','$c','vellore','$f','$g','$i','$k')";
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
  ?>
 </body>
</html>