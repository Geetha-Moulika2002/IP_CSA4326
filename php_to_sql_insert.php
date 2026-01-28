<?php 
$con=mysqli_connect("localhost","root","");
mysqli_query($con,"CREATE DATABASE IF NOT EXISTS train");
mysqli_select_db($con,"train");
mysqli_query($con,"CREATE TABLE IF NOT EXISTS booking(seatno VARCHAR(2),name VARCHAR(20), mobilenum VARCHAR(13))");
if(isset($_POST['su'])){
mysqli_query($con,"INSERT INTO booking(seatno,name,mobilenum) VALUES('$_POST[se]','$_POST[na]','$_POST[mo]')");
}
?>
<form method="POST">
Name:<input type="text" name="na"><br>
Seat No: <input type="text" name="se"><br>
Mobile Nuber: <input type="number" name="mo"><br>
<input type="submit" name="su" value="Submit"><br>
</form>

