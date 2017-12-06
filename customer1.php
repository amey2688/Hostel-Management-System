 
  <html>
<head>
</head>
<body>
Apply filters
<form name='f1' method='get' action='customer1.php'>
<TABLE cellspacing='10' cellpadding='10' align='center' border='1'>
 <tr>
   <th>set area</th><th>Set Range</th><th>no. of rooms</th><th>property type</th><th>furnished</th>
 </tr>
 <tr>
 <td>
 <SELECT NAME='t1'>
<?php

  $con=mysql_connect("localhost","root","");
           if($con)
           {    //$x=$_SESSION['username'];
	            $r=mysql_select_db("project",$con);
                $qry="select Locality from seller where Location='vellore'";
                $result=mysql_query($qry,$con);
               while(($row=mysql_fetch_assoc($result))!=false)
          {
                            // <OPTION VALUE='vellore'>vellore</OPTION>

            echo "<OPTION VALUE='".$row['Locality']."'>".$row['Locality']."</OPTION>";
           
          }
            }
            else
            {
                echo "alert('connection error')";
            }
      


?>
</select>
</td>
<td><select name='t2'>
                 <OPTION VALUE='0'>below 1000</OPTION>
	             <OPTION VALUE='1000'>1000-2000</OPTION>
                 <OPTION VALUE='2000'>2000-3000</OPTION>
                 <OPTION VALUE='3000'>3000-4000</OPTION>
				 <OPTION VALUE='4000'>4000-5000</OPTION>
				 <OPTION VALUE='5000'>5000-6000</OPTION>
	             <OPTION VALUE='6000'>6000-7000</OPTION>
				 <OPTION VALUE='7000'>7000-8000</OPTION>
				 <OPTION VALUE='8000'>8000-9000</OPTION>
				 <OPTION VALUE='9000'>9000-10000</OPTION>
				 <OPTION VALUE='10000'>above 10000</OPTION>
				 </select></td>
  <td> <SELECT NAME='t4'>
                 <OPTION VALUE='1bhk'>1bhk</OPTION>
                 <OPTION VALUE='2bhk'>2bhk</OPTION>
                 <OPTION VALUE='3bhk'>3bhk</OPTION>
                 <OPTION VALUE='4bhk'>4bhk</OPTION>
                 </SELECT>
   </td>
   <td>
     <SELECT NAME='t5'>
                 <OPTION VALUE='appartment'>Appartment</OPTION>
                 <OPTION VALUE='villa'>villa</OPTION>
                 <OPTION VALUE='bunglow'>bunglow</OPTION>
                 </SELECT>
   </td>
   <td>
    <SELECT NAME='t6'>
                 <OPTION VALUE='fully-furnished'>Fully furnished</OPTION>
                 <OPTION VALUE='Semi-furnished'>Semi furnished</OPTION>
                 <OPTION VALUE='unfurnished'>Unfurnished</OPTION>
                 </SELECT>
   </td>
</tr>
<tr>
 <td colspan='6' align='center'><input type='submit' name='apply' value='apply'></td>
</tr>
</TABLE>
<hr width='500' align='center' size='3'>
</form>

<?php
  // echo "hnlkm";
	   $a=$_GET['t1'];
	 //  echo $a;
	   $b=$_GET['t2'];
	   //echo $b;
	   //$c=$_GET['t3'];
	   $d=$_GET['t4'];
	    //echo $d;
	   $e=$_GET['t5'];
	   //echo $e;
	   $f=$_GET['t6'];
	   //echo $f;
	  $con=mysql_connect("localhost","root","");
           if($con)
           {   // $x=$_SESSION['username'];
	            $r=mysql_select_db("project",$con);
				if($b<10000)
                $qry="select * from seller where Location='vellore' and Locality='$a' and Rent between $b and $b+1000 and Type_bhk='$d' and property_type='$e' and Furnished='$f'";
                else
					$qry="select * from seller where Location='vellore' and Locality='$a' and Rent >=10000 and Type_bhk='$d' and property_type='$e' and Furnished='$f'";

				$result=mysql_query($qry,$con);
				if (mysql_num_rows($result) > 0) {
               while(($row=mysql_fetch_assoc($result))!=false)
          {
			  echo "<table align='center' cellspacing='10' cellpadding='5' >";
            echo "<tr>";
            echo "<td>";
			 echo "<table>";
			   echo "<tr>";
			     echo "<tr><td>Property name:</td><td><a href='view.php?id=".$row['uinque_id']."'>".$row['Address']."</a></td><td rowspan='5'><img src='".$row['Seller_ph1']."' height='200' width='200'></td></tr>";
				  echo "<tr><td>Property type:</td><td>".$row['property_type']."</td><td></td></tr>";
				  echo "<tr><td>bhk:</td><td>".$row['Type_bhk']."</td><td></td></tr>";
				  echo "<tr><td>owner name:</td><td>".$row['seller_username']."</td><td></td></tr>";
				  echo "<tr><td>owner contact no:</td><td>".$row['Mobile_no']."</td><td></td></tr>";
				  echo "<tr><td colspan='3' align='center'>-----------------------------------------</td></tr>";
			 echo "</table>";
			echo "</td></tr>";
			echo "</table>";			
          }
				}
				else 
					echo "no entry found";
            }
            else
            {
                echo "alert('connection error')";
            }
	  
  
	   
	  
 
   
?>

</body>
</html>