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
	  $zzz=$_SESSION['ide'];
	  echo "aaaaaaaaaaaaaaaaaaaaaaaa".$_SESSION['ide'];
	  $con=mysql_connect("localhost","root","");
           if($con)
           {    $r=mysql_select_db("project",$con);
                $sql = "update seller set seller_username='".$a."',Mobile_no='".$b."',property_type='".$c."',Type_bhk='".$d."',Location='".$e."',Locality='".$f."',Address='".$g."',Furnished='".$h."',Text_Area='".$i."',Rent='".$j."',Seller_ph1='".$k."',Seller_ph2='".$l."',Seller_ph3='".$m."',Seller_ph4='".$n."',Seller_ph5='".$o."',property_name='".$p."' where uinque_id=$zzz";
                $result1 = mysql_query($sql,$con);
                if($result1){
                     echo "update successful!!!";
                    }

                  else
		   echo "error".mysql_error();}
	   else
		   echo "connection unsuccessful!!".mysql_connect_error();
 mysql_close($con);
	}		
	//echo "update successful!!!";
	?>
  </body>
</html>