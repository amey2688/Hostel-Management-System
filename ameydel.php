
<?php session_start();?>
<!DOCTYPE html>
<html>
 <body>
   <?php
      echo "hello".$_SESSION['username'];
	  echo "<form name='f1' method='post' action='show.php'>";
      echo "<table>";
     $con=mysql_connect("localhost","root","");
           if($con)
           {    $x=$_SESSION['username'];
	            $r=mysql_select_db("project",$con);
                $qry="select * from seller where name='$x'";
                $result=mysql_query($qry,$con);
               while($row=mysql_fetch_assoc($result)==FALSE)
          {
			
           echo "<tr>";
			//echo '<td align="center" bgcolor="#FFFFFF"><input name="radio" type="radio" value="'.$row["uinque_id"].'"></td>';
            echo "<td>".$row['Text_Area']."</td><td><img src='".$row['Seller_ph1']."'></td></tr>";
            echo "<tr><td>".$row['seller_username']."</td></tr>";
            echo "<tr><td>".$row['Type_bhk']."</td></tr>";
            echo "<tr><td>".$row['Location']."</td></tr>";
            echo "<tr><td>".$row['property_type']."</td></tr>"; 
            echo "<tr><td>".$row['Address']."</td></tr>"; 
			echo "<tr><td>".$row['uinque_id']."</td></tr>"; 
			echo '<tr>';
echo '<td colspan="4" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" value="Delete">&nbsp;&nbsp;<a href="edit.php?id='.$row["uinque_id"].'" class="btn btn-default">edit</a></td></td>';
echo '</tr>'; 
          }
            }
            else
            {
                echo "alert('connection error')";
            }
      
    echo "</form></table>"
   ?>
   <?php
if(isset($_POST['delete']))
{
    $c = $_POST['radio'];

    //for($i=0;$i<count($checkbox);$i++){

     //$del_id = $checkbox[$i];
     $sql = "DELETE FROM seller WHERE uinque_id='$c'";
     $result = mysql_query($sql,$con);
	 if($result){
        echo "delete successful!!!";
    }
    }
    // if successful redirect to delete_multiple.php 
   
 
 
mysql_close($con);

?>

 </body>
</html>