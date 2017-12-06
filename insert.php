<html>
<body>
<style>
#search {
    width: 10em;color:white;  height: 4em; background-color:rgb(153, 153, 102); font:italic bold 20px Georgia, serif; border-style:solid;border-color:white;margin-top:30px;margin-left:600px
}
body{
	background-color:rgb(253,216,16);
	font-family:arial;
	
}
</style>
<h1 style="font-size:50px;color:white;text-align:center"> Thank You for Choosing our Hostel Booking system . We have received your enquiry and our Team will contact you soon.  Have a Good Day!!!!</h1>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

$html = file_get_contents('thanks.html');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['submit'])){
$First = $_POST['First'];
$Second =$_POST['Second'];
$mail = $_POST['mail'];

$country = $_POST['country'];
$Address = $_POST['Address'];
$location = $_POST['location'];

$room = $_POST['room'];
$rooms_num =$_POST['rooms_num'];
$date =$_POST['date'];

$dates = $_POST['dates'];
$meals =$_POST['meals'];

$sql="SELECT * FROM date WHERE date='$date'";
$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1){
	echo "<p> <font color=orange font face='verdana' size='8pt'>Unsuccessful!All rooms are filled for the date you are looking for. Try different date.</font> </p>";
}
else
	{
 $sql = "INSERT INTO booking VALUES ('".$First."','".$Second."','".$country."','".$mail."','".$Address."','".$location."','".$room."','".$rooms_num."','".$date."','".$dates."','".$meals."')";
if ($conn->query($sql) === TRUE) {
	  echo "<p> <font color=orange font face='verdana' size='8pt'>First Name:</font> </p>\n";  
   echo "<p> <font color=white font face='courier' size='7pt'>$First</font> </p>";
  echo "<p> <font color=orange font face='verdana' size='8pt'>Second Name:</font> </p>";  
   echo "<p> <font color=white font face='courier' size='7pt'>$Second</font> </p>";
  echo "<p> <font color=orange font face='verdana' size='8pt'>Mail:</font> </p>";  
   echo "<p> <font color=white font face='courier' size='7pt'>$mail</font> </p>"; 
  echo "<p> <font color=orange font face='verdana' size='8pt'>Country:</font> </p>";  
   echo "<p> <font color=white font face='courier' size='7pt'>$country</font> </p>"; 
  echo "<p> <font color=orange font face='verdana' size='8pt'>Address:</font> </p>"; 
   echo "<p> <font color=white font face='courier' size='7pt'>$Address</font> </p>"; 
  echo "<p> <font color=orange font face='verdana' size='8pt'>Location:</font> </p>"; 
   echo "<p> <font color=white font face='courier' size='7pt'>$location</font> </p>"; 
  echo "<p> <font color=orange font face='verdana' size='8pt'>Room:</font> </p>";  
   echo "<p> <font color=white font face='courier' size='7pt'>$room</font> </p>"; 
  echo "<p> <font color=orange font face='verdana' size='8pt'>Number of rooms:</font> </p>"; 
   echo "<p> <font color=white font face='courier' size='7pt'>$rooms_num</font> </p>"; 
  echo "<p> <font color=orange font face='verdana' size='8pt'>Check in Date:</font> </p>"; 
   echo "<p> <font color=white font face='courier' size='7pt'>$date</font> </p>"; 
  echo "<p> <font color=orange font face='verdana' size='8pt'>Check Out Date:</font> </p>"; 
   echo "<p> <font color=white font face='courier' size='7pt'>$dates</font> </p>";
  echo "<p> <font color=orange font face='verdana' size='8pt'>Meals to be provided:</font> </p>";  
   echo "<p> <font color=white font face='courier' size='7pt'>$meals</font> </p>"; 
} }
}



$conn->close();
?>
<form onsubmit="myFunction()">
<input type="submit" id="search" value="CONFIRM NOW" class="search" name="submit" >
</form>
<script>
function myFunction() {
    alert("Thank you for verifying your details. Our Team will contact you soon.");
}
</script>

</body>
</html>
