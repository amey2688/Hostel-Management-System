<html>
<body bgcolor="black">
<style>
#search {
    width: 10em;color:white;  height: 4em; background-color:rgb(153, 153, 102); font:italic bold 20px Georgia, serif; border-style:solid;border-color:white;margin-top:30px;margin-left:600px
}
</style>
<h1 style="font-size:50px;color:#00FE3E;text-align:center"> Thank You for Choosing GABAMS INN. We have received your enquiry and our Team will contact you soon. Please verify your details and confirm, else fill the details again. Have a Good Day!!!!</h1>

<h2 style="font-size:50px;color:#FECC00;text-align:center"> Your Details </h2>
<?php
$html = file_get_contents('thanks.html');

// Create connection
$conn = mysqli_connect("localhost","root","","booking");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])){
$First = $_POST['First'];
$Second =$_POST['Second'];
$mail = $_POST['mail'];

$country = $_POST['country'];
$cno = $_POST['cno'];


$sql="SELECT * FROM date WHERE date='$date'";
$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1){
	echo "<p> <font color=orange font face='verdana' size='8pt'>Unsuccessful! Hostel already booked.</font> </p>";
}
else
	{
 $sql = "INSERT INTO booking VALUES ('".$First."','".$Second."','".$country."','".$mail."','".$cno."')";
 if (mysqli_query($conn, $sql)) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


$conn->close();
?>
<form onsubmit="myFunction()">
<input type="submit" id="search" value="CONFIRM NOW" class="search" name="submit" >
</form>
<script>
function myFunction() {
    alert("Thank you for booking!!!");
}
</script>

</body>
</html>
