<?php session_start();?>
<html>
 <body>
   <?php
      //echo "hello".$_SESSION['username'];
      echo "<table>";
     $con=mysql_connect("localhost","root","");
           if($con)
           {    //$x=$_SESSION['username'];
		        $y=$_GET['id'];
	            $r=mysql_select_db("project",$con);
                $qry="select * from seller where uinque_id='$y'";
                $result=mysql_query($qry,$con);
               while(($row=mysql_fetch_assoc($result))!=false)
          {
            echo "<tr>";
            echo "<td>".$row['Text_Area']."</td><td><img src='".$row['Seller_ph1']."' class='img-thumbnail' height='200' width='200'></td></tr>";
            echo "<tr><td>".$row['seller_username']."</td></tr>";
            echo "<tr><td>".$row['Type_bhk']."</td></tr>";
            echo "<tr><td>".$row['Location']."</td></tr>";
            echo "<tr><td>".$row['property_type']."</td></tr>"; 
            echo "<tr><td>".$row['Address']."</td></tr>"; 
			echo "<tr><td>".$row['Locality']."</td></tr>"; 
			echo "<tr><td>".$row['Text_Area']."</td></tr>"; 
			echo "<tr><td>".$row['Mobile_no']."</td></tr>"; 
			echo "<tr><td>".$row['Rent']."</td></tr>"; 
			echo "<tr><td>".$row['Furnished']."</td></tr>"; 
			echo "<tr><td>".$row['property_name']."</td></tr>"; 
			//echo "<tr><td>".$row['uinque_id']."</td></tr>"; 
			echo" <img src='".$row['Seller_ph1']."' class='img-thumbnail' height='200' width='200'>";
		echo" <img src='".$row['Seller_ph2']."' class='img-thumbnail' height='200' width='200'>";
		echo" <img src='".$row['Seller_ph3']."' class='img-thumbnail' height='200' width='200'>";
		echo" <img src='".$row['Seller_ph4']."' class='img-thumbnail' height='200' width='200'>";
		echo" <img src='".$row['Seller_ph5']."' class='img-thumbnail' height='200' width='200'>";
          }
            }
            else
            {
                echo "alert('connection error')";
            }
      
    echo "</table></td>"
   ?>
 </body>
</html>