<?php session_start();?>
<html>
<head>


<link rel="stylesheet" type="text/css" href="bootstrap.min.css">


</head>

<body>

<form name='f1' method='post' action='del.php'>
<table  width="400" border="0" cellspacing="1" cellpadding="0">
<?php

$dbc = mysqli_connect('localhost','root','','project')
or die('Error connecting to MySQL server');

$query = "select * from seller where name='".$_SESSION['username']."'";

$result = mysqli_query($dbc,$query)
or die('Error querying database');

while ($row=mysqli_fetch_array($result)) {
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
?>
</form>
</table>





<?php
if(isset($_POST['delete']))
{
    $checkbox = $_POST['checkbox'];

    for($i=0;$i<count($checkbox);$i++){

     $del_id = $checkbox[$i];
     $sql = "DELETE FROM seller WHERE uinque_id='$del_id'";
     $result = mysqli_query($dbc,$sql);
    }
    // if successful redirect to delete_multiple.php 
   if($result){
        echo "delete successful!!!";
    }
 }
 
mysqli_close($dbc);

?>

<script src="bootstrap.min.js">

</body>

</html>

