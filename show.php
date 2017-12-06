<html>
 <body>
   <?php
      echo "<table>";
     $con=mysql_connect("localhost","root","");
           if($con)
           {    $r=mysql_select_db("project",$con);
                $qry="select * from seller";
                $result=mysql_query($qry,$con);
               while(($row=mysql_fetch_assoc($result))!=false)
          {
			  
echo "<tr>";
echo '<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" value="'.$row["uinque_id"].'"></td>';
echo'<td bgcolor="#FFFFFF">'.$row['seller_username'].'</td>';
echo '<td bgcolor="#FFFFFF">'.$row['Location'].'</td>';
echo '<td bgcolor="#FFFFFF">'.$row['Locality'].'</td>';
echo '<td bgcolor="#FFFFFF"><img src="'.$row['Seller_ph1'].'"></td>';
echo '</tr>';
echo '<tr>';
echo '<td colspan="4" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" value="Delete">&nbsp;&nbsp;<a href="edit.php?id='.$row["uinque_id"].'" class="btn btn-default">edit</a></td></td>';
echo '</tr>';

          
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