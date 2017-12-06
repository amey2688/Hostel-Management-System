<?php session_start();?>
<html>
  <body>
    <?php
	
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
	  $l=$_SESSION['cname'];
	  echo $l;
	 // $citys=$_GET['city'];
	  
        $result=mysql_connect("localhost","root","");
           if($result)
           {
              $r=mysql_select_db("project",$result);
              $qry="insert into landmarks(l_name,l_moblie,l_type,l_city,l_locality,l_address,l_details,l_image) values('$a','$b','$c','$l','$f','$g','$i','$k')";
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
	//echo "update successful!!!";
	?>
  </body>
</html>