<?php
$con = mysqli_connect("localhost","root","","train");
$result = mysqli_query($con,"select * from booking");

while ($re = mysqli_fetch_assoc($result)) {
echo "name:".$re['name']."<br>";
echo "Seat no:".$re['seatno']."<br>";
echo "Seat no:".$re['mobilenum']."<br><br>";
}
?>