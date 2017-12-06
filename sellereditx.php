<?php session_start();?>
<html>
  <body>
     <table>
	    <tr>
		  
		    <td>
			
			  <?php
			    echo $_SESSION['username'];
			    $x=$_GET['id'];
			     $con=mysql_connect("localhost","root","");
           if($con)
           {    $r=mysql_select_db("project",$con);
                $qry="select * from seller where uinque_id='$x'";
                $result=mysql_query($qry,$con);
				echo "<form name='f2' method='get' action='faltu.php'><table>"; 
               while(($row=mysql_fetch_assoc($result))!=false)
          {
            echo "<tr>";
            echo "<td>Name:</td><td><input type='text' readonly name='t1' value='".$row['seller_username']."'></td></tr>";
			echo "<tr><td>Property_id:</td><td><input type='text' readonly name='t16' value='".$row['uinque_id']."'></td></tr>";
			echo "<tr><td>contact no:</td><td><input type='text' readonly name='t2' value='".$row['Mobile_no']."'></td></tr>";
			 echo "<tr><td>property type:</td><td><SELECT NAME='t3'>
                 <OPTION VALUE='appartment'>Appartment</OPTION>
                 <OPTION VALUE='villa'>villa</OPTION>
                 <OPTION VALUE='bunglow'>bunglow</OPTION>
                 </SELECT></td></tr>";
   echo "<tr><td>bhk:</td><td><SELECT NAME='t4'> <OPTION VALUE='1bhk'>1bhk</OPTION>
                 <OPTION VALUE='2bhk'>2bhk</OPTION>
                 <OPTION VALUE='3bhk'>3bhk</OPTION>
                 <OPTION VALUE='4bhk'>4bhk</OPTION>
                 </SELECT></td></tr>";
				echo "<tr><td>city:</td><td><SELECT NAME='t5'>
                 <OPTION VALUE='vellore'>vellore</OPTION>
                 <OPTION VALUE='chennai'>chennai</OPTION>
                 <OPTION VALUE='bhopal'>bhopal</OPTION>
                 <OPTION VALUE='amravati'>amravati</OPTION>
                 </SELECT></td></tr>";
				echo "<tr><td>locality:</td><td><input type='text' name='t6' value='".$row['Locality']."'></td></tr>";
				$zx=$row['Furnished'];
				 echo "$zx";
    echo "<tr><td>address:</td><td><textarea name='t7' rows='5' cols='40'>".$row['Address']."</textarea></td></tr>";
	 if($zx=='unfurnished')
	 {
	  echo "<tr><td>furnished:</td><td><input type='radio' name='t8'  value='unfurnished' checked>unfurnished&nbsp;<input type='radio' name='t8' value='semi-furnished'>semi-furnished&nbsp;<input type='radio' name='t8' value='fully-furnished'>fully-furnished</td></tr>";
	 
	 }
	 elseif($zx=='semi-furnished')
	 {
		 echo "<tr><td>furnished:</td><td><input type='radio' name='t8'  value='unfurnished'>unfurnished&nbsp;<input type='radio' name='t8' value='semi-furnished' checked>semi-furnished&nbsp;<input type='radio' name='t8' value='fully-furnished'>fully-furnished</td></tr>";
	 }
	 else
		 echo "<tr><td>furnished:</td><td><input type='radio' name='t8'  value='unfurnished'>unfurnished&nbsp;<input type='radio' name='t8' value='semi-furnished'>semi-furnished&nbsp;<input type='radio' name='t8' value='fully-furnished' checked>fully-furnished</td></tr>";

        echo "<tr><td>detailed description:</td><td><textarea name='t9' rows='8' cols='50'>".$row['Text_Area']."</textarea></td></tr>"; 
    echo "<tr><td>Set Rent:</td><td><input type='text' name='t10' value='".$row['Rent']."'></td></tr>";
    echo "<tr><td>Add photo-1:</td><td><input type='text' name='t11' value='".$row['Seller_ph1']."'></td></tr>";
	 echo "<tr><td>Add photo-2:</td><td><input type='text' name='t12' value='".$row['Seller_ph2']."'></td></tr>";
	  echo "<tr><td>Add photo-3:</td><td><input type='text' name='t13' value='".$row['Seller_ph3']."'></td></tr>";
	   echo "<tr><td>Add photo-4:</td><td><input type='text' name='t14' value='".$row['Seller_ph4']."'></td></tr>";
	    echo "<tr><td>Add photo-5:</td><td><input type='text' name='t15' value='".$row['Seller_ph5']."'></td></tr>";
		echo "<tr><td colspan='2' center><input type='submit' name='edit' value='edit'>&nbsp;&nbsp;<input type='reset' name='b2' value='clear'></td></tr>";
    
          }
		  echo "</table></form>";
		  if(isset($_GET['edit']))
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
$sql = "update seller set name='$u',property_type='$c',Type_bhk='$d',Location='$e',Locality='$f',Address='$g',Furnished='$h',Text_Area='$i',Rent='$j',Seller_ph1='$k',Seller_ph2='$l',Seller_ph3='$m',Seller_ph4='$n',Seller_ph5='$o' where uinque_id=$p";
$result1 = mysql_query($sql,$con);
if($result1){
echo "update successful!!!";
}

 else
	 echo "error".mysql_error();
 mysql_close($con);
 }
}
// if successful redirect to delete_multiple.php 




            
            else
            {
                echo "alert('connection error')";
            }
      
			  ?>
			</td>
		</tr>
	 </table>
  </body>
</html>